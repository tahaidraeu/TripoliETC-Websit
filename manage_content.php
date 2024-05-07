<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // عملية إضافة مقال جديد
    if (isset($_POST["add_article"])) {
        // قم بمعالجة بيانات النموذج وإضافة المقال إلى قاعدة البيانات
        $success_message = "تمت إضافة المقال بنجاح!";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة المحتوى</title>
</head>
<body>
    <h1>صفحة إدارة المحتوى</h1>
    <form method="post">
        <label for="title">عنوان المقال:</label>
        <input type="text" id="title" name="title"><br><br>
        <label for="content">محتوى المقال:</label><br>
        <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>
        <input type="submit" name="add_article" value="إضافة مقال">
    </form>
    <?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>
</body>
</html>
