<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="<?= base_url('resources/css/loginandregistration.css') ?>" />
  </head>
  <body>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="logo">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDnOLOgih4kvzdiIWO8XE6tHIFJzHMUYC5P5d9VR3KekQH1IHSV7_EZrFraKd2MDxF1Jc&usqp=CAU" alt="" />
                <h4>The Bois</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>

            <form action="index.html" autocomplete="off" class="sign-up-form">
              <div class="logo">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDnOLOgih4kvzdiIWO8XE6tHIFJzHMUYC5P5d9VR3KekQH1IHSV7_EZrFraKd2MDxF1Jc&usqp=CAU" alt="" />
                <h4>The Bois</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="https://d1gt5dppxgb6oq.cloudfront.net/topimg/Gundam_LP/img/grades/real_grade_m.jpg" class="image img-1 show" alt="" />
              <img src="https://d1gt5dppxgb6oq.cloudfront.net/topimg/Gundam_LP/img/grades/master_grade_m.jpg" class="image img-2" alt="" />
              <img src="https://d1gt5dppxgb6oq.cloudfront.net/topimg/Gundam_LP/img/grades/perfect_grade_m.jpg" class="image img-3" alt="" />
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2>Build your own Gunpla</h2>
                  <h2>Customize as you like</h2>
                  <h2>Build it with your friends</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" data-value="1"></span>
                <span data-value="2"></span>
                <span data-value="3"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="<?= base_url('resources/javascript/app.js') ?>"></script>
  </body>
</html>
