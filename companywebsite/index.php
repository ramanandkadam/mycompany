<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100&display=swap" rel="stylesheet">
  
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">K2R Technologies</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#enquiry">Enquiry</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="12.jpg" class="d-block w-100" alt="..." width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Kolhapur</h5>
        <p>First Office At Kolhapur</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="13.jpg" class="d-block w-100" alt="..." width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bangalore</h5>
        <p>Second Office At Bangalore</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="4.png" class="d-block w-100" alt="..." width="1100" height="500">
      <div class="carousel-caption d-none d-md-block">
        <h5>Mumbai</h5>
        <p>Third Office At Mumbai</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-5">
  <div class="py-5" id="about">
    <h2 class="text-center"> About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="pic1.jpg" class="img-fluid" aboutimg>
      </div>
      <div class="col-lg-6 col-md-6 col-12">
        <h2 class="display-4"> K2R Technologies. </h2>
        <p class="py-3">
          We are IT service provider. Who provide services in Web Technology,
          Software development, Android Development,Artificial Intelligence,
          Machine Learning, Data Science. We provide all technical services in every
          Technology.
        </p>
        <a href="about.php" class="btn btn-success">Know More</a>
      </div>
    </div>
  </div>
</section>

<section class="my-5">
  <div class="py-5" id="services">
    <h2 class="text-center">Our Services</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-10 col-md-10 col-12"></div>
        <div class="card" style="width: 18rem;">
  <img src="wt1.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Web Technology</h5>
    <p class="card-text">We develop website by using HTML,CSS,Js,Bootstrap,MERN stack services are available</p>
    <a href="web.html" class="btn btn-primary">Know More</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="wt2.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Software Development</h5>
    <p class="card-text">Various Software development services are available according to customer choice. </p>
    <a href="software.html" class="btn btn-primary">Know More</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="wt3.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Android Development</h5>
    <p class="card-text">We develope Anderoid app by using Java and Kotline programming language.</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="wt4.jpeg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Artificial Intelligence</h5>
    <p class="card-text">Various AI development services are available</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="wt5.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Machine Learning</h5>
    <p class="card-text">Various Machine learning services are available</p>
    <a href="#" class="btn btn-primary">Know More</a>
  </div>
</div>
        </div>
          </div>
  </section>
  
  <section class="my-5">
  <div class="py-5" id="gallery">
    <h2 class="text-center">Our Gallery</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
        
    <div class="col-lg-5 col-md-5 col-12">
          <img src="of1.jpeg" alt="img" class="img-fluid pb-3" width="500px" height="400px">
    </div>
    <div class="col-lg-5 col-md-5 col-12">
          <img src="of2.jpg" alt="img" class="img-fluid pb-4" width="500px" height="400px">
    </div>

    </div>
  </div>
  </section>

  <section class="my-5">
  <div class="py-5" id="enquiry">
    <h2 class="text-center">Enquiry</h2>
  </div>
  <div class="w-50 m-auto">
    <form action="userinfo.php" method="post">
      <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" autocomplete="off" class="form-control">

      </div>
      <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" autocomplete="off" class="form-control">

      </div>
      <div class="form-group">
        <label>Mobile</label>
        <input type="text" name="mobile" autocomplete="off" class="form-control">
      </div>

      <div class="form-group">
        <label>Comments</label>
        <textarea  class="form-control" name="comments" id="" cols="30" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-success">Submit</button>


    </form>
  </div>
  </section>

  <footer>
    <p class="p-3 bg-dark text-white text-center" id="contact"> @K2R Technologies 
      <br>
      k2rtechnologies@gmail.com
      <br>
      Contact Us 8625889168/7083042021
      <br>
      Kolhapur/Pune/Bangalore
      <br>
      Copyright @2023
    </p>
  </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>