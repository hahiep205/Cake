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
    
    <section class="section section_profile">
        <div class="container_log profile">
            <h2 class="section_title">User Profile</h2>

                <div class="profile_content">
                    <p><strong>Name:</strong> {{ auth()->user()->name }}</p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <p><strong>Phone Number:</strong> {{ auth()->user()->phone }}</p>
                    <p><strong>Address:</strong> {{ auth()->user()->address }}</p>
                    <span><a href="profile_edit"><button class="profile_button">Update</button></a></span>
                </div>

        </div>
    </section>    

    @include('backend.auth.footer')
	
</body>
</html>