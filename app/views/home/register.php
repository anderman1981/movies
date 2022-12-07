<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Movies</title>

    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="../assets/css/register.css" rel="stylesheet">
    <script defer src="../assets/js/register.js"></script>
  </head>
  <body class="text-center">
    
    <main class="form-register">
    <form name="registerForm" action="register" method="post">
        <img class="mb-4" src="../assets/images/logo_avengers.jpg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please register</h1>

        <div class="form-floating">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required onChange="return validateFormUsername()">
            <label for="floatingUsername">Username</label><span class="error-message"></span>
            <span class="error-message" id="username-error"></span>
        </div>
        <div class="form-floating">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="+123456789" required onChange="return validateFormPhone()" onkeypress="return (event.charCode == 43 || event.charCode >= 48 && event.charCode <= 57)">
            <label for="floatingPhone">Phone</label>
            <span class="error-message" id="phone-error"></span>
        </div>
        <div class="form-floating">
            <input type="email" class="form-control" id="email" name="email" placeholder="email@gmail.com" required onChange="return validateFormEmail()">
            <label for="floatingEmail">Email</label>
            <span class="error-message" id="email-error"></span>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required onkeyup="return validateFormPassword()">
            <label for="floatingPassword">Password</label>
            <div class="password_info" id="password-error">
              <p>The password must meet the following steps:</p>
              <ul>
                <li id="length">At least <strong>6 characters</strong></li>
                <li id="capital">At least <strong>one capital letter</strong></li>
                <li id="character">At least <strong>one special character ("*", "-", ".")</strong></li>
                <li id="blank">Password <strong>should not have spaces</strong></li>
              </ul>
            </div>
        </div>

        <div class="mb-3">
        <button class="w-40 btn btn-lg btn-info" type="submit">Register</button>
        <a class="w-40 btn btn-lg btn-primary" href="..">Sign in</a>
        </div>
        <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
    </form>
    </main>
  </body>
</html>
