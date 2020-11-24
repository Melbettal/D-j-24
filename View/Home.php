<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../Public/Style/Style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
  <?php
        include '../Model/signup.php';
        include '../Model/login.php';
    ?>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Se connecter</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="nom" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="mdp" />
            </div>
            <input type="submit" value="Se connecter" name="login" class="btn solid" />
            <p class="social-text">Consulter nos réseaux sociaux</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">S'inscrire</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="nom" placeholder="Nom d'utilisateur" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="mdp" placeholder="Mot de passe" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone"></i>
              <input type="tel" placeholder="Numéro de télephone" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="address" placeholder="Address" />
            </div>
            <input type="submit" class="btn" name="login" value="S'inscrire" />
            <p class="social-text">Consulter nos réseaux sociaux</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Newbie ?</h3>
            <p>
              Inscris toi, counsulte les repas, et passe ta commande !
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Un de nous ?</h3>
            <p>
            Counsulte les repas, et passe ta commande !
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../Public/js/app.js"></script>
  </body>
</html>