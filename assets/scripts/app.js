const subjectList = $(".subject-list").find("article");
let thUnits = $(".th-units ul");
let thUnitsHeading = $(".th-units h2");

let selectedThemUnit = null;


let subjectName = null, oldSubjectName = null;

// Load thematic units after clicking on subject
subjectList.on("click", function () {
    oldSubjectName = subjectName;
    subjectName = $(this).find("h2").text();
    subjectList.removeClass("active");
    $(this).addClass("active");
    if (oldSubjectName !== subjectName) {
        thUnitsHeading.slideDown();
        thUnits.hide()
        thUnits.children().remove();
        $.ajax({
            "url": "_inc/ajax_requests.php",
            "method": "POST",
            "data": {
                "action": "get_th_units",
                "subject": subjectName
            },
            "success": (response) => {
                let data = $.parseJSON(response);
                console.log(data);
                data.forEach(function (value) {
                    thUnits.append($(
                        '<li id="th_' + value[0] + '"><div><span>' + value[1] + '</span><small>Number of' +
                        ' terms:' +
                        ' ' + value[2] + '</small></div><button><i' +
                        ' class="fa-solid fa-play"></i>Practice</button></li>'
                    ));
                });
                thUnits.slideDown(1000);
            },
            "error": (response) => {
                console.log(response);
            }
        });
    }
});