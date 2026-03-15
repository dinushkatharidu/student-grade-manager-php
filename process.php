<?php
include 'includes/db.php';

if (isset($_POST['save_student'])) {
    $name = $_POST['s_name'];
    $marks = $_POST['s_marks'];

    if ($marks >= 75) {
        $grade = "A";
    } else if ($marks >= 65) {
        $grade = "B";
    } else if ($marks >= 50) {
        $grade = "C";
    } else if ($marks >= 35) {
        $grade = "S";
    } else {
        $grade = "W";
    }

    $sql = "INSERT INTO students (name, marks, grade) VALUES ('$name', '$marks', '$grade')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?status=success");
    } else {
        header("Location: index.php?status=error");
    }
}
