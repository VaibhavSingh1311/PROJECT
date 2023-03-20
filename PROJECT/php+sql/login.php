<!DOCTYPE html>

<html lang="en" dir="ltr">

   <head>
      <meta charset="utf-8">
      <title>Login and Registration Form in HTML | CodingNepal</title>
      <link rel="stylesheet" href="/login.css">

      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>

   <body>

      <div class="wrapper">
         <div class="title-text">


            <div class="title login">
               Login Form
            </div>


            <div class="title signup">
               Signup Form
            </div>
         </div>


         <div class="form-container">


            <div class="slide-controls">
               <input type="radio" name="slide" id="login" checked>
               <input type="radio" name="slide" id="signup">
               <label for="login" class="slide login">Login</label>
               <label for="signup" class="slide signup">Signup</label>
               <div class="slider-tab"></div>
            </div>


            <div class="form-inner">


               <form action="loginsignin.php" method="post" class="login">


                  <div class="field">
                     <input type="text" placeholder="Email Address" required id="email_address" name="email_address">
                  </div>

                  <div class="field">
                     <input type="password" placeholder="Password" required id="password" name="password">
                  </div>

                  <div class="pass-link">
                     <a href="#">Forgot password?</a>
                  </div>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login" id="login" name="submit">
                  </div>


                  <div class="signup-link">
                     Not a member? <a href="">Signup now</a>
                  </div>


               </form>



               <form action="loginsignup.php" method="post" class="signup">

                  <div class="field">
                     <input type="text" placeholder="Email Address" required id="email_address" name="email_address">
                  </div>

                  <div class="field">
                     <input type="password" placeholder="Password" required id="password" name="password">
                  </div>

                  <div class="field">
                     <input type="password" placeholder="Confirm password" required id="confirm_password" name="confirm_password">
                  </div>

                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Signup" id="signup" name="submit">
                  </div>


               </form>

            </div>

         </div>

      </div>

   </body>

</html>