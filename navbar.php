<?php
// Initialize the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
             <div class="container-fluid">
              <a class="navbar-brand" href="#">Le Wagon</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">recherche</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">registrer</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        </ul>
        
        <ul class="navbar-nav">
        <li class="nav-item d-flex justify-content-end">
          <a class="nav-link" href="#"><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b></a>
        </li>
        <li class="nav-item d-flex justify-content-end">
        <a  class="nav-link" href="logout.php" >Sign Out</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
</body>
