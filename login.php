
<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST['password'];
    if ($password === "lolor8908") {
        $_SESSION['loggedin'] = true;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "كلمة المرور خاطئة.";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head><meta charset="UTF-8"><title>تسجيل الدخول</title></head>
<body>
<h2>تسجيل الدخول للوحة التحكم</h2>
<form method="POST">
    <input type="password" name="password" placeholder="كلمة المرور" required>
    <button type="submit">دخول</button>
</form>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
</body>
</html>
