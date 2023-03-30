<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Template Main CSS File -->
  <link href="../assets/asientos.css" rel="stylesheet">
</head>
<body>
<?php include ("../Components/nav.php"); ?>

<!-- ======= Team Section ======= -->
<section id="team" class="team">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Recursos de recreacion</h2> 
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, quos?</p>
      </header>

      <div class="row gy-4">
      <?php
        $conexion=mysqli_connect('localhost', 'root', '', 'rtac'); 
      ?>

      <?php
        $sql="SELECT * from articulos
        WHERE Categoria='Recreacion'";
        // select * from usuario where nombre like "%luis%"
        $result=mysqli_query($conexion,$sql);

        while($mostrar=mysqli_fetch_array($result)){
        ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="../Imagenes/<?php echo $mostrar['Fotografia'] ?>" class="img-fluid" alt="">
            </div>
            <p class="nombre">Silla: <?php echo $mostrar['Nombre'] ?></p>
            <p class="descripcion">Descripcion: <?php echo $mostrar['Descripcion'] ?></p>
          </div>
        </div>
        <?php
        }

        ?>
    </div>
  </div>

    </div>

  </section><!-- End Team Section -->

<?php include ("../Components/footer.php"); ?>
</body>
</html>