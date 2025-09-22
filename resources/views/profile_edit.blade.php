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
            <h2 class="section_title">Profile Edit</h2>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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