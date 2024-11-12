<!-- results.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Results</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Exam System</h5>
            </div>
            <div class="card-body">
                <h3 class="card-title">Your Results</h3>

                <?php
                // Sample data for demonstration; replace with dynamic data from database
                $examName = "Math Exam";
                $score = 85; // Score in percentage
                $feedback = "Great job!";

                echo "<p><strong>Exam:</strong> $examName</p>";
                echo "<p><strong>Score:</strong> $score%</p>";
                echo "<p><strong>Feedback:</strong> $feedback</p>";
                ?>

                <a href="dashboard.php" class="btn btn-secondary mt-3">Back to Dashboard</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
