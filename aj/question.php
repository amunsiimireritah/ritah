<!-- question.php -->
<?php
    session_start();

    // Sample question for demonstration; replace with dynamic loading from a database
    $question_number = 1;
    $total_questions = 10;
    $question_text = "What is 2 + 2?";

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user_answer = $_POST['answer'];
        
        // Process the answer (e.g., store it in session or database)
        $_SESSION['answers'][$question_number] = $user_answer;

        // Redirect to the next question or results page
        $question_number++;
        if ($question_number > $total_questions) {
            header("Location: results.php"); // Redirect to results page
            exit();
        } else {
            header("Location: question.php?question=" . $question_number); // Load next question
            exit();
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam in Progress</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Exam in Progress</h2>
        <p>Question <?php echo $question_number; ?> of <?php echo $total_questions; ?></p>
        <form action="question.php?question=<?php echo $question_number; ?>" method="post">
            <p><?php echo $question_text; ?></p>
            <input type="text" name="answer" class="form-control mb-3" placeholder="Your answer" required>
            <button type="submit" class="btn btn-primary">Submit Answer</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
