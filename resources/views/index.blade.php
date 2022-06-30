<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/signinup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>BartaJog</title>
</head>
<body style="background-color: #212431;">
    <div class="form-modal">
    
        <div class="form-toggle">
            <h5 class="text-center p-3 display-5">BartaJoog</h5>
            <button id="login-toggle" onclick="toggleLogin()">sign in</button>
            <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>
    
        <div id="login-form">
            <form action="{{ route('saveLogin') }}" method="POST">
                @csrf
                <div>
                    <input type="text" name="email" placeholder="Enter email" required/>
                    @error('email')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="password" name="password" placeholder="Enter password" required/>
                    @error('password')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>
                <input type="submit" value="Sign in" class="btn login w-100"/>
                <!-- <p><a href="javascript:void(0)">Forgot password</a> </p> -->
              <!-- <p><a href="javascript:void(0)" onclick="toggleSignup()">Register Account</a> </p> -->
            </form>
        </div>
    
        <div id="signup-form">
            <form action="{{ route('saveRegister') }}" method="POST">
                @csrf
                <div>
                    <input type="email" name="email" placeholder="Enter your email" value="{{ old('email') }}" required>
                    @error('email')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>
                <div>
                    <input type="text" name="username" placeholder="Choose username" value="{{ old('username') }}" required/>
                    @error('username')
                    <div class="alert alert-danger"> {{ $message }}</div>
                    @enderror
                </div>
                <input type="password" name="password" placeholder="Create password" value="{{ old('password') }}" required />
              <input type="submit" value="Create Account" class="btn login w-100"/>
            </form>
        </div>
    
    </div>
    
    <script src="/js/script.js"></script>
</body>
</html>