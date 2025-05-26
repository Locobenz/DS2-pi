<?php
session_start();
include 'database.php';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($password) < 6) {
        $message = 'Email ou mot de passe incorrect.';
    } else {
        $db = new Database();
        $mysqli = $db->getDb();

        $stmt = $mysqli->prepare('SELECT id, password, role FROM users WHERE email = ?');
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['role']    = $row['role'];
                if ($row['role'] === 'recruiter') {
                    header('Location: recruiter_dashboard.php');
                } else {
                    header('Location: candidate_dashboard.php');
                }
                exit();
            }
        }

        $message = 'Email ou mot de passe incorrect.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    <div class="container">
        <h2>Connexion</h2>
        <form action="login.php" method="POST" onsubmit="return validateForm()">
            <div>
                <label>Email :</label>
                <input type="email" name="email" required>
            </div>
            <div>
                <label>Mot de passe :</label>
                <input type="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
        <?php if ($message): ?>
            <p><?= htmlspecialchars($message) ?></p>
        <?php endif; ?>
        <a href="index.php">Retour à l'accueil</a>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
