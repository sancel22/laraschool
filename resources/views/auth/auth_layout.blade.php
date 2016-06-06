<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Laravel Eikaiwa</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                @yield('content')
            </div>
        </div>
    </div>
    @yield('scripts.footer')
    @include('errors')
</body>
</html>