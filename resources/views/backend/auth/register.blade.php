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

    <section id="log" class="section_log log">
        <div class="container_log">
            <h2 class="section_title_log">Register</h2>
            <form action="/register" method="POST" class="log_form">
                @csrf
                <div class="form_group">
                    <label for="name">Name:</label><br>
                    <input type="name" id="name" name="name" required>
                </div>
                <div class="form_group">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form_group">
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required>
                </div><br>
                <button type="submit" class="log_button">Register</button><br>
            </form>
            <p class="click_here">Have an account? <a href='/login' class="click_here">Login here</a>.</p><br>
        </div>
    </section>

    @include('backend.auth.footer')

</body>
</html>