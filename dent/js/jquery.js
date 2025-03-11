$(function() {
    // عند تمرير الماوس على البطاقة
    $(".box").on("mouseenter", function() {
        $(this).css({
            "background-color": "#a2d9f5",
            "transform": "scale(1.05)",
            "transition": "all 0.3s ease"
        });
    }).on("mouseleave", function() {
        $(this).css({
            "background-color": "",
            "transform": "scale(1)"
        });
    });

    // إضافة عنصر إلى القائمة عند النقر على "read more" في كل مرة
    $(".btn").on("click", function(event) {
        event.preventDefault(); // منع الرابط من الانتقال

        var ul = $(this).closest(".box").find("ul"); // العثور على القائمة داخل البطاقة
        var newItem;

        // تحديد العنصر الذي سيتم إضافته استنادًا إلى البطاقة
        if ($(this).closest(".box").is("#basic")) {
            newItem = $("<li><i>oral hygiene experts</i></li>"); // إضافة العنصر الأول
            ul.append(newItem); // إضافة العنصر إلى القائمة
        } else if ($(this).closest(".box").is("#standard")) {
            newItem = $("<li><i>alignment specialist</i></li>"); // إضافة العنصر الثاني
            ul.append(newItem); // إضافة العنصر إلى القائمة
        } else if ($(this).closest(".box").is("#premium")) {
            newItem = $("<li><i>cavity inspection</i></li>"); // إضافة العنصر الثالث
            ul.append(newItem); // إضافة العنصر إلى القائمة
        }
    });
});