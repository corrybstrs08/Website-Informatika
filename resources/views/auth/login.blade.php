<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('asset/css/bootstrap-5.2.3-dist/css/bootstrap.min.css')}}">
  <style>
    body {
      background: linear-gradient(45deg, #3498db, #09306B);
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }

    .card {
      width: 400px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      background-color: #fff;
    }

    .card-header {
      background: linear-gradient(45deg, #2980b9, #09306B);
      color: #fff;
      padding: 20px;
      text-align: center;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
    }

    .card-body {
      padding: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .btn-primary {
      background-color: #3498db;
      border-color: #3498db;
      width: 100%;
    }

    .btn-primary:hover {
      background-color: #2980b9;
      border-color: #2980b9;
    }
  </style>
  <title>Login</title>
</head>

<body>

  <div class="card">
    <div class="card-header">
      <h1 class="h3">Admin Login</h1>
    </div>

    <!-- Session Status -->
    @if (session('status'))
    <div class="alert alert-success" role="alert">
      {{ session('status') }}
    </div>
    @endif

    <div class="card-body">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div class="form-group">
          <label for="email">Email</label>
          <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required autofocus>
          @error('email')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <!-- Password -->
        <div class="form-group">
          <label for="password">Password</label>
          <input id="password" class="form-control" type="password" name="password" required autocomplete="current-password">
          @error('password')
          <div class="text-danger">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-primary">Log in</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>