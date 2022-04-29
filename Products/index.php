<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Main Page</title>
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
        <li class="nav-item">
        <form method="post" action="index.php">
          <input type="submit" name="clear" value="clear" style="margin: 21%;width: 150%;">
          </form>
        </li>
      </ul>
    </div>
  </div>
</nav>


</div>

    <?php

$flag = false;
        session_start();
        unset($_SESSION["test"]);
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        if($_POST["clear"] == "clear"){
            $flag = true;
            unset($_SESSION["phone"]);
        }}
    
        


if(isset($_SESSION["phone"])){
    echo '<div class="container-md">';
    for($i = 0;$i <count($_SESSION["phone"]);$i++ ){
echo '<div class="card" style="width: 18rem;">';
echo '<img src="img/logo.png" class="card-img-top" alt="...">';
echo '<div class="card-body">';
echo '<h5 class="card-title"> Model:'. $_SESSION["phone"][$i]['model']  .'</h5>';
echo '<h6> Brand: ' .$_SESSION["phone"][$i]['brand'] .'</h6>';
echo '<p class="card-text">'.$_SESSION["phone"][$i]['description'] .'</p>';
echo '<p class="card-text">Color: '.$_SESSION["phone"][$i]['color'] .'</p>';
echo ' <div class="btn btn-primary">'.$_SESSION["phone"][$i]['price'].' JD</div>';
echo '</div>';
echo '</div>';
}
echo '</div>';
}else if($flag){
    echo '<div class="container1">';
    echo '<h1>Items were deleted.</h1>';
    echo '</div>';
}
else{
    echo '<div class="container1">';
    echo '<h1>There is no items found.</h1>';
    echo '</div>';
}     

?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>



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


<script src="js/all.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>