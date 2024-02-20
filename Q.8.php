<?php
function assignGrade($score) {
    if ($score >= 90) {
        return 'A';
    } elseif ($score >= 80) {
        return 'B';
    } elseif ($score >= 70) {
        return 'C';
    } elseif ($score >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

// Example usage:
$score = 85; // You can change this value to test different scores
$grade = assignGrade($score);
echo "Score: $score, Grade: $grade";
?>