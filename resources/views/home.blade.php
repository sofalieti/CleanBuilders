<!DOCTYPE html >
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $domain->title }}</title>
    <meta name="description" content="{{ $domain->description }}">
</head>
<body>
    <header>
        <h1>{{ $domain->title }}</h1>
        @if($domain->description)
            <p>{{ $domain->description }}</p>
        @endif
    </header>

    <main>
        {!! $domain->content !!}
    </main>
</body>
</html>  