const wordList = $("ul");
const nextPageBtn = $("button.next");
const prevPageBtn = $("button.prev");
const switches = $(".switches");

const currentUnit = document.title.substring(5, 6);
let currentPage = 1;
let wordsPerPage = 20;

var word = [];

$.ajax({
    "url": "_inc/ajax_requests.php",
    "method": "POST",
    "data": {
        "action": "get_terms",
        "unit_id": currentUnit
    },
    "success": function (response) {
        words = $.parseJSON(response);
        console.log(words);
        for (let i = (currentPage-1) * wordsPerPage; i < currentPage * wordsPerPage-1; i++) {
            wordList.append($(`<li><span>${words[i][0]}</span><span>${words[i][1]}</span></li>`));
        }

        let pageCount = Math.ceil(words.length / wordsPerPage);
        for (let i = 0; i < pageCount; i++) {
            switches.append($(`<small></small>`));
        }
        switches.find("small").eq(0).addClass("active");
    }
});

nextPageBtn.on("click", function () {
    if (currentPage * wordsPerPage <= words.length) {
        changePage(++currentPage, wordsPerPage);
    }
});

prevPageBtn.on("click", function () {
    if (currentPage >  1) {
        changePage(--currentPage, wordsPerPage);
    }
});


function changePage(currentPage, wordsPerPage) {
    wordList.fadeOut(500, function () {
        wordList.find("li").remove();

        switches.find("small").removeClass("active");
        switches.find("small").eq(currentPage-1).addClass("active");

        for (let i = (currentPage-1) * wordsPerPage; i < currentPage * wordsPerPage-1; i++) {
            if (i >= words.length) break;
            wordList.append($(`<li><span>${words[i][0]}</span><span>${words[i][1]}</span></li>`));
        }
        wordList.fadeIn();
    });

}