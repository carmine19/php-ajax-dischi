<?php include 'dischi.php' ?>
<!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../public/style.css">
      <title>Php Version</title>
   </head>
   <body>
   
      <header>
          <div class="container">
              <div class="box-menu">
                  <div class="box-logo">
                      <img src="../images/logorgb.png" alt="">
                  </div>
              </div>
          </div>
      </header>

   <main>
   <section id="card">
      <div class="container">
          <?php foreach($dischi as $disco => $ele) { ?>
          <div class="box-cd">
             <div class="box-img">
                <img src="<?php echo $ele['poster'] ?>" alt="">
             </div>
             <div class="box-information">
                <div class="box-title">
                   <h2><?php echo $ele['title'] ?></h2>
                </div>
                <div class="box-author">
                   <p>Autore: <?php echo $ele['author'] ?> </p>
                </div>
                <div class="box-genere">
                   <p>Genere: <?php echo $ele['genre'] ?> </p>
                </div>
                <div class="box-years">
                   <p>Anno:<?php echo $ele['year'] ?> </p>
                </div>
            </div>
        </div>
          <?php } ?>


      </div>
   </section>
</main>


   
   </body>
</html>