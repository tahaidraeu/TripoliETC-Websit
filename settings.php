<?php
// الكود الخاص بمعالجة البيانات المرسلة من النموذج إذا تم إرسال النموذج
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // هنا يمكنك معالجة بيانات النموذج، مثل حفظ الإعدادات في قاعدة البيانات
    $success_message = "تم تحديث إعدادات الموقع بنجاح!";
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إعدادات الموقع</title>
</head>
<body>
<h1>صفحة إعدادات الموقع</h1>
<form method="post">
    <label for="language">اللغة المفضلة:</label>
    <select id="language" name="language">
        <option value="arabic">العربية</option>
        <option value="english">English</option>
    </select><br><br>
    <label for="theme">الثيم المفضل:</label>
    <select id="theme" name="theme">
        <option value="light">فاتح</option>
        <option value="dark">داكن</option>
    </select><br><br>
    <!-- يمكنك إضافة المزيد من الخيارات هنا، مثل إعدادات البريد الإلكتروني، إلخ. -->
    <input type="submit" value="حفظ الإعدادات">
</form>
<?php if (isset($success_message)) { echo "<p>$success_message</p>"; } ?>
</body>
</html>

