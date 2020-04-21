
var source = $("#card-template").html();
var template = Handlebars.compile(source);

$.ajax( {
    url: 'server.php',
    method: 'GET',
    success: function (data) {
        var dischi = data;
        for (var i = 0; i < dischi.length; i++) {
            var disco = dischi[i];
            var datiDischi = {
                coverAlbum: disco.cover,
                titoloAlbum: disco.titolo,
                autoreAlbum: disco.artista,
                annoAlbum: disco.anno
            };
            var discoSingolo = template(datiDischi);
            $('.album-box').append(discoSingolo);
            }
        },
    error: function (error) {
        alert('BOOM');
    }
});
