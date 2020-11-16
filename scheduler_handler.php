<?php
    $username = false;
    $day = false;

    if(isset($_POST['username'])){
        $username = $_POST['username'];
    }

    if(isset($_POST['day'])){
        $day = $_POST['day'];
    }

    if($username != ""){
        $strHeading = "<h3> Hi " . ucfirst(strtolower($_POST['username'])) . "</h3>";
    }
    else{
        $strHeading = "<h3> Hello there! </h3>";
    }

    echo $strHeading;
    $day_check = strtolower($day);
    $check = false;

    if ($day_check == "monday") {
        $events = "<br> Computer Architecture II Lecture <br> Web Design Recitation <br> Seminar Presentation";
        $check = true;
    }
    elseif ($day_check == "tuesday") {
        $events = "<br> Calculus III Lecture <br> Intro to Physics <br> Soccer Practice";
        $check = true;
    }
    elseif ($day_check == "wednesday") {
        $events = "<br> Computer II Lecture <br> Matrix Algebra Lecture <br> Dinner with Parents";
        $check = true;
    }
    elseif ($day_check == "thursday") {
        $events = "<br> Web Design Lecture <br> Lunch with Bella <br> Soccer Practice";
        $check = true;
    }
    elseif ($day_check == "friday") {
        $events = "<br> Intro to Physics Lecture <br> Soccer Match <br> Matrix Algebra Project Due";
        $check = true;
    }
    elseif ($day_check == "saturday") {
        $events = "<br> Calculus III Homework Due <br> Bowling with Friends";
        $check = true;
    }
    elseif ($day_check == "sunday") {
        $events = "<br> Relaxation Day!";
        $check = true;
    }
    else {
        echo "Input a valid date";
    }

    if( $day != "" && $check == true){
        $day = ucfirst($day_check);
        echo "<strong>" . $day . "'s Schedule: </strong>" . $events;
    }

?>
