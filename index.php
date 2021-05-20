<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Document</title>
</head>
<style>

.demo_wrap img {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    opacity: 0.3;
    z-index: -1;
}
.container a {
    z-index: 1;
}
.container {
    position: absolute;
    top: 50%;
    left: 36%;
    
}
h1{
    position: absolute;
    left:37%;
    top:25%;
}
.container a{
    width :200px;
}
</style>
<body>
<div class="demo_wrap">
  <img src="img/train.jpg" />
</div>
<h1>Welcome to le Wagon !</h1>
<div class="container">

<a href='login.php' class="btn btn-success m-2">Login as a user</a>
<a href='loginAdmin.php' class="btn btn-success">Login as an Admin</a>
</div>
</body>
</html>