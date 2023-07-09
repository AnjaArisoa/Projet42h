<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link rel="stylesheet" href="./assets/style.css"/>
    <title>Login</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#">
                <h1>Sign up</h1>
                <div class="social-container">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-google-plus-g"></i>
                    <i class="fab fa-linkedin-in"></i></a>
                </div>
                <input type="text" placeholder="Nom">
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Mot de passe">
                <input type="file" id="upload">
                <button>Sign up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action="#">
                <h1>Login page</h1>
                <div class="social-container">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-google-plus-g"></i>
                    <i class="fab fa-linkedin-in"></i>
                </div>
                <input type="email" placeholder="E-mail">
                <input type="password" placeholder="Mot de passe">
                <button>Sign in</button>
            </form>
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenue</h1>
                    <p>Cliquez ici si vous posséder déjà un compte</p>
                    <button class="ghost" id="signin">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bienvenue</h1>
                    <p>Cliquez ici si vous ne posséder pas de compte</p>
                    <button class="ghost" id="signup">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="./javascript/script.js" charset="utf-8"></script>
</body> 
</html>