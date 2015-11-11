$(function(){

    setTimeout(function(){

        $({blurRadius: 0}).animate({blurRadius:5}, {
            duration: 1000,
            easing: 'swing',
            step: function() {
                console.log(this.blurRadius);
                $("#banner").css({
                    "-webkit-filter": "blur("+this.blurRadius+"px)",
                    "filter": "blur("+this.blurRadius+"px)"
                });
            }
        });
    },1000);



});