const wordList = $("ul");

const currentUnit = document.title.substring(5, 6);
let currentPage = 2;
let wordsPerPage = 20;

$.ajax({
    "url": "_inc/ajax_requests.php",
    "method": "POST",
    "data": {
        "action": "get_terms",
        "unit_id": currentUnit
    },
    "success": function (response) {
        let words = $.parseJSON(response);
        for (let i = (currentPage-1) * wordsPerPage; i < currentPage * wordsPerPage; i++) {
            wordList.append($(`<li><span>${words[i][0]}</span><span>${words[i][1]}</span></li>`))
        }
    }
});