<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InventariX | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="icon" href="./img/inventarix.png">
</head>
<body>
    <main class="form-signin d-flex align-items-center justify-content-center vh-100">
        <div class="container d-flex justify-content-center align-items-center px-5">
            <form class="px-5" action="/login" method="post">
                @csrf
                <div class="container-form" style="width: 500px">

                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                    @endif
                    
                    <div class="text-center mb-4">
                        <img class="mb-2" src="./img/inventarix.png" alt="" width="150" height="150">
                        <h1 class="h1 mb-3" style="font-weight: 900">Sign in</h1>
                    </div>
            
                    <div class="form">
                        <input type="text" name="username" class="form-control mb-3 @error('username')  is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }} ">
                        @error('username')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form">
                        <input type="password" name="password" class="form-control mt-3" id="password" placeholder="Password" required>
                    </div>
            
                    <div class="form-check d-flex align-items-center my-3 mx-1" style="justify-content: space-between">
                        <div class="form-check px-0">
                            <input class="form-check-input me-0" type="checkbox" value="remember-me" id="checkRemember">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember me
                            </label>
                        </div>
                        <button class="btn btn-primary" type="submit">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
        </main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
