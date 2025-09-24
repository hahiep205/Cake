<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAKE - Edit Profile</title>
    <link rel="stylesheet" href="{{asset('backend/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

    @include('backend.auth.header')
    
    <section class="section section_profile">
        <div class="container_log profile">

            <h2 class="section_title"><i class="ri-user-settings-line"></i> Profile Edit</h2>

            <div class="profile_content">
                <form action="{{ route('profile.update') }}" method="POST" class="profile_form">

                    @csrf
                    @method('PUT')
                    
                    <div class="form_group">
                        <label for="name"><strong>Name:</strong></label><br>
                        <input type="text" id="name" name="name" value="{{ old('name', auth()->user()->name) }}" required>
                    </div>

                    <div class="form_group">
                        <label for="email"><strong>Email:</strong></label><br>
                        <input type="text" id="email" name="email" value="{{ auth()->user()->email }}" disabled>
                    </div>
                    
                    <div class="form_group">
                        <label for="phone"><strong>Phone Number:</strong></label>
                        <input type="text" id="phone" name="phone" value="{{ old('phone', auth()->user()->phone) }}">
                    </div>

                    <div class="form_group">
                        <label for="address"><strong>Address:</strong></label>
                        <input type="text" id="address" name="address" value="{{ old('address', auth()->user()->address) }}">
                    </div>

                    <div class="profile_buttons">
                        <button type="submit" class="profile_button_confirm">Update Profile</button>
                    </div>

                </form>
            </div>
        </div>
    </section>

    @include('backend.auth.footer')

</body>
</html>