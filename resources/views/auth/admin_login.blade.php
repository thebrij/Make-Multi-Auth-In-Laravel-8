<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset=UTF-8>
  <meta name=viewport content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Admin</title>
</head>
<body style="background-color:whitesmoke">
    <div class="container">
      <div class="row justify-content-center mt-4">
          <div class="col-md-4">
            <div class="card">
              <div class="card-body">
                <form id="sign_in_adm" method="POST" action="{{ route('admin.login.submit') }}">
                  {{ csrf_field() }}
                <h1>Admin Login</h1>
                <div >
                  <input type="email" name=email class="form-control" placeholder="Email Address" value="{{ old('email') }}" required autofocus>
                </div>
                @if ($errors->has('email'))
                <span ><strong>{{ $errors->first('email') }}</strong></span>
                @endif
                <br>
                <div >
                  <input type="password" name="password" class="form-control" required>
                </div>
                <br>
                <div >
                  <button type="submit" class="btn btn-primary">Admin Login</button>
                </div>
                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
</body>
</html>