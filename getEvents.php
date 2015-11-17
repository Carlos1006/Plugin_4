<?php
    header('Content-Type: application/json');
    class event{
        var $desc;
        var $long;
        var $day;
        var $pic;
        public function __construct($_day,$_desc,$_long,$_pic) {
            $this->desc = $_desc;
            $this->day  = $_day;
            $this->pic  = $_pic;
            $this->long = $_long;
        }
    };
    
    $month  = $_POST["month"];
    $year   = $_POST["year"];
    $celeb1 = [];/*
    if($year==2015 and $month==9) {
        $celeb1 = new event(6,"Lorem ipsum dolor sit amet","Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tortor massa, tempus at placerat ac, sodales ut tellus. Praesent ullamcorper tincidunt commodo. Phasellus neque urna, rutrum at lacus a, eleifend faucibus arcu. Aliquam erat volutpat. Pellentesque ut enim nec urna aliquet scelerisque consequat et dolor. Cras sagittis lobortis diam, sit amet posuere tellus ultricies id. Aliquam vitae sem nec felis congue vestibulum. Etiam egestas, arcu eu efficitur blandit, sem turpis sodales orci, sed rhoncus est ligula at velit. ","http://localhost/__naker/Plugin_4/img/J.jpg");
        $celeb2 = new event(6,"Lorem ipsum","Quisque auctor mi sit amet tellus pharetra, vitae varius lacus consequat. Sed tincidunt justo suscipit tellus euismod, nec malesuada nulla ornare. Vestibulum euismod sapien eget pulvinar ornare. Sed eget dignissim urna, a porttitor eros. Curabitur vitae justo et nibh porttitor gravida eget ac erat. Ut sem nisi, consectetur et eleifend non, mattis ut arcu.","http://localhost/__naker/Plugin_4/img/H.png");
        array_push($celebs,$celeb1,$celeb2);
    }
    if($year==2015 && $month==8) {
        $celeb1 = new event(15,"Phasellus neque urna","Duis mauris mi, iaculis quis interdum vel, volutpat eget orci. Donec ligula quam, suscipit quis risus tristique, lobortis tempor risus. Aenean id lectus diam. Mauris pretium, leo non dignissim rutrum, lacus erat pellentesque orci, et varius lorem diam non risus. Integer auctor sapien ut fermentum gravida. Quisque commodo convallis volutpat.","http://localhost/__naker/Plugin_4/img/A.jpg");
        $celeb2 = new event(20,"Lorem ipsum dolor sit amet","Donec feugiat in tortor a iaculis. Sed metus sapien, molestie sagittis cursus eget, mollis at enim. Curabitur blandit sollicitudin dignissim.",null);
        array_push($celebs,$celeb1,$celeb2);
    }*/
    echo json_encode($celeb1);
?>