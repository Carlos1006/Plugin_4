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
    function Table(container) {
        this.init(container);
        this.define();
        this.set();
        this.events();
    };
    Table.prototype.init         = function(container) {
        this.js         = container;
        this.main       = $(container);
        this.globalId   = makeid();
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
        this.rows      = this.body.find("tr");
        this.tabh      = this.headT.find("span");
        this.rowsNum   = 0;
        this.saveTopRow = null;
        this.originalRows = [];
    };
    Table.prototype.set          = function() {
        margTop.call(this.head,".title",".search",".selector","svg");
        margTop.call(this.body,"label","td");
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
        this.rows
        .hover(function(){
            $(this).prev().addClass("noBorder");
        })
        .mouseleave(function(){
            $(this).prev().removeClass("noBorder");
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
        processTabstring(arguments);
        var instance = new Table(this);
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
