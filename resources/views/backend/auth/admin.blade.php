<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE - Login</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    @include('backend.auth.header')

    <section id="admin" class="section admin">
        <div class="container">
            
            <h2 class="section_title">This is admin page.</h2>
            
        </div>
    </section>

    @include('backend.auth.footer')

</body>
</html>