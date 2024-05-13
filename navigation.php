<?php

$theURL = $_SERVER['REQUEST_URI'];

//$theURL2 = '#';

//$isActive = (strpos($theURL, $theURL2) !== false);

//if((isset($_GET['#']))){ echo 'active'; } else { echo '';}
?>


<nav class="navbar navbar-expand-lg">
      <div class="container-fluid py-2">
        <a class="navbar-brand" href="index.php">
          <img src="img/logo.png" alt="Company X" class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse row" id="navbarNavDropdown">
          <div id="nav-text-holder">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link page-item <?php echo ($theURL == '/runforearth/index.php') ? 'active' : '' ?>" href="index.php">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($theURL == '/runforearth/runinfo.php') ? 'active' : '' ?>" href="runinfo.php">RUN INFORMATION</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo ($theURL == '/runforearth/register.php') ? 'active' : '' ?>" href="register.php">REGISTRATION</a>
            </li>
            <!--<li class="nav-item">
              <a id="link3" class="nav-link" href="#">CONTACT US</a>
            </li>-->
          </ul>
          </div>
        </div>
      </div>
</nav>

<script>
  // Get the link with the number 3
  const link3 = document.getElementById('link3');

  // Add a click event listener to the link
  link3.addEventListener('click', function() {
    // Remove the "active" class from all links
    const links = document.querySelectorAll('.nav-link');
    links.forEach(link => link.classList.remove('active'));

    // Add the "active" class to the clicked link
    this.classList.add('active');
  });
</script>