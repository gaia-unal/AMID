
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">AMID</a>

      <?php 
        if(isset($_SESSION['name']) && !is_null($_SESSION['name']) && !empty($_SESSION['name'])){ ?>
          <p class="navbar-brand-p">Welcome <?php echo $_SESSION['name']?> !!!</p>   
     <?php } ?>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link space" href="#">Contact</a>
          </li>
          <?php 
            if(isset($_SESSION['name']) && !is_null($_SESSION['name']) && !empty($_SESSION['name'])){ ?>
              <li class="nav-item">
              <a class="bt btn btn-danger" href="<?php echo $rutaSession?>closeSession.php">Cerrar sesión</a></button>
              </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>