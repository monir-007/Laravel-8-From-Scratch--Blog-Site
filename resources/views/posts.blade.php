<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
     @foreach ($posts as  $post)
{{--         @dd($loop) --}}
    <article class="{{ $loop->even ? 'foobar' : '' }}">
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
        <div>
            {{ $post->excerpt }}
        </div>
    </article>
     @endforeach

</body>
</html>
