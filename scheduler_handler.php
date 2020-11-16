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
        $strHeading = "<h3> Hi " . $_POST['username'] . "</h3>";
    }
    else{
        $strHeading = "<h3> Hello there! </h3>";
    }

    echo $strHeading;

    if ($day == "monday" || $day == "Monday") {
        $events = "<br> Computer Architecture II Lecture <br> Web Design Recitation <br> Seminar Presentation";
    }
    elseif ($day == "tuesday" || $day == "Tuesday") {
        $events = "<br> Calculus III Lecture <br> Intro to Physics <br> Soccer Practice";
    }
    elseif ($day == "wednesday" || $day == "Wednesday") {
        $events = "<br> Computer II Lecture <br> Matrix Algebra <br> Dinner with Parents";
    }
    elseif ($day == "thursday" || $day == "Thursday") {
        $events = "<br> Web Design Lecture <br> Lunch with Bella <br> Soccer Practice";
    }
    elseif ($day == "friday" || $day == "Friday") {
        $events = "<br> Soccer Match <br> Matrix Algebra Project Due";
    }
    elseif ($day == "saturday" || $day == "Saturday") {
        $events = "<br> Calculus III Homework Due <br> Bowling with Friends";
    }
    elseif ($day == "sunday" || $day == "Sunday") {
        $events = "<br> Relaxation Day!";
    }
    else {
        echo $day;
        echo "Input a valid date";
    }

    if( $day != ""){
        echo "<strong>" . $day . "'s Schedule: </strong>" . $events;
    }

?>
