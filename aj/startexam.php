<!-- start_exam.php -->
<?php
    // Start the exam (e.g., store start time, load questions, etc.)
    session_start();
    // Example: Set start time for the exam
    $_SESSION['exam_start_time'] = time();

    // Example: Redirect to the first question page
    header("Location: question1.php"); // You will need to create this page for the actual exam questions.
    exit();
?>
