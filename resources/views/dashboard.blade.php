<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE Order</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    @include('backend.auth.header')
    
    <!-- Home Section -->
    <section id="home" class="section home">
        <div class="container">
            <div class="home_content">
                <h1 class="home_title">Welcome to Our CAKE</h1>
                <p class="home_description">
                    Discover the finest cake goods made with love and the freshest ingredients. 
                    From artisan cakes to delicate pastries, we bring you the taste of tradition.
                </p>
                <a href="#about" class="home_button">Learn More</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section about">
        <div class="container">
            <h2 class="section_title">About Us</h2>
            <div class="about_content">
                <div class="about_text">
                    <p>
                        Our CAKE has been serving the community for over 500 years with traditional recipes 
                        passed down through generations.
                    </p>
                </div>
                <div class="about_text">
                    <p>
                        Our CAKE has been serving the community for over 500 years with traditional recipes 
                        passed down through generations.
                    </p>
                </div>
				<div class="about_text">
                    <p>
                        Our CAKE has been serving the community for over 500 years with traditional recipes 
                        passed down through generations.
                    </p>
                </div>
				<div class="about_text">
                    <p>
                        We believe in using only the finest ingredients 
                        to create memorable experiences for our customers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Popular Section -->
    <section id="popular" class="section popular">
        <div class="container">
            <h2 class="section_title">Popular Items</h2>
            <div class="popular_grid">
                @if(isset($products) && $products->count() > 0)
                    @foreach($products as $product)
                    <div class="popular_item">
                        <div class="popular_image">
                            <a href="#popular"><img src="{{ asset('backend/imgs/' . $product->image) }}" alt="{{ $product->product_name }}"></a>
                        </div>
                        <a href="#popular" style="text-decoration: none; color: #000000"><h3 class="popular_name">{{ $product->product_name }}</h3></a>
                        <p class="popular_description">{{ $product->description }}</p>
                        <span class="popular_price">${{ number_format($product->price, 2) }}</span>
                    </div>
                    @endforeach
                @endif
            </div>  
        </div>
    </section>

    <!-- Recently Section -->
    <section id="recently" class="section recently">
        <div class="container">
            <h2 class="section_title">Recently Added</h2>
            <div class="recently_content">
                @if(isset($recentProducts) && $recentProducts->count() > 0)
                @foreach($recentProducts as $product)
                    <div class="recently_item">
                        <div class="recently_image">
                            <a href="#recently"><img src="{{ asset('backend/imgs/' . $product->image) }}" alt="{{ $product->product_name }}"></a>
                        </div>
                        <div class="recently_info">
                            <a href="#recently" style="text-decoration: none; color: #000000"><h3 class="recently_name">{{ $product->product_name }}</h3></a>
                            <p class="recently_description">{{ $product->description }}</p>
                            <span class="recently_price">${{ number_format($product->price, 2) }}</span>
                            <span class="recently_badge">New!</span>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    @include('backend.auth.footer')
	
</body>
</html>