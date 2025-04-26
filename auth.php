<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/auth.css" />
    <link rel="stylesheet" href="css/index.css" />
    <title>auth</title>
  </head>
  <body>
    <!-- <header>
      <div class="logo">
        <img src="images/logo.png" alt="logo" class="logo_img" />
      </div>
      <h1>university of Boumerdes</h1>
    </header> -->
    <main class="main">
      <div class="card">
        <div class="avatar">
          <img
            src="images/person_icon.png"
            alt="person image"
            class="person_icon"
          />
        </div>
        <?php if (isset($error)) echo '<div class="error">'.$error.'</div>'; ?>
       <form action="./auth/authenticate.php" id="login-form" method="post" onsubmit="return checkValidation()">
            <div class="form">
              
                <div class="form_gp">
                    <div class="icon">
                        <img src="images/person_icon2.png" alt=""  />
                    </div>
                  <div class="vertical-line"></div>
                  <input
                  placeholder="ID Number"
                    type="text"
                    id="IdNumber"
                    name="name"
                    required
                    minlength="12"
                    maxlength="12"
                    size="10"
                  />
                </div>
                <div class="form_gp">
                    <div class="icon">
                        <img src="images/password-76.png" alt="" />
                    </div>
                  <div class="vertical-line"></div>
                  <input
                  placeholder="Password"
                    type="text"
                    id="password"
                    name="password"
                    required
                    minlength="4"
                    maxlength="6"
                    size="10"
                  />
                </div>
              </div>
                    
              <div class="option">
                <div>
                  <input type="checkbox" id="rememberMe" name="scales" />
                  <label for="scales">Remamber me</label>
                </div>
                <a> forgot password? </a>
              </div>
              
              <div class="error-message" id="error-message" style="color: red;"></div>
              <button type="submit" class="login-button" id="submit">LOGIN</button>
              
              <script src="./js/auth.js"></script>
                
              </script>
            </div>
        </form>
       
    </main>
  </body>
</html>
