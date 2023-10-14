const subjectList = $(".subject-list").find("article");

subjectList.on("click", getThematicUnits);
function getThematicUnits() {
    $.ajax({
        "url": "_inc/ajax_requests.php",
        "method": "POST",
        "data": {
            "action": "get_th_units"
        },
        "success": (response) => {
            console.log(response);
        },
        "error": (response) => {
            console.log(response);
        }
    });
}