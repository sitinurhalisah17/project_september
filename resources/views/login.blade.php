<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">

</head>
  <div class="container">
    @if (Session::has('pesan'))
      <div class="alert alert-seccess">{{Session::get('pesan')}}</div>
    @endif
  
    <body style="background-color: beige">
     <div style="background-color: white; padding: 20px; width: 30%; height:30%; margin: 100px auto; border-radius: 10px;">
        <h2 style="text-align: center; font-size: 35px;">Login</h2>
         
        <div class="card-body" style="font-size: 20px;">
            <form  action="/auth" method="post">
                @csrf
                <label for="username">Username:</label>
                <br>
                <input type="text" id="username" name="email" required style="width: 100%; padding: 10px;">
                <br><br>
    
                <label for="password">Password:</label>
                <br>
                <input type="password" type="password" id="password" name="password" required style="width: 100%; padding: 10px;">
                <br><br>
    
                <button type="submit" value="Login" style="background-color: beige; width: 100%; padding: 10px; border: none; cursor: pointer">LOGIN
                    
                </button>

            </form>
        </div>
        {{-- <p style="text-align: center;">
            <a href="/register">Create an account</a> | 
            <a href="/forgot-password">Forgot password?</a>
        </p> --}}
    </div>
</div>
</body>
</html>
<script src={{asset ("assets/bootstrap/js/bootstrap.min.js")}}></script>
