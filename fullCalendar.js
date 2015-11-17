;(function(window,document,$,Math,undefined) {
    var globals = [];
    function getMonth(name,days) {
        return {name:name,days:days};
    };
    function pad(num) {
        return num<10?"0"+num:num;
    }
    function tagForm(name) {
        return "<"+name+">";
    };
    function leapYear(year) {
        return ((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0);
    };
    function getParent(object,className) {
        var parent = object.parent();
        var thisClass = parent.attr("class");
        if(thisClass != className) {
            getParent(parent,className);
        }
        return parent;
    };
    function getClass(name) {
        return {class:name};  
    };
    function avg() {
        var array = $.map(arguments, function(value, index) {return [value];});
        var total = array.reduce(function(pv, cv) { return pv + cv; }, 0);
        return total/arguments.length;
    };
    function rgbAttr(r,g,b) {
        return "rgb("+r+","+g+","+b+")";
    }
    function avgColor(attrColor1,attrColor2) {  
        var R=0, G=1, B=2;
        var splitRGb = /rgb\((\d+)\,(\d+)\,(\d+)\)/;
        var spaces   = / /g;
        var match1   = splitRGb.exec(attrColor1.replace(spaces,''));
        var match2   = splitRGb.exec(attrColor2.replace(spaces,''));
        var r2 = parseInt(match2[1]);
        var g2 = parseInt(match2[2]);
        var b2 = parseInt(match2[3]);
        var r1 = parseInt(match1[1])==200?r2:parseInt(match1[1]);
        var g1 = parseInt(match1[2])==200?g2:parseInt(match1[2]);
        var b1 = parseInt(match1[3])==200?b2:parseInt(match1[3]);
        var fR = parseInt(avg(r1,r2));
        var fG = parseInt(avg(g1,g2));
        var fB = parseInt(avg(b1,b2));
        return rgbAttr(fR,fG,fB);
    };
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for( var i=0; i < 5; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    };
    function FullCalendar(calendar,options) {
        this.yearEnabled = options.y;
        this.monthLimits = options.m;
        this.oneMonth = options.m[0] == options.m[1];
        this.lblEnabled = options.lbl;
        this.initForm(calendar);
        this.definitions();
        this.sets();
        this.events();
        return this;
    };
    function clamp(value,max,min) {
        var back = value;
        if(value>max) {
            back = max;
        }else if(value<min) {
            back = min;
        }
        return back;
    };
    var undef = typeof undef;
    var div="div",ul="ul",li="li",lbl="label",img="img",p="p",swing="swing",linea="linear";
    var week     = ['D','L','M','X','J','V','S'];
    var defParam = {method:"post",dataType:"json"};
    var months   = {
         0:getMonth("Enero",31),
         1:getMonth("Febrero",28),
         2:getMonth("Marzo",31),
         3:getMonth("Abril",30),
         4:getMonth("Mayo",31),
         5:getMonth("Junio",30),
         6:getMonth("Julio",31),
         7:getMonth("Agosto",31),
         8:getMonth("Septiembre",30),
         9:getMonth("Octubre",31),
        10:getMonth("Noviembre",30),
        11:getMonth("Diciembre",31)
    };
    
    FullCalendar.prototype.initForm     = function(calendar) {
        this.obj   = calendar;
        this.main  = $(this.obj);
        this.globalId = makeid();
        this.main.attr("globalId",this.globalId);
        this.main.addClass("superFullCalendar");
        this.createMainForm();
    };
    FullCalendar.prototype.definitions  = function() {
        this.now          = new Date();
        this.today        = this.now.getDate();
        this.month        = this.now.getMonth();
        this.year         = this.now.getFullYear();
        if(this.month < this.monthLimits[0] || this.month > this.monthLimits[1]) {
            this.month = this.monthLimits[0];
        }
        this.monthLabel   = this.main.find(".nameMonth");
        this.yearBtn      = this.main.find(".yearContainer");
        if(this.yearEnabled) {
            this.swipe        = this.main.find(".swipeCalendar");
            this.yearList     = this.swipe.find("ul");
        }
        this.yearLabel    = this.main.find(".nameYear");
        this.head         = this.main.find(".headCalendar");
        this.body         = this.main.find(".bodyCalendar");
        this.monthBtn     = $(null).add(this.main.find(".prevMonth")).add(this.main.find(".nextMonth"));
        this.mainArea     = $(null).add(this.head).add(this.body);
        this.fullDay      = this.main.find(".fullDay");
        this.celebs       = [];
        this.ranges       = [];
        this.staticEvents = [];
        if(this.lblEnabled) {
            this.dateLabel    = this.main.find(".dateContainer");
        }
        this.visible      = false;
        this.animateReady = true;
        this.bodyFD       = this.main.find(".bodyFullDay");
        this.headFD       = this.main.find(".headerFullDay");
        this.closeFD      = this.main.find(".closeFullDay");
        this.animate      = {
            i:{marginTop:"0%"},
            b:{marginTop:"-80%"},
            h:{marginTop:"-20%"}
        };
        this.timeOuts     = [-1,-1];
    };
    FullCalendar.prototype.createDay    = function(numDay) {
        var $dayForm = $(tagForm(div),{class:"day",day:0,num:numDay});
        var $label   = $(tagForm(lbl),{text:0});
        var $p       = $(tagForm( p ));
        var $btn     = $(tagForm(div),{class:"openFullyDay"});
        $btn.append(this.createSvg(["15,0","35,0","35,15","50,15","50,35","35,35","35,50","15,50","15,35","0,35","0,15","15,15"]));
        $dayForm.append($label,$p,$btn);
        return $dayForm;
    };
    FullCalendar.prototype.sets         = function() {
        if(this.lblEnabled) {
            this.dateLabel.empty().text([this.today,months[this.now.getMonth()].name,this.year].join("/"));
        }
        if(this.yearEnabled) {
            this.yearList.empty();
        }
        this.body.find(".day").remove();
        this.yearLabel.text(this.year);
        this.monthLabel.text(months[this.month].name);
        for(var i=this.year-7; i<=this.year+7 && this.yearEnabled; i++) { 
            this.yearList.append(this.createObj(li,{text:i}));
        }
        for(var i=1; i<=42; i++) { 
            this.body.append(this.createDay(i));
        }
        //Mas definiciones
        this.day     = this.main.find(".day");
        if(this.yearEnabled) {
            this.anyYear = this.yearList.find("li");
        }
        this.setDays();
        this.getRanges();
        this.fullDayBtn = this.main.find(".openFullyDay");
    };
    FullCalendar.prototype.checkRange   = function() {
        this.day.find("p").attr("style",null);
        var enter,range,start,limit,isYear1,isYear2,isMonth1,isMonth2;
        for(var i in this.ranges) {
            enter       = false;
            start       = limit = 0;
            range       = this.ranges[i];
            isMonth1    = this.month == range.month1;
            isMonth2    = this.month == range.month2;
            isYear1     = this.year == range.year1;
            isYear2     = this.year == range.year2;
                if(isYear1 && isYear2) {
                    enter = true;
                    if(isMonth1 && isMonth2) {
                        start = range.day1;
                        limit = range.day2;
                    }else if(isMonth1) {
                        start = range.day1;
                        limit = months[range.month1].days;
                    }else if(isMonth2) {
                        start = 1;
                        limit = range.day2;
                    }
                }else if(isYear1) {
                    if(isMonth1) {
                        start = range.day1;
                        limit = months[range.month1].days;
                        enter = true;
                    }else if(this.month>range.month1) {
                        start = 1;
                        limit = months[range.month1].days;
                        enter = true;
                    }
                }else if(isYear2) {
                    if(isMonth2) {
                        start = 1;
                        limit = range.day2;
                        enter = true;
                    }else if(this.month<range.month2) {
                        start = 1;
                        limit = months[this.month].days;
                        enter = true;
                    }
                }
            for(var i=start; i<=limit && enter; i++) {
                var parag   = this.day.filter(function(){
                    return $(this).attr("day") == i;
                }).find("p");
                
                var newAttr = avgColor(parag.css("background-color"),range.color);
                parag.css("background",newAttr);
            }
        }
    };
    FullCalendar.prototype.getRanges    = function() {
        var _this   = this;
        return;
        var params  = $.extend(defParam,{url:"../getRanges.php"});
        var request = $.ajax(params);
        request.done(function(rangeObject){
            rangeObject.forEach(function(range,num) {
                _this.ranges.push(range);
            });
            _this.checkRange();
        });
    };
    FullCalendar.prototype.setDays      = function() {
        var refDate = new Date();
        refDate.setDate(1);
        refDate.setFullYear(this.year);
        refDate.setMonth(this.month);
        var dayOfWeek = refDate.getDay()+1;
        var leap      = leapYear(this.year);
        var days      = months[this.month].days;
        days         += this.month==1&&leap?1:0;
        this.day.removeClass("noDay").find("p").text(null);
        this.day.find("label").removeClass("today");
        var dayi   = 1;
        var limit1 = dayOfWeek;
        var limit2 = days+dayOfWeek;
        for(var i=1,thisDay; i<=42; i++) {
            thisDay = this.day.filter(function() {
                return $(this).attr("num") == i;
            });
            if(i<limit1 || i>=limit2) {
                thisDay.addClass("noDay");
                thisDay.attr("day",0);
            }else {
                thisDay.attr("day",dayi);
                thisDay.find("label").text(pad(dayi));
                if(dayi==this.now.getDate() && this.month==this.now.getMonth() && this.year==this.now.getFullYear()) {
                    thisDay.find("label").addClass("today");
                }
                dayi++;
            }
        }
        var change=limit1;
        var dateA;
        var newValue = 0;
        var value;
        this.day.filter(function() {
            return $(this).hasClass("noDay");
        }).attr("data-attr",20).each(function() {
            change--;
            if(change>0) {
                dateA = new Date(refDate.getTime());
                dateA.setDate(refDate.getDate()-change);
                value = dateA.getDate();
            }else{
                value = pad(++newValue);
            }
            $(this).attr("data-attr",value);
        });
        
        var data    = {month:this.month,year:this.year};
        var params  = $.extend(defParam,{url:"../getEvents.php",data:data});
        var request = $.ajax(params);
        var _this   = this;
        request.done(function(eventObject) {
            _this.celebs = [];
            _this.celebs = _this.getStaticEvents(_this.year,_this.month);
            eventObject.forEach(function(celeb,num) {
                var eventObj = $.getEvent(celeb.long,celeb.desc,celeb.pic);
                _this.setDinamicEvents(celeb.day,eventObj);
            });
            for(var i in _this.celebs) {
                var size = _this.celebs[i].length; 
                var text = _this.celebs[i][0].desc;
                if(size>1) {
                    text = text+"<b>"+(size-1)+"</b>";
                }
                _this.day.filter(function(){
                    return $(this).attr("day") == i;
                }).find("p").html(text);
            }
        });
    };
    FullCalendar.prototype.getDate      = function(day,month,year) {
        return [day,month,year].join(" de ");
    };
    FullCalendar.prototype.events       = function() {
        var _this = this;
        if(this.yearEnabled) {
            this.yearBtn.click(function() {
                _this.swipe.toggleClass("hiddenSwipe");
            });
            this.anyYear.click(function() {
                _this.year = parseInt($(this).text());
                _this.yearLabel.text(_this.year);
                _this.swipe.addClass("hiddenSwipe");
                _this.setDays();
                _this.checkRange();
            });
            this.mainArea.click(function(e){
                if($(e.target).attr("class") != "yearContainer") {
                    _this.swipe.addClass("hiddenSwipe");
                }
            });
        }
        if(!this.oneMonth) {
            this.monthBtn.click(function(){
                var targetClass = $(this).attr("class");
                var amt = 1;
                if(targetClass == "prevMonth") {
                    amt = -amt;
                }
                _this.month+=amt;
                _this.month = _this.month>_this.monthLimits[1]?_this.monthLimits[0]:_this.month;
                _this.month = _this.month<_this.monthLimits[0]?_this.monthLimits[1]:_this.month;
                _this.monthLabel.text(months[_this.month].name);
                _this.setDays();
                _this.checkRange();
            });
        }
        this.main.find(".day")
        .mouseenter(function(){
            var text = $(this).find("p").text();
            if($.trim(text)!='') {
                $(this).find(".openFullyDay").fadeIn(300);
            }
        })
        .mouseleave(function(){
            $(this).find(".openFullyDay").fadeOut(200);
        });
        this.fullDayBtn.click(function() {
            var parentDay  = getParent($(this),"day");
            var clickedDay = parseInt(parentDay.attr("day"));
            _this.headFD.text(_this.getDate(clickedDay,months[_this.month].name,_this.year));
            _this.bodyFD.empty();
            var dayCelebs = _this.celebs[clickedDay];
            var $event,path;
            for(var i=0; i<dayCelebs.length; i++) {
                $event  = _this.createObj(div,{class:"event"});
                path    = dayCelebs[i].pic;
                if(path != null && path != '' && typeof path != 'undefined') {
                    $event.addClass("eventImg");
                    var $img = _this.createObj("div",{});
                    $img.css("background-image","url(\""+path+"\")");
                    $event.append($img);
                }else{
                    $event.addClass("eventNImg");
                }
                var $p = _this.createObj(p,{text:dayCelebs[i].long});
                $event.prepend($p);
                _this.bodyFD.append($event);
            }
            if(_this.animateReady) {
                if(!_this.visible) {
                    _this.animateReady = false;
                    _this.fullDay.show();
                    _this.headFD.clearQueue();
                    _this.headFD.stop();
                    _this.headFD.animate(_this.animate.i,{
                        duration:450,
                        easing:swing
                    });
                    clearTimeout(_this.timeOuts[0]);
                    _this.timeOuts[0] = setTimeout(function() {
                        _this.headFD.parent().toggleClass("headShadow");
                    },500);
                    clearTimeout(_this.timeOuts[1]);
                    _this.timeOuts[1] = setTimeout(function() {
                        _this.bodyFD.clearQueue();
                        _this.bodyFD.stop();
                        _this.bodyFD.animate(_this.animate.i,{
                            duration:600,
                            easing  :swing,
                            complete:function() {
                                _this.visible = true;
                                _this.animateReady = true;
                                _this.closeFD.fadeIn(500);
                            }
                        });
                    },450);
                }
            }
        });
        this.closeFD.click(function() {
            if(_this.animateReady) {
                if(_this.visible) {
                    _this.animateReady = false;
                    _this.closeFD.fadeOut(200);
                    _this.bodyFD.clearQueue();
                    _this.bodyFD.stop();
                    _this.bodyFD.animate(_this.animate.b,{
                        duration:600,
                        easing  :swing
                    });
                    clearTimeout(_this.timeOuts[0]);
                    _this.timeOuts[0] = setTimeout(function() {
                        _this.headFD.parent().toggleClass("headShadow");
                    },650);
                    clearTimeout(_this.timeOuts[1]);
                    _this.timeOuts[1] = setTimeout(function() {
                        _this.headFD.clearQueue();
                        _this.headFD.stop();
                        _this.headFD.animate(_this.animate.h,{
                            duration:450,
                            easing:swing,
                            complete:function() {
                                _this.visible = false;
                                _this.animateReady = true;
                                _this.fullDay.hide();
                            }
                        });
                    },750);
                }
            }
        });
    };
    FullCalendar.prototype.createSvg    = function(points) {
        return "<svg viewBox='0 0 50 50' preserveAspectRatio='none'><polygon fill='rgb(200,200,200)' points='"+points.join(" ")+"'></polygon></svg>";
    };
    FullCalendar.prototype.createObj    = function(tag,attr) {
        return $(tagForm(tag),attr);
    };
    FullCalendar.prototype.createMainForm   = function() {
        var swipe = '';
        if(this.yearEnabled) {
            swipe  = this.createObj(div,getClass("swipeCalendar hiddenSwipe"));
            swipe.append(this.createObj(ul));
        }
        var head   = this.createObj(div,getClass("headCalendar"));
        var body   = this.createObj(div,getClass("bodyCalendar"));
        var full   = this.createObj(div,getClass("fullDay"));
        var month  = this.createObj(div,getClass("monthContainer"));
        var prev   = this.createObj(div,getClass("prevMonth"));
        var name   = this.createObj(div,getClass("nameMonth"));
        var next   = this.createObj(div,getClass("nextMonth"));
        if(this.oneMonth) {
            prev.addClass("noMonth");
            next.addClass("noMonth");
        }
        var year   = this.createObj(div,getClass("yearContainer"));
        if(!this.yearEnabled) {
            year.addClass("noYear");
        }
        var date; 
        if(this.lblEnabled) {
            date = this.createObj(div,getClass("dateContainer"));
        }
        var hFD    = this.createObj(div,getClass("headFDContainer"));
        var xFD    = this.createObj(div,getClass("closeFullDay"));
        var bFD    = this.createObj(div,getClass("bodyFDContainer"));
        var headFD = this.createObj(div,getClass("headerFullDay"));
        var bodyFD = this.createObj(div,getClass("bodyFullDay"));
        if(!this.oneMonth) {
            prev.append(this.createSvg(["50,00","00,25","50,50"]));
            next.append(this.createSvg(["00,00","50,25","00,50"]));
        }
        xFD.append(this.createSvg(["0,8","8,0","25,17","42,0","50,8","34,25","50,42","42,50","25,34","8,50","0,42","14,25"]));
        year.append(this.createObj(lbl,getClass("nameYear")));
        month.append(prev,name,next);
        hFD.append(xFD,headFD);
        bFD.append(bodyFD);
        head.append(month,year,date);
        for(var i in week)body.append(this.createObj(p,$.extend(getClass("weekLabel"),{text:week[i]})));
        full.append(hFD,bFD);
        this.main.append(swipe,head,body,full);
    };
    FullCalendar.prototype.setStaticEvents  = function(year,month,day,data) {
        if(this.staticEvents[year] == undefined) {
            this.staticEvents[year] = [];   
        } 
        if(this.staticEvents[year][month] == undefined) {
            this.staticEvents[year][month] = [];
        }
        if(this.staticEvents[year][month][day] == undefined) {
            this.staticEvents[year][month][day] = [];
        }
        this.staticEvents[year][month][day].push(data);
        console.log(this.staticEvents);
    };
    FullCalendar.prototype.setDinamicEvents = function(day,data) {
        if(this.celebs[day] == undefined) {
            this.celebs[day] = [];
        }
        this.celebs[day].push(data);
    };
    FullCalendar.prototype.getStaticEvents  = function(year,month) {
        var inMonth = [];
        if(this.staticEvents[year] != undefined && this.staticEvents[year][month] != undefined) {
            inMonth = this.staticEvents[year][month].slice();
        }
        return inMonth;
    };
    FullCalendar.prototype.setStaticRange   = function(range) {
        this.ranges.push(range);
    };
    
    $.fn.fullCalendar   = function() {
        var userOptions = arguments[0]||{};
        var options = {
            y:true,
            m:[0,11],
            lbl:true
        };
        var limits = [0,11];
        if(Array.isArray(userOptions.m)) {
            var value1 = userOptions.m[0]||0;
            var value2 = userOptions.m[1]||11;
            if(value1>=0 && value1<value2 && value2<=11 && value2>value1) {
                options.m = [value1,value2];
            }
            if(value1 != 0 && value2 !=11) {
                options.y = false;
            }
        }else if(userOptions.m != undefined && !isNaN(userOptions.m)) {
            if(userOptions.m>=0 && userOptions.m<=11) {
                options.m = [userOptions.m,userOptions.m];
                options.y = false;
            }
        }
        if(userOptions.y != undefined && !userOptions.y) {
            options.y = false;
        }
        if(userOptions.lbl != undefined && !userOptions.lbl) {
            options.lbl = false;
        }
        var instance = new FullCalendar(this,options);
        globals[instance.globalId] = instance;
    };
    $.fn.setEvent       = function() {
        var globalId = $(this).attr("globalId");
        var instance = globals[globalId];
        var arLength = arguments.length;
        var _year,_month,_day,_data;
        if(arLength==4) {
            _year   = arguments[0];
            _month  = arguments[1];
            _day    = arguments[2];
            _data   = arguments[3];
        }else if(arLength == 3) {
            _year   = instance.year;
            _month  = arguments[0];
            _day    = arguments[1];
            _data   = arguments[2];
        }else if(arLength == 2) {
            _year   = instance.year;
            _month  = instance.month;
            _day    = arguments[0];
            _data   = arguments[1];
        }
        var params = [_year,_month,_day,_data];
        instance.setStaticEvents.apply(instance,params);
    };
    $.fn.setRange       = function(dateObj1,dateObj2,color) {
        var globalId = $(this).attr("globalId");
        var instance = globals[globalId];
        var date = {day1:dateObj1.d, month1:dateObj1.m, year1:dateObj1.y,
                    day2:dateObj2.d, month2:dateObj2.m, year2:dateObj2.y,
                    color:color};
        var ready = false;
        if(date.year2 < date.year1) {
            var tempY  = date.year1;
            date.year1 = date.year2;
            date.year2 = tempY;
        } 
        if(date.year2 == date.year1 && date.month2 < date.month1) {
            var tempM   = date.month1;
            date.month1 = date.month2;
            date.month2 = tempY;
        }
        if(date.year2 == date.year1 && date.month2 == date.month1 && date.day2 < date.day1) {
            var tempD = date.day1;
            date.day1 = date.day2;
            date.day2 = tempY;
        }
        console.log(date);
        instance.setStaticRange(date);
    };
    $.getEvent          = function(long,desc,pic) {
        var argLenght = arguments.length;
        var _desc,_long,_pic;
        _long = arguments[0];
        _desc = arguments[1];
        _pic  = arguments[2]||undef;
        return {desc:_desc,long:_long,pic:_pic};
    };
    $.getColor          = function(r,g,b) {
        r = clamp(r,255,0);
        g = clamp(g,255,0);
        b = clamp(b,255,0);
        return rgbAttr(r,g,b);
    }
    $.getDate           = function(day,month,year) {
        month = clamp(month,11,0);
        if(leapYear(year) && month == 1) {
            day = clamp(day,months[month].days+1,1);
        }else{
            day = clamp(day,months[month].days,1);
        }
        return {d:day,m:month,y:year};
    }
    
})(window,document,jQuery,Math);