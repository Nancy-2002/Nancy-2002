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
    <title>Index</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> <h4>Welcome to Student Registration Portal</h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="register.php">Register</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/about.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/bg2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/bg.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="my-5">
    <div class="py-5">
        <h1 class="text-center">About Us</h1>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
            <img src="images/fb.png" class="img-fluid abtimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
            <h2 class="display-5">Hey!This is Nancy</h2>
            <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium nihil rerum tempora blanditiis quo aut consequatur quidem inventore animi fugiat, dolores similique itaque voluptas nisi doloremque nostrum commodi, omnis excepturi.</p>
            <a href="about.php" class="btn btn-primary">For more details</a>
        </div>
    </div>
    </div>
</section>
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