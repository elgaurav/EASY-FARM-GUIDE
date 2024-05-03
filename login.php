<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <link rel="stylesheet" href="styles1.css" />
</head>

<body>
    <section class="sign-in">
        <article class="sign-in_details">
            <h1>Sign In</h1>
            <p>Login to your accout using your credentials</p>
            <form action="" class="sign-in_form">
                <div class="form_control">
                    <label for="email">Email</label>
                    <input type="email" name="" id="email" placeholder="Enter your email" />
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" name="" id="password" placeholder="Enter your password" />
                </div>
                <div class="sign-in_extras">
                    
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn btn-primary">Sign In</button>
            </form>
            <small class="next-page">Don't have an account? <a href="signup.html">Sign Up</a></small>
        </article>
        <article class="sign-in_logo">
            <div><img src="img/loginbg.png" alt=""/></div>
        </article>
    </section>
</body>

</html>