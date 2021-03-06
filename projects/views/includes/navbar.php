<nav class="navbar navbar-expand-lg navbar-light bg-light" style="border-bottom: 1px #d6d6d6 solid;">
  <a class="navbar-brand" href="<?php echo BASE_URL;?>">PHP STORE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo BASE_URL;?>">Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo BASE_URL;?>cart">
          Panier
          <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
            (<?php echo $_SESSION["count"];?>)      
          <?php else:?>
            (0)
          <?php endif;?> 
        </a>
      </li>
      <li class="nav-item dropdown">
      <?php if(isset($_SESSION["logged"]) && $_SESSION["logged"] === true):?>
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <?php echo $_SESSION["fullname"];?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
       
          
          <?php if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true):?>
           <a class="dropdown-item" href="<?php echo BASE_URL;?>dashboard">Dashboard <span class="sr-only">(current)</span></a>
          <?php endif;?> 
          <a class="dropdown-item" href="<?php echo BASE_URL;?>logout">Déconnexion</a>
          </div>
          
        <?php else:?> 
  
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Compte
        </a> 
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?php echo BASE_URL;?>register">Inscription</a>
          <a class="dropdown-item" href="<?php echo BASE_URL;?>login">Connexion</a>
        </div>
       
        <?php endif;?> 
      </li>
    </ul>
  </div>
</nav>