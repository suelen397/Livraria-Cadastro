<?php require_once("../controller/ControllerListar.php");?>
<!DOCTYPE html>
<html lang="pt-br">

<?php include("head.php"); ?>



<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="height: 50vh">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../paredeLivro.jpg"  class="d-block w-100 " alt="..." style="height: 50vh">
    </div>
    <div class="carousel-item">
      <img src="../livroAberto.jpg." class="d-block w-100 " alt="..." style="height: 50vh">
    </div>
    <div class="carousel-item">
      <img src="../livromagico.jpg." class="d-block w-100 " alt="..." style="height: 50vh">
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

<body style="background-color: #f1f1f1" >
    <div class="container">
        <div class="row justify-content-center">
            <?php include("menu.php"); ?>
        </div>
        <div class="row justify-content-center">
            <?php new listarController();  ?>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
