<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE Order</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
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
                        passed down through generations. We believe in using only the finest ingredients 
                        to create memorable experiences for our customers.
                    </p>
                </div>
                <div class="about_text">
                    <p>
                        Our CAKE has been serving the community for over 500 years with traditional recipes 
                        passed down through generations. We believe in using only the finest ingredients 
                        to create memorable experiences for our customers.
                    </p>
                </div>
				<div class="about_text">
                    <p>
                        Our CAKE has been serving the community for over 500 years with traditional recipes 
                        passed down through generations. We believe in using only the finest ingredients 
                        to create memorable experiences for our customers.
                    </p>
                </div>
				<div class="about_text">
                    <p>
                        Our CAKE has been serving the community for over 500 years with traditional recipes 
                        passed down through generations. We believe in using only the finest ingredients 
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
                <div class="popular_item">
                    <div class="popular_image"></div>
                    <h3 class="popular_name">This is Cake</h3>
                    <p class="popular_description">Content...</p>
                    <span class="popular_price">$99.00</span>
                </div>
                <div class="popular_item">
                    <div class="popular_image"></div>
                    <h3 class="popular_name">This is Cake</h3>
                    <p class="popular_description">Content...</p>
                    <span class="popular_price">$99.00</span>
                </div>
                <div class="popular_item">
                    <div class="popular_image"></div>
                    <h3 class="popular_name">This is Cake</h3>
                    <p class="popular_description">Content...</p>
                    <span class="popular_price">$99.00</span>
                </div>
                <div class="popular_item">
                    <div class="popular_image"></div>
                    <h3 class="popular_name">This is Cake</h3>
                    <p class="popular_description">Content...</p>
                    <span class="popular_price">$99.00</span>
                </div>
                <div class="popular_item">
                    <div class="popular_image"></div>
                    <h3 class="popular_name">This is Cake</h3>
                    <p class="popular_description">Content...</p>
                    <span class="popular_price">$99.00</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Recently Section -->
    <section id="recently" class="section recently">
        <div class="container">
            <h2 class="section_title">Recently Added</h2>
            <div class="recently_content">
                <div class="recently_item">
                    <div class="recently_image"></div>
                    <div class="recently_info">
                        <h3 class="recently_name">This is New Cake</h3>
                        <p class="recently_description">
                            Conten...
                        </p>
                        <span class="recently_price">$124.00</span>
                        <span class="recently_badge">New!</span>
                    </div>
                </div>
                <div class="recently_item">
                    <div class="recently_image"></div>
                    <div class="recently_info">
                        <h3 class="recently_name">This is New Cake</h3>
                        <p class="recently_description">
                            Conten...
                        </p>
                        <span class="recently_price">$119.00</span>
                        <span class="recently_badge">New!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('backend.auth.footer')
	
</body>
</html>