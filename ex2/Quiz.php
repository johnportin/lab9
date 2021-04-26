<?php

echo "<html>";
echo "<head> <link rel='stylesheet' href='../../style.css'> </head>";
echo "<body>";

    $r1 = $_POST['q1'];
    $r2 = $_POST['q2'];
    $r3 = $_POST['q3'];
    $r4 = $_POST['q4'];
    $r5 = $_POST['q5'];

    $total = 0;
    if ($r1 == "Oregon, Washington, Idaho") {
        $total += 1;
    }
    if ($r2 == "Apples") {
        $total += 1;
    }
    if ($r3 == "Microsoft") {
        $total += 1;
    }
    if ($r4 == "Valentine's Day") {
        $total += 1;
    }
    if ($r5 == "Chinook Salmon") {
        $total += 1;
    }


    

    echo "<p class='question'>Question 1: Which states comprise the Pacific Northwest?</p>";
    echo "You answered: " . $r1 . "<br>";
    echo "Correct answer: Oregon, Washington, Idaho";


    echo "<p class='question'>Question 2: Washington is the US's biggest domestic supplier of which fruit?</p>";
    echo "You answered: " . $r2 . "<br>";
    echo "Correct answer: Apples<br><br>";

    echo "<p class='question'>Question 3: Seattle is famously home to this tech giant.</p>";
    echo "You answered: " . $r3 . "<br>";
    echo "Correct answer: Microsoft<br><br>";

    echo "<p class='question'>Question 4: Oregon shares a birthday with which major holiday?</p>";
    echo "You answered: " . $r4 . "<br>";
    echo "Correct answer: Valentines's Day<br><br>";
    
    echo "<p class='question'>Question 5: What is the state fish of Oregon?</p>";
    echo "You answered: " . $r5 . "<br>";
    echo "Correct answer: Chinook Salmon<br><br>";

    echo "<p>You got " . $total . "/5 correct</p>";

    $total = (int)($total * 20);
    echo "<p>You scored " . $total . "%</p>";
    echo "</body>";



?>