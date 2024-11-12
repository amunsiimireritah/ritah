<!-- profile.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Profile</h2>

        <?php
        // Database connection
        $pdo = new PDO('mysql:host=localhost;dbname=task_management', 'root', '');

        // Sample user ID
        $userId = 1; // Replace with dynamic user ID

        // Fetch the user's profile details
        $stmt = $pdo->prepare("SELECT name, email FROM users WHERE id = :user_id");
        $stmt->bindParam(':user_id', $userId);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Update the user's name and email in the database
            $name = $_POST['name'];
            $email = $_POST['email'];

            $updateStmt = $pdo->prepare("UPDATE users SET name = :name, email = :email WHERE id = :user_id");
            $updateStmt->bindParam(':name', $name);
            $updateStmt->bindParam(':email', $email);
            $updateStmt->bindParam(':user_id', $userId);
            $updateStmt->execute();

            // Refresh the profile data after updating
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            echo '<div class="alert alert-success">Profile updated successfully!</div>';
        }
        ?>

        <form action="profile.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
