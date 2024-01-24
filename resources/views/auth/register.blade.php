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
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      overflow: hidden;
      background-color: #fff;
    }
    .card-header {
      background: linear-gradient(45deg, #3498db, #09306B);
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
    .text-secondary {
      color: #7f8c8d;
    }
  </style>
  <title>Register</title>
</head>
<body>

<div class="card">
  <div class="card-header">
    <h1 class="h3">Register</h1>
  </div>

  <div class="card-body">
    <form method="POST" action="{{ route('register') }}">
      @csrf
      <!-- Name -->
      <div class="form-group">
        <label for="name">Name</label>
        <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}" required autofocus>
        @error('name')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <!-- Email Address -->
      <div class="form-group">
        <label for="email">Email</label>
        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <!-- Password -->
      <div class="form-group">
        <label for="password">Password</label>
        <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password">
        @error('password')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div class="form-group">
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required>
        @error('password_confirmation')
          <div class="text-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>

    <div class="text-center text-secondary">
      Already registered? <a href="{{ route('login') }}" class="text-secondary">Login here</a>
    </div>
  </div>
</div>

</body>
</html>
