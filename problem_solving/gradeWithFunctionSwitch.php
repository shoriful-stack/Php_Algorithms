<?php
// Create a PHP program to calculate the student result based on the marks obtained in five subjects. The program should include the following conditions:

// 1. Mark Range Validation:
// Each subject's marks should be validated to ensure they are between 0 and 100. If a user enters invalid marks, just print mark range is invalid.

// 2. Fail Condition:
// If a student scores below 33 in any subject, they should be considered failed.

// 3. Grade Calculation:
// · If a student passes, calculate the total marks, average marks, and assign a grade based on the average:
// · A+: 80 to 100
// · A: 70 to 79
// · A-: 60 to 69
// · B: 50 to 59
// · C: 40 to 49
// · D: 33 to 39
// · F: Below 33

// 4. Output:
// The program should output the total marks, average marks, and the grade. If the student fails, output a message indicating the failure.
// Use a function for calculating the result and a switch-case statement for determining the grade.
// Output:
// Total Marks: 232
// Average Marks: 46.4
// Grade: C

function calculateGrade( $marks ) {
    foreach ( $marks as $mark ) {
        if ( $mark < 0 || $mark > 100 ) {
            echo "Mark range is invalid";
            return;
        }
    }
    foreach ( $marks as $mark ) {
        if ( $mark < 33 ) {
            echo "The student have been failed";
            return;
        }
    }

    $totalMarks = array_sum( $marks );
    $averageMarks = $totalMarks / count( $marks );
    switch ( true ) {
    case ( $averageMarks >= 80 && $averageMarks <= 100 ):
        $grade = "A+";
        break;
    case ( $averageMarks >= 70 && $averageMarks <= 79 ):
        $grade = "A";
        break;
    case ( $averageMarks >= 60 && $averageMarks <= 69 ):
        $grade = "A-";
        break;
    case ( $averageMarks >= 50 && $averageMarks <= 59 ):
        $grade = "B";
        break;
    case ( $averageMarks >= 40 && $averageMarks <= 49 ):
        $grade = "C";
        break;
    case ( $averageMarks >= 33 && $averageMarks <= 39 ):
        $grade = "D";
        break;
    default:
        $grade = "F";
        break;
    }
    echo "Total Marks:" . $totalMarks . "\n";
    echo "Average Marks:" . $averageMarks . "\n";
    echo "Grade:" . $grade . "\n";
}
$marks = [58, 67, 69, 75, 87];
calculateGrade( $marks );