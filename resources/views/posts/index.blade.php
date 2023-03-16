<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
</head>
<body>
<h1>Blog</h1>
<div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                   <a href="/posts/{{ $post->id }}">{{ $post->title }} <h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $posts->links() }}
        </div>
</body>
</html>