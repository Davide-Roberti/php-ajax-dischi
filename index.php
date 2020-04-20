<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/app.css">
        <title>dischi</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F--lyPlK0G0pM%2FV_swG60xMmI%2FAAAAAAAAQSM%2FW60No3Npbc09mzy7L8K4Sxu_kmIL-L6wwCLcB%2Fs1600%2F12.png&f=1&nofb=1" alt="logo spotify">
            </div>
        </header>
        <main>

        </main>

        <script id="card-template" type="text/x-handlebars-template">
            <div class="card-album" data-genere="{{genereAlbum}}">
                <img src="{{coverAlbum}}" alt="cover">
                <p>{{titoloAlbum}}</p>
                <span>{{autoreAlbum}}</span>
                <span>{{annoAlbum}}</span>
            </div>
        </script>
        <script src="dist/js/main.js" charset="utf-8"></script>
    </body>
</html>
