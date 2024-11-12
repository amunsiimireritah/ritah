<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Welcome to the Exam Dashboard</h2>
        <p>Select an upcoming exam or review your previous attempts.</p>

        <div class="list-group">
            <?php
            // Database connection
            $pdo = new PDO('mysql:host=localhost;dbname=exam_system', 'root', '');

            // Fetch the list of exams
            $stmt = $pdo->query("SELECT id, exam_name FROM exams");
            while ($exam = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo '<a href="exam.php?exam_id=' . $exam['id'] . '" class="list-group-item list-group-item-action">' . htmlspecialchars($exam['exam_name']) . '</a>';
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
