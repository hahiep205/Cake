<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
</head>
<body>

    @include('backend.auth.header')

    <div class="container container_dashboard">
        <h1>This is dashboard page.</h1>
    </div>

    @include('backend.auth.footer')

</body>
</html>