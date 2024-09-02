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
            <a href="/categories/{{ $toko->category->id }}">{{ $toko->category->name }}</a>
                <dev class="post">
                    <h2 class="title">
                        <a href="/posts/{{ $toko->id }}">{{ $toko->title }}</a>
                    </h2>
                    <p class='body'>{{ $toko->body }}</p>
                    <form action="/posts/{{ $toko->id }}" id="form_{{ $toko->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $toko->id }})">delete</button> 
                    </form>
                    <p >{{ $toko->created_at }}</p>
                </div>
            @endforeach
        </div>
        <div class='Paginate'>
            {{ $posts->links() }}
        </div>
    </body>
    <script>
        function deletePost(id) {
            'use strict'

            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
            }
        }
    </script>
</html>