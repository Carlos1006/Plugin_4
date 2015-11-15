var div="div",span = "span",ul="ul",a="a",li="li",lbl="label",img="img",p="p",swing="swing",linea="linear",tr = "tr", td = "td", opt = "option";
var normal = 0, up = 1, down = 2;
;(function($,Math,Document,Window,undefined) {
    $.attrHooks['attributename'] = {
        set: function(elem, value, name) {
            elem.setAttributeNS(null, 'attributeName', value + '');
            return value;
        }
    };
    var spliceRegex     = /^(.+)\s?\-\s?((?:date)||(?:num)||(?:txt)||(?:money))$/;
    var splitMysqlDate  = /^(\d{4})(?:\-|\/|\s)(\d{1,2})(?:\-|\/|\s)(\d{1,2})$/;
    var spliDate   = /^(\d{1,2})(?:\/||\-)(\w+)\/(\d{4})$/;
    var numTabs    = 0;
    var tabs       = [];
    var tabsTypes  = ["txt","date","num","money"];
    var stateClass = ["","upLabel","downLabel"];
    var months     = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
    var instances  = [];
    function pixel(value) {
        return value+"px";
    };
    function percent(value) {
        return value+"%";
    };
    function margTop() {
        var main = $(this);
        for(var i in arguments) {
            var selector  = arguments[i];
            var object    = main.find(selector);
            var parent    = object.parent();
            var objHeight = object.height();
            var parHeight = parent.innerHeight();
            var value     = (parHeight/2)-(objHeight/2);
            object.css("margin-top",value);
        }
    };
    function refMargTop(refObj,selectors) {
        var object = $(selectors);
        var parent = refObj;
        var parHeight = parent.innerHeight();
        object.each(function(){
            var object = $(this);
            var objHeight = object.height();
            var value     = (parHeight/2)-(objHeight/2);
            object.css("margin-top",value);
        });
    };
    function imargTop(obj) {
        var parent    = obj.parent();
        var objHeight = obj.height();
        var parHeight = parent.innerHeight();
        var value     = (parHeight/2)-(objHeight/2);
        obj.css("margin-top",value);
    };
    function jmargTop(obj) {
        var parent    = $(this);
        var objHeight = obj.height();
        var parHeight = parent.innerHeight();
        var value     = (parHeight/2)-(objHeight/2);
        obj.css("margin-top",value);
    };
    function imargLeft(obj) {
        var parent    = obj.parent();
        var objWidth  = obj.width();
        var parWidth  = parent.innerWidth();
        var value     = (parWidth/2)-(objWidth/2);
        obj.css("margin-left",value);
    };
    function equalToHeight() {
        var main = $(this);
        for(var i in arguments) {
            var selector = arguments[i];
            var object   = main.find(selector);
            var objWidth = object.width();
            object.height(objWidth);
        }
    };
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    };
    function getDims(w,h) {
        return  {width:w,height:h};
    };
    function getPath(name) {
        return "http://localhost/__naker/Plugin_4/Slide/rsc/"+name;
    };
    function tagForm(name) {
        return "<"+name+">";
    };
    function getClass(name) {
        return {class:name};
    };
    function getColor(r,g,b) {
        return {red:r,green:g,blue:b};
    };
    function pad(value) {
        return value<9?"0"+value:value;
    }
    function processTabstring(args) {
        for(var i in args) {
            var arg = args[i];
            var match = spliceRegex.exec(arg);
            var name = match[1];
            var type = match[2];
            var tab = {name:name,type:type,id:makeid()};
            tabs.push(tab);
        }
    }
    function isInt(n) {
        return Number(n) === n && n % 1 === 0;
    }
    function isFloat(n) {
        return n === Number(n) && n % 1 !== 0;
    }
    function Table(container,name) {
        this.init(container,name);
        this.define();
        this.set();
        this.events();
    };
    Table.prototype.init         = function(container,name) {
        this.js         = container;
        this.main       = $(container);
        this.globalId   = makeid();
        this.name       = name;
        this.main.addClass("superTable");
        this.main.attr("globalId",this.globalId);
        this.createForm();
        this.setTabs();
    };
    Table.prototype.setTabs      = function() {
        this.tabSize = 100/tabs.length;
        var _this = this;
        var head  = this.main.find(".bodyHead");
        tabs.forEach(function(elem,num){
            var tabh  = _this.createObj(span,{type:elem.type,id:elem.id,state:normal,num:num});
            var label = _this.createObj(lbl,{text:elem.name});
            tabh.css("width",percent(_this.tabSize));
            tabh.append(label);
            head.append(tabh);
        });
        head = null;
        this.tabnum = tabs.length;
    };
    Table.prototype.define       = function() {
        this.head      = this.main.find(".tableHeader");
        this.select    = this.main.find(".selector");
        this.drop      = this.select.find("select");
        this.search    = this.main.find(".inputSearch");
        this.searchBtn = this.main.find(".search label");
        this.body      = this.main.find(".tableBody");
        this.headT     = this.body.find(".bodyHead");
        this.bodyT     = this.body.find(".bodyBody");
        this.tabh      = this.headT.find("span");
        this.rowsNum   = 0;
        this.saveTopRow = null;
        this.originalRows = [];
    };
    Table.prototype.set          = function() {
        margTop.call(this.head,".search",".selector","svg");
        //margTop.call(this.body,"label","td");
        this.bodyT.myOverflow({ round:false, 
                                visible:true,
                                color:getColor(200,200,200),
                                bar:getColor(0,0,0),
                                alpha:true,
                                hightlight:false,
                                active:getColor(180,180,180)
                              });
        this.drop.empty();
        this.drop.append(this.createObj(opt,{value:"all",text:"Todos los campos"}));
        for(var i in tabs) {
            var tab     = tabs[i];
            this.drop.append(this.createObj(opt,{value:i,text:"Por "+tab.name}));
        }
    };
    Table.prototype.getRows      = function() {
        /*var rows      = this.bodyT.find("tr");
        var arrayTr   = [];
        rows.each(function(num,elem){
            var arrayTd = [];
            $(elem).find("td").each(function(num_,elem_) {
                arrayTd.push($(elem_).text());
            });
            arrayTr.push(arrayTd);
        });
        return arrayTr.slice();*/
        return this.originalRows.slice();
    };
    Table.prototype.resetRows    = function(newOrder) {
        this.bodyT.find("tbody").empty();
        for(var i in newOrder) {
            var row         = newOrder[i];
            var numRow      = i+1;
            var tableRow    = this.createObj(tr,{num:numRow});
            var numCell     = 0;
            for(var j in row) {
                var text = row[j];
                var cell = this.createObj(td,{num:numCell,text:text});
                cell.css("width",percent(this.tabSize));
                cell.css("margin-top",this.saveTopRow);
                tableRow.append(cell);
                numCell++;
            }
            this.bodyT.find("tbody").append(tableRow);
        }
        this.rowEvents();
    };
    Table.prototype.rowEvents    = function() {
        this.rows      = this.body.find("tr");
        this.rows
        .hover(function() {
            $(this).prev().addClass("noBorder");
        })
        .mouseleave(function(){
            $(this).prev().removeClass("noBorder");
        });
    };
    Table.prototype.events       = function() {
        var _this = this;
        this.search
        .keyup(function(e) {
            if((e.keyCode == 8 && $(this).val() == '') || e.keyCode == 13) {
                _this.searchBtn.trigger("click");
            }
        });
        this.searchBtn
        .click(function() {
            _this.tabh.attr("state",0).removeClass("upLabel downLabel");
            _this.tabh.trigger("sort");
            var value   = _this.search.val();
            var drop    = _this.drop.val();
            var rows    = _this.originalRows.slice();
            var matchs  = [];
            var regexp = new RegExp(value,"i");
            var findFlaf = false;
            if(value != '') {
                if(drop == "all") {
                    for(var i in rows) {
                        var row = rows[i];
                        findFlaf = false;
                        for(var j in row) {
                            var cell = row[j];
                            if(cell.match(regexp)) {
                                findFlaf = true;
                            }
                        }
                        if(findFlaf) {
                            matchs.push(row);
                        }
                    }
                }else {
                    for(var i in rows) {
                        var row = rows[i];
                        var cell = row[drop];
                        if(cell.match(regexp)) {
                            matchs.push(row);
                        }
                    }
                }
            }else {
                matchs = rows;
            }
            _this.resetRows(matchs);
        });
        this.tabh
        .click(function() {
            _this.search.val(null);
            var state = parseInt($(this).attr("state"));
            _this.tabh.attr("state",0).removeClass("upLabel downLabel");
            state++;
            if(state>2) {
                state = 0;
            }
            $(this).attr("state",state).addClass(stateClass[state]).trigger("sort");
        })
        .on("sort",function() {
            var sortLogic = $(this).attr("num");    //valor correspondiente a ordenar
            var sortOrder = $(this).attr("state");  //orden de ordenamiento
            var prevOrder = _this.getRows();        //orden original
            var typeSort  = tabs[sortLogic].type;   //tipo de ordenamiento
            var sortFunction = -1;
            if(sortOrder == 1 || sortOrder == 2) {
                if(typeSort == "txt" || typeSort =="num") {
                    sortFunction = function(a,b) {
                        if (a[sortLogic] < b[sortLogic])
                            return sortOrder==1?-1:1;
                        if (a[sortLogic] > b[sortLogic])
                            return sortOrder==1?1:-1;
                        return 0;
                    };
                }else if(typeSort == "date") {
                    sortFunction = function(a,b) {
                        var A = $.parseDate(a[sortLogic]);
                        var B = $.parseDate(b[sortLogic]);
                        if(sortOrder == 2) {
                            var C = A;
                            A = B;
                            B = C;
                        }
                        return A - B;
                    };
                }else if(typeSort == "money") {
                    sortFunction = function(a,b) {
                        var A = $.parseMoney(a[sortLogic]);
                        var B = $.parseMoney(b[sortLogic]);
                        if (A < B)
                            return sortOrder==1?-1:1;
                        if (A > B)
                             return sortOrder==1?1:-1;
                        return 0;
                    };
                }
                prevOrder.sort(sortFunction);
            }
            _this.resetRows(prevOrder);
        });
        this.drop.change(function() {
            var value = $(this).val();
            if(value == "all") {
                _this.search.attr("placeholder","Buscar en todo...");  
            }else {
                _this.search.attr("placeholder","Buscar por "+tabs[value].name.toLowerCase()+"...");  
            }
        });
    };
    Table.prototype.createSvg    = function(points) {
        return "<svg viewBox='0 0 50 50' preserveAspectRatio='none'><polygon fill='rgb(200,200,200)' points='"+points.join(" ")+"'></polygon></svg>";
    };
    Table.prototype.createObj    = function(tag,attr) {
        return $(tagForm(tag),attr);
    };
    Table.prototype.createForm   = function() {
        this.main.empty();
        var h = this.createObj(div,getClass("tableHeader"));
        var h_span1 = this.createObj(span,getClass("title"));
        h_span1.append(this.createObj(span,{text:this.name}));
        var h_span2 = this.createObj(span,getClass("selector"));
        var h_span3 = this.createObj(span,getClass("search"));
        var h_span3_input = this.createObj("input",$.extend(getClass("inputSearch"),{type:"text",placeholder:"Buscar en todo..."}));
        var h_span3_label = this.createObj(lbl);
        var h_span3_label_svg = "<svg viewBox='0 0 250.313 250.313' fill='rgb(200,200,200)'><path style='fill-rule:evenodd;clip-rule:evenodd;' d='M244.186,214.604l-54.379-54.378c-0.289-0.289-0.628-0.491-0.93-0.76c10.7-16.231,16.945-35.66,16.945-56.554C205.822,46.075,159.747,0,102.911,0S0,46.075,0,102.911c0,56.835,46.074,102.911,102.91,102.911c20.895,0,40.323-6.245,56.554-16.945c0.269,0.301,0.47,0.64,0.759,0.929l54.38,54.38c8.169,8.168,21.413,8.168,29.583,0C252.354,236.017,252.354,222.773,244.186,214.604z M102.911,170.146c-37.134,0-67.236-30.102-67.236-67.235c0-37.134,30.103-67.236,67.236-67.236c37.132,0,67.235,30.103,67.235,67.236C170.146,140.044,140.043,170.146,102.911,170.146z'/></svg>";
        h_span2.append(this.createObj("select"));
        h_span3_label.append(h_span3_label_svg);
        h_span3.append(h_span3_input,h_span3_label);
        h.append(h_span1,h_span2,h_span3);
        var b = this.createObj(div,getClass("tableBody"));
        var b_head = this.createObj(div,getClass("bodyHead"));
        var b_body = this.createObj(div,getClass("bodyBody"));
        var b_body_table = this.createObj("table",getClass("bodyTable"));
        b_body_table.append(this.createObj("tbody"));
        b_body.append(b_body_table);
        b.append(b_head,b_body);
        this.main.append(h,b);
    };
    Table.prototype.createRow    = function(params) {
        this.rowsNum++;
        var tdNum = 0;
        var tableRow = this.createObj(tr,{num:this.rowsNum});
        var sortable = [];
        for(var i in params) {
            var arg = params[i];
            var cell = this.createObj(td,{num:tdNum,text:arg});
            cell.css("width",percent(this.tabSize));
            tdNum++;
            if(this.saveTopRow != null) {
                cell.css("margin-top",this.saveTopRow);
            }
            tableRow.append(cell);
            sortable.push(arg);
        }
        this.bodyT.find("tbody").append(tableRow);
        if(this.saveTopRow == null) {
            margTop.call(this.body,"td");
            this.saveTopRow = this.body.find("td").css("margin-top");
        }
        this.originalRows.push(sortable);
        this.rowEvents();
    };
    $.date          = function(year,month,day) {
        var argLength = arguments.length;
        var backDate;
        if(argLength == 3) {
            backDate = [pad(arguments[2]),months[arguments[1]-1],arguments[0]].join("/");
        }else if(argLength == 1) {
            var match = splitMysqlDate.exec(arguments[0]);
            backDate = [pad(parseInt(match[3])),months[match[2]-1],match[1]].join("/");
        }
        return backDate;
    };
    $.parseDate     = function(dateString) {
        var match = spliDate.exec(dateString);
        var newDate = new Date();
        newDate.setDate(parseInt(match[1]));
        newDate.setMonth(parseInt(months.indexOf(match[2])));
        newDate.setFullYear(parseInt(match[3]));
        return newDate;
    };
    $.parseMoney    = function(moneyString) {
        var match = /^\$ ?(\d+\.\d{2})$/.exec(moneyString);
        return parseFloat(match[1]);
    }
    $.money         = function(moneyNum) {
        var final = "$ ";
        if(isFloat(moneyNum)) {
            moneyNum = moneyNum.toFixed(2);
            final = final+moneyNum;
        }else if(isInt(moneyNum)) {
            final = final+moneyNum+".00";
        }
        return final;
    }
    $.fn.DataTable  = function() {
        var slicedArgs = Array.prototype.slice.call(arguments, 1);
        processTabstring(slicedArgs);
        var instance = new Table(this,arguments[0]);
        instances[instance.globalId] = instance;
    };
    $.fn.AddRow     = function() {
        var id = $(this).attr("globalid");
        var instance = instances[id];
        if(instance.tabnum == arguments.length) {
            instance.createRow(arguments);
        }
    };

})(jQuery,Math,document,window);
