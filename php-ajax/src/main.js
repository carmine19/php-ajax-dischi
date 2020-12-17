

$(document).ready(function() {

    const source = $("#card-template").html();
    const template = Handlebars.compile(source);

    $.ajax({
        url: 'dischi.php',
        method: 'GET',
        success: function(data) {

            for (var i = 0; i < data.length; i++) {
                var risp = data[i]
                var context = {
                    'poster': risp.poster,
                    'title': risp.title,
                    'author': risp.author,
                    'year': risp.year
                };
                var html = template(context);
                $('#card .container').append(html);
            }
        },
        error: function() {
            console.log('errore');
        }
    });


});