<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 404</title>
    <link rel="stylesheet" href="{{ url('/css/error/404.css') }}">
</head>

<body>

    <main>
        <div class="column">
            <p class="title">{{ __('base.404') }}</p>
            <p class="message">{{ __('base.404-message-1') }}</p>
            <p class="message">{{ __('base.404-message-2') }}</p>
            <p class="message">{{ __('base.404-message-3') }}</p>
            <a class="link" href="/">{{ __('base.404-message-button') }}</a>
        </div>
        <img class="image" src="{{ url('/images/404/not-found.png') }}" alt="">
    </main>
</body>

</html>
