<?php
function calculateAverageGrades($studentGrades) {
    foreach ($studentGrades as $index => $student) {
       
        $averageGrade = array_sum($student) / count($student);

        echo "Student " . ($index + 1) . " Average Grade: " . $averageGrade . PHP_EOL;
    }
}

$studentGrades = array(
    // Student 1
    array(
        'Math' => 90,
        'English' => 85,
        'Science' => 92,
    ),

    // Student 2
    array(
        'Math' => 78,
        'English' => 88,
        'Science' => 76,
    ),

    // Student 3
    array(
        'Math' => 95,
        'English' => 91,
        'Science' => 87,
    )
);

calculateAverageGrades($studentGrades);
?>
