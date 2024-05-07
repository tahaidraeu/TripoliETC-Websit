<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // عملية إضافة مستخدم جديد
    if (isset($_POST["add_user"])) {
        // قم بمعالجة بيانات النموذج وإضافة المستخدم إلى قاعدة البيانات
        $success_message = "تمت إضافة المستخدم بنجاح!";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المستخدمين</title>
</head>
<body>
<h1>صفحة إدارة المستخدمين</h1>
<form method="post">
    <label for="username">اسم المستخدم:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">كلمة المرور:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" name="add_user" value="إضافة مستخدم">
</form>
<?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>
</body>
</html>

