<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>  
    <title>Contact Us</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> <h4>Welcome to Student Portal</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact Us <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="register.php">Register</a>
      </li>
    </ul>
  </div>
</nav>
<section class="my-5">
    <div class="py-5">
        <h1 class="text-center">Contact Us</h1>
    </div>
    <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
        <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
        </div>
        <div class="form-group">
        <label>Comment</label>
        <textarea class="form-control" name="comment"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</section>

<footer>
    <h4 class="p-3 bg-dark text-white text-center">@studentportal.in</h4>
</footer>



</body>
</html>