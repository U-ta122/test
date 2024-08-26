<!DOCTIPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.goosleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class="posts">
            @foreach ($po as $toko)
                <dev class="post">
                    <h2 class="title">{{ $toko->title }}</h2>
                    <p class='body'>{{ $toko->body }}</p>
                    <p >{{ $toko->created_at }}</p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $po->links() }}
        </div>
    </body>
</html>

