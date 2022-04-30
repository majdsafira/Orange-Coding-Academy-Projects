<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Qatr al-Nada</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="main.php">Add Page</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

    <div class="form-container">
    <form method="post" action="main.php">
        
        <label for="model">model</label>
        <br>
        <input type="text" name="model" required>
        <br>
        <label for="brand">brand</label>
        <br>
        <input type="text" name="brand" required>
        <br>
        <label for="color">color</label>
        <br>
        <input type="text" name="color" required>
        <br>
        <label for="price">price</label>
        <br>
        <input type="text" name="price" required>
        <br>
        <label for="description">description</label>
        <br>
        <input type="text" name="description" required>
        <br> <br>
        <button type="submit">Add</button>
     
    </form>
    <a href="index.php" class="a-btn">
        <button class="home-btn">Home Page</button>
    </a>
    </div>
    <?php
    
    session_start();
    // unset($_SESSION);
    // unset($_POST);
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $phone = array("model" => $_POST["model"],"color" => $_POST["color"],"brand" =>$_POST["brand"],"price" =>$_POST["price"],"description"=>$_POST["description"]);
        $_SESSION["phone"][] = $phone;
        $test = $phone;
        $_SESSION["test"][] = $test;
        echo "<pre>";
        print_r($_SESSION["test"]);
        echo "</pre>";
    }




    
    
    ?>

<footer class="bg-dark text-center text-white">

<div class="container p-4">

  <section class="mb-4">

    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fa-brands fa-facebook"></i></a>


    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fab fa-twitter"></i
    ></a>


    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fab fa-google"></i
    ></a>


    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fab fa-instagram"></i
    ></a>


    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fab fa-linkedin-in"></i
    ></a>


    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
      ><i class="fab fa-github"></i
    ></a>
  </section>

  <section class="">
    <form action="">

      <div class="row d-flex justify-content-center">

        <div class="col-auto">
          <p class="pt-2">
            <strong>Sign up for our newsletter</strong>
          </p>
        </div>



        <div class="col-md-5 col-12">

          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example21" class="form-control" />
            <label class="form-label" for="form5Example21">Email address</label>
          </div>
        </div>



        <div class="col-auto">
        </div>

      </div>

    </form>
  </section>


  <section class="mb-4">
    <p>
      This Demo was done by Mohammed-Ameen Ababneh as the fourth project in Coding Academy by Orange
    </p>
  </section>

  <section class="">

    <div class="row">

      <div class="col-lg-12 col-md-6 mb-4 mb-md-0">
        <h5 class="text-uppercase">Pages</h5>

        <ul class="list-unstyled mb-0">
          <li>
            <a href="#!" class="text-white">Home</a>
          </li>
          <li>
            <a href="#!" class="text-white">Add page</a>
          </li>
        </ul>
      </div>




    </div>

  </section>

</div>

<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  © 2022 Copyright
</div>

</footer>
</body>
</html>
