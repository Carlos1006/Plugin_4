;(function($,Math,Document,Window,undefined) {
    var instances  = [];
    function Table(obj) {
        this.init(obj);
        this.define();
        this.set();
    }
    function addInLabel(text) {
        var label = $("<label>",{text:text});
        $(this).empty().append(label);
    }
    function toDivs(array,clas) {
        var divs = [];
        for(var i in array) {
            var text = array[i];
            var div = $("<div>",{class:clas});
            addInLabel.call(div,text);
            divs.push(div);
        }
        return divs;
    }
    function makeid() {
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        for( var i=0; i < 8; i++ )
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        return text;
    }
    Table.prototype.init    = function(obj) {
        this.main   = $(obj);
        this.js     = obj;
        this.main.addClass("superTable");
        this.globalId   = makeid();
        this.main.attr("globalId",this.globalId);
    }
    Table.prototype.define  = function() {
        this.head = this.main.find(".superHead");
        this.hed  = this.main.find(".header");
    }
    Table.prototype.set     = function() {
        var text = this.head.text();
        addInLabel.call(this.head,text);
        
        var textAr = this.hed.text().split('-');
        var divs = toDivs(textAr,"hrows");
        var style = $("<style>[globalId="+this.globalId+"] .hrows, [globalId="+this.globalId+"] .brows{ width:"+100/divs.length+"% }</style>");
        $("head").append(style);
        this.hed.empty().append.apply(this.hed,divs);
        
        var _this = this;
        this.main.find(".row").each(function() {
            var object  = $(this);
            var textAr  = object.text().split('-');
            var divs    = toDivs(textAr,"brows");
            object.empty().append.apply(object,divs);
        });
        
    }
    $.fn.Table              = function() {
        $(this).each(function() {
            var instance = new Table(this);
            instances[instance.globalId] = instance;
        });
    }
})(jQuery,Math,document,window);