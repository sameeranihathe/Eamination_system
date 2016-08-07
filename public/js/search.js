/**
 * Created by Danthaka Sri on 8/8/2016.
 */
var timer;
function up() {
    timer = setTimeout(function () {

        var keywords =$('#search-input').val();
        if (keywords.length > 0) {
            $.post('http://localhost:8000/search', {keywords: keywords}, function (markup) {
                $('search-result').html(markup);
            });
        }

    }, 500);
}

function down() {
    clearTimeout(timer);
}