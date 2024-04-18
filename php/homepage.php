<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zoo hotel Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <style>
        /* Custom CSS */
        body {
            background: rgb(255, 233, 161);
            color: #333;
            font-family: Arial, sans-serif;
        }

        .navbar {
          background-color: #343a40 !important;
            height: 90px;
        }

        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .navbar-brand:hover,
        .navbar-nav .nav-link:hover {
            color: #17a2b8 !important;
        }
        .centered-button {
    position: fixed;
    bottom: 20px; /* Adjust the vertical position from the bottom */
    left: 50%;
    transform: translateX(-50%);
    z-index: 999; /* Ensure the button stays above other content */
}

.centered-button a.btn {
    font-size: 2.5rem; /* Adjust the button size */
    padding: 20px 80px; /* Adjust the button padding */
}

        /* Added CSS for the Register and Login buttons */
        .register-button {
            position: absolute;
            top: 20px;
            right: 20px;
        }
        
        .login-button {
            position: absolute;
            top: 20px;
            right: 120px; /* Adjust the horizontal position */
        }
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Hotel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Zoo tickets</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="information.php">Information</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About us</a>
        </li>
      </ul>
    </div>
    <!-- Register button -->
    <div class="register-button">
        <a href="register.php" class="btn btn-primary">Register</a>
    </div>
    <!-- Login button -->
    <div class="login-button">
        <a href="login.php" class="btn btn-secondary">Login</a>
    </div>
    <?php if (!empty($_SESSION['user_logged_in'])){?>
    <li><a class="dropdown-item"href="../php/logout.php">Logout</a></li>
    <li><a class="dropdown-item"href="">Settings</a></li>
    <?php } ?>
  </div>
</nav>


<div class="centered-button">
    <a href="register.php" class="btn btn-primary btn-lg">Book</a>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/rangePlugins.js"></script>
</body>
</html>
