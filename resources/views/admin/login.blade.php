<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Monitoring login </title>
    <link rel="icon" type="image/x-icon" href="{{'front/image/logo.PNG'}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{'css/login.css'}}">
</head>

<body>
    <div class="mt-5" style="margin-top: 5rem!important;">
        @if(session()->has('success'))
        <div class="alert alert-success">
            <p>{{session()->get('success')}}</p>
        </div>
        @endif
        <div class="w-50 shadow m-auto login-form" style="width: 25% !important;">
            <div class="text-center pt-4">
                <h1>
                    <img src="{{'front/image/logo2.png'}}" alt="">
                </h1>
            </div>
            <div>
                <h4 class="card-title text-center pb-0 fs-3">{{$title}}</h4>
                <p class="text-center small">Enter your username & password to login</p>
            </div>
            <div class="m-auto w-75 pb-5">
                {{-- <form method="post" action="{{ route('admin.authenticate',['title' => $title])) }}" enctype="multipart/form-data" id="form"> --}}
                    {{-- <form method="post" action="{{ $action }}" enctype="multipart/form-data" id="form"> --}}
                    <form method="post" action="{{ route('admin.authenticate', ['title' =>$title]) }}" enctype="multipart/form-data" id="form">
                    @csrf
                    <label for="validationCustomemail" class="form-label">Email</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">
                            Please enter a valid email.
                        </div>
                    </div>
                    <div class="pb-2">
                        <label for="inputPassword4" class="form-label pb-2">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" value="true"
                                id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
