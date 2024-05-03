<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign up Page</title>
    <link rel="stylesheet" href="styles1.css" />
</head>

<body>
    <section class="sign-in">
        <article class="sign-in_details">
            <h1>Sign Up</h1>
            <p>Fill the form below to create your account</p>
            <form action="" class="sign-in_form">
                <div class="form_control">
                    <label for="fullname">Fullname</label>
                    <input type="text" name="" id="fullname" placeholder="Enter your fullname" />
                </div>
                <div class="form_control">
                    <label for="password">Password</label>
                    <input type="password" name="" id="password" placeholder="Enter your password" />
                </div>
                <div class="form_control">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" name="" id="cpassword" placeholder="Enter your password" />
                </div>
                <button type="submit" class="btn btn-primary">Sign Up</button>
            </form>
            <small class="next-page">Already have an account? <a href="index.html">Sign In</a></small>
        </article>
        <article class="sign-in_logo">
            <div><img src="img/loginbg.png" alt=""/></div>
        </article>
    </section>
</body>

</html>