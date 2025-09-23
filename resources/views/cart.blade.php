<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE - Cart</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    @include('backend.auth.header')
    
    <section class="section section_profile">
        <div class="container_log profile">
            <h2 class="section_title"><i class="ri-shopping-cart-line"></i> Shopping Cart</h2>

            <p class="section_title">Your Cart is Empty!</p>

        </div>
    </section>    

    @include('backend.auth.footer')
	
</body>
</html>