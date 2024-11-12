<!-- exam_instructions.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Instructions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Exam Instructions</h2>
        <p>Please read the instructions carefully before starting the exam.</p>
        <ul>
            <li>Do not refresh or leave the page once the exam starts.</li>
            <li>Each question is timed.</li>
            <li>Click 'Start Exam' to begin.</li>
        </ul>

        <form action="start_exam.php" method="post">
            <button type="submit" class="btn btn-primary">Start Exam</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
