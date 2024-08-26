<!DOCTIPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!--Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <a href='/posts/create'>create</a>
        <div class="posts">
            @foreach ($posts as $toko)
                <dev class="post">
                    <h2 class="title">
                    <a href="/posts/{{ $toko->id }}">{{ $toko->title }}
                    </h2>
                    <p class='body'>{{ $toko->body }}</p>
                    <p >{{ $toko->created_at }}</p>
                </div>
            @endforeach
        </div>
        <div class='Paginate'>
            {{ $posts->links() }}
        </div>
    </body>
    
</html>

