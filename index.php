<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Pendataan Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
<nav class="navbar navbar-expand-lg shadow navbar-white fixed-top" style="background-color: #bde6f1">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">B.U.K.U</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Data</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Tentang</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Ulasan</a></li>
                <li><a class="dropdown-item" href="#">dll</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
                <li class="nav-item dropend">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: black"> Cek ulang </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Penilaian</a></li>
                    <li><a class="dropdown-item" href="#">dll</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <button type="submit" class="btn btn-primary justify-content-end">Sign in</button>
      </div>
    </nav>
    <!--tutup nav-->
    <!--card-->
    <div class="container">
      <div class="row text-center mb-4">
        <div class="col">
          <h2>Ayo Baca Buku</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/project/1.jpg" class="card-img-top" alt="1" />
            <div class="card-body">
              <p class="card-text">Buku-buku bahasa Jepang mencakup karya sastra dan lain lain</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/project/2.jpg" class="card-img-top" alt="2" />
            <div class="card-body">
              <p class="card-text">Buku self development yang akan membantu anda mengembangkan diri anda</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="card">
            <img src="img/project/3.jpg" class="card-img-top" alt="3" />
            <div class="card-body">
              <p class="card-text">Buku keuangan yang akan membantu memanagement keuangan keseharian anda</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- tutup card-->
    
  <div class="row justify-content-center">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card shadow-sm my-0">
            <div class="card-body p-4">
                <div class="row">
                   <div class="col-lg-4">
                    <?php include"form.php";?>
                   </div>
                   <div class="col-lg-8">
                    <?php include"data.php";?>
</div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>