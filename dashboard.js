// dashboard.js

document.addEventListener('DOMContentLoaded', function() {
    var dashboardList = document.getElementById('dashboard');

    // إضافة استجابة نقر الفأرة لكل رابط في لوحة التحكم
    var links = dashboardList.getElementsByTagName('a');
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener('click', function(event) {
            event.preventDefault(); // منع الانتقال إلى الرابط

            // احصل على عنوان الصفحة المطلوبة من الرابط
            var pageUrl = this.getAttribute('href');

            // قم بتحميل محتوى الصفحة المطلوبة بواسطة AJAX
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    // عرض محتوى الصفحة في الصفحة الحالية
                    document.body.innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", pageUrl, true);
            xhttp.send();
        });
    }
});


