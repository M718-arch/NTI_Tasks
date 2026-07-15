<?php

$students = [
    ["Ahmed", 95],
    ["Mohamed", 82],
    ["Ali", 74],
    ["Sara", 61],
    ["Mona", 48]
];

$successCount = 0;
$failCount = 0;
$totalSum = 0;
$highestGrade = -1;
$topStudent = "";

echo "Student Results\n\n";

foreach ($students as $student) {
    $name = $student[0];
    $grade = $student[1];

    if ($grade >= 90) {
        $gradeChar = "A";
    } elseif ($grade >= 80) {
        $gradeChar = "B";
    } elseif ($grade >= 70) {
        $gradeChar = "C";
    } elseif ($grade >= 60) {
        $gradeChar = "D";
    } else {
        $gradeChar = "F";
    }

    echo "Name: $name | Grade: $grade | Letter Grade: $gradeChar<br>";

    if ($grade >= 60) {
        $successCount++;
    } else {
        $failCount++;
    }

    $totalSum += $grade;

    if ($grade > $highestGrade) {
        $highestGrade = $grade;
        $topStudent = $name;
    }
}

$average = $totalSum / count($students);

echo "<br>Statistics<br>";
echo "Passed Students: $successCount<br>";
echo "Failed Students: $failCount<br>";
echo "Average Grade: $average<br>";
echo "Top Student: $topStudent ($highestGrade)<br>";

?>