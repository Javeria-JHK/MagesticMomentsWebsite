<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body >
        <div class="containerform signUpForm">
            
                <div class="col-lg-6 text-center p-4" id="signuptext">
                  <h2 id="mainHead">Welcome Back!</h2>
                  <p>To keep connected with us please login with your personal info.</p>
                  <br>
                  <button class="btn btn-outline-dark  w-50 py-2 " id="mybtn" type="submit">Sign In</button>

                </div>
                <div class="col-lg-6 " id="form">
                    <form >
                        <h3 class="mb-3 " id="mainHead">Create Account</h3>
                        <div class="social-Container">
                          <a href="#" class="fa fa-facebook"></a>
                          <a href="#" class="fa fa-google-plus"></a>
                          <a href="#" class="fa fa-linkedin"></a>

                        </div>
                       
                        <span>or use your email for registration</span>
                        <br><br>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                            <label for="name">Name</label>
                          </div>
                        <div class="form-floating mb-3">
                          <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                          <label for="email">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                          <input type="password" class="form-control" id="password" placeholder="Password" required>
                          <label for="password">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="tel" class="form-control" id="phone" placeholder="+92 " pattern="+92[0-9]{3}-[0-9]{7}" required>
                            <label for="phone">Contact</label>
                          </div>
                 
                        <button class="btn btn-warning w-50 py-2 " id="mybtn" type="submit">Sign Up</button>
                
                      </form>
                </div>
        </div>
</body>
</html>