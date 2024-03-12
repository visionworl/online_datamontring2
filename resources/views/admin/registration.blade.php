<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Monitoring registration  </title>
  <link rel="icon" type="image/x-icon" href="{{'front/image/logo.PNG'}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="{{'css/registration.css'}}">
</head>
<body>
  {{-- <form method="post" action="{{ route('admin.store') }}" enctype="multipart/form-data" id="form"> --}}
    <form method="post" action="{{ route('admin.storeregistration') }}" enctype="multipart/form-data" id="form">

    @csrf
    <div class="container">
      <h3 class="py-3 text-center">Registration Form</h3>

      <div class="row">
        <div class="col-md-6 pb-4">
          Full Name
          <input type="text" name="full_name" id="full_name" placeholder="Enter your name" required>
          <span class="error-message">
            @error('full_name')
                {{ $message }}
            @enderror
        </span>
        </div>
        <div class="col-md-6 pb-4">
          User Name
          <input type="text" id="user_name" name="user_name" placeholder="Enter your username" required>
          <span class="error-message">
            @error('user_name')
              {{ $message }}
            @enderror
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 pb-4">
          Email
          <input type="email" id="email" name="email" placeholder="Enter your email" required>
          <span class="error-message">
            @error('email')
              {{ $message }}
            @enderror
          </span>
        </div>
        <div class="col-md-6 pb-4">
          Phone Number
          <input type="text" id="phone_number" name="phone_number" placeholder="Enter your number" required>
          <span class="error-message">
            @error('phone_number')
              {{ $message }}
            @enderror
          </span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 pb-4">
          Password
          <input type="password" id="password" name="password" placeholder="Enter your password" required>
          <span class="error-message">
            @error('password')
              {{ $message }}
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          Confirm Password
          <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>
          <span class="error-message">
            @error('confirm_password')
              {{ $message }}
            @enderror
          </span>
        </div>
      </div>

      <button class="btn-sm">Register</button>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
