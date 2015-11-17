<?php
    header('Content-Type: application/json');
    class rang{
        var $day1;
        var $day2;
        var $month1;
        var $month2;
        var $year1;
        var $year2;
        var $color;
        var $desc;
        public function __construct($d1,$d2,$m1,$m2,$y1,$y2,$color_,$desc_) {
            $this->day1 = $d1;
            $this->day2 = $d2;
            $this->month1  = $m1;
            $this->month2  = $m2;
            $this->year1  = $y1;
            $this->year2  = $y2;
            $this->color  = $color_;
            $this->desc   = $desc_;
        }
    };
    $ranges = [];
    /*
    $range1 = new rang(15,4,9,10,2015,2015,"rgb(0,125,162)" ,"Lorem ipsum dolor sit amet");
    $range2 = new rang(1,4,9,9,2015,2015,"rgb(125,0,162)"   ,"Lorem ipsum dolor sit amet");
    $range3 = new rang(4,8,10,10,2015,2015,"rgb(0,162,125)" ,"Lorem ipsum dolor sit amet");
    $range4 = new rang(30,2,11,0,2015,2016,"rgb(162,0,125)" ,"Lorem ipsum dolor sit amet");
    array_push($ranges,$range1,$range2,$range3,$range4);*/
    echo json_encode($ranges);
?>