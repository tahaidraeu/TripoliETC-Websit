<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // عملية إضافة صفحة جديدة
    if (isset($_POST["add_page"])) {
        // قم بمعالجة بيانات النموذج وإضافة الصفحة إلى قاعدة البيانات
        $success_message = "تمت إضافة الصفحة بنجاح!";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة الصفحات</title>
</head>
<body>
<h1>صفحة إدارة الصفحات</h1>
<form method="post">
    <label for="page_title">عنوان الصفحة:</label>
    <input type="text" id="page_title" name="page_title"><br><br>
    <label for="page_content">محتوى الصفحة:</label><br>
    <textarea id="page_content" name="page_content" rows="4" cols="50"></textarea><br><br>
    <input type="submit" name="add_page" value="إضافة صفحة">
</form>
<?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>
</body>
</html>
