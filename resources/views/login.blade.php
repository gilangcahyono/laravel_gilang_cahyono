<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="container">
        <h1 class="text-center">Login</h1>
        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session('error') }}
            </div>
        @endif
        <form action="/login" method="post">
            @csrf
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="{{ old('username') }}"
                    placeholder="Username" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-primary w-100">
                    Login
                </button>
            </div>
        </form>
    </div>
</body>

</html>
