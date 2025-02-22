<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In & Sign Up Form</title>
    @vite('resources/css/signInSignUp.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
<!------LOGO SECTION---->
<div class="nav-logo-section">
    <img id="nav_logo" src="/Images/logo.png">
</div>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <input required type="text" placeholder="Name" id="name" name="name"/>
            <input required type="email" placeholder="Email" id="email" name="email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" @style('font-size: 12px; color: #c52020 ;') />
            <input required minlength="6" type="password" placeholder="Password" id="password" name="password"/>
            <x-input-error :messages="$errors->get('password')" class="mt-2" @style('font-size: 12px; color: #c52020 ;') />
            <input required minlength="6" type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation"/>
            <div class="termCondition">
                <input type="checkbox" class="terms" required>
                <span>I Agree </span>
                <a @style('text-decoration: underline; color: blue;') target="_blank" href="{{ route('termsConditions') }}">
                    {{ __('Terms & conditions') }}
                </a>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input required type="email" placeholder="Email" id="signinEmail" name="email"/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" @style('font-size: 12px; color: #c52020 ;') />
            <input required type="password" placeholder="Password" id="signinPassword" name="password"/>
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
            <button type="submit">Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });

    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>
