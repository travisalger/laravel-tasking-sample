<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tasking Example :: @yield('title')</title>
        <link href="/css/app.css" rel="stylesheet">
        <style>
            .flash {padding:10px}
            .flash p {margin:0}
            .content {margin:auto 30px}
            label{display:block}
        </style>

        <!-- Fonts -->
        <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class="content">
            @if (Session::has('message'))
                <div class="flash alert-info">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class='flash alert-danger'>
                    @foreach ( $errors->all() as $error )
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif

            @yield('content')
        </div>

    </body>
</html>