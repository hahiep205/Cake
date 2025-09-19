<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
</head>
<body>

    <?php include public_path('backend/header.php'); ?>

    <section id="log" class="section_log log">
        <div class="container_log">
            <h2 class="section_title_log">Login</h2>
            <form action="/login" method="POST" class="log_form">
                @csrf
                <div class="form_group">
                    <label for="username">Username:</label><br>
                    <input type="username" id="username" name="username" required>
                </div>
                <div class="form_group">
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required>
                </div> <br>
                <button type="submit" class="log_button">Login</button>
            </form>
            <p class="click_here">Don't have an account? <a href='/register' class="click_here">Register here</a>.</p> <br>
        </div>

    <?php include public_path('backend/footer.php'); ?>

</body>
</html>