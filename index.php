<?php include "data.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>html in</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
</head>
<body>
<div class="conttainer">
    <div class="row">
        <div class="col-12">
        
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <?php $nomor=0; foreach($data_sider as $key):?>
    <div class="carousel-item <?php if($nomor==0){echo "active";}?>">
      <img src=<?php echo $key; ?> class="d-block w-100" alt="logo-<?php echo $nomor;?>">
    </div>
    <?php $nomor++; endforeach; ?>
 </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">

    <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">

       <span class="carousel-control-next-icon"  aria-hidden="true"></span>
       <span class="sr-only">Next</span>
    </a>

 </div>
 </div>
 </div>
 </div>
  



    


     

<!-- data siswa -->
<div class="container">
    <div class="row">

     <?php foreach($data_siswa as $key=>$value ):?>

        <div class="col-3">
             <!-- card -->
            <div class="card mt-2 vh-70" style="width: 18rem;">
                <img src="asset/image/btss.jpg" class="card-img-top img-thumbnail" alt="cards">
                <div class="card-body d-flex flex-column">
                    <h2 class="card-title mr-2 mt-2"><?php echo $value[0]; ?></h2>
                  <p class="card-text"><i class="fas fa-map-marker-alt mr-1"></i><?php echo $value[1]; ?></p>
                  <p class="card-text mt-2"><?php echo $value[2]; ?></p>
                  <!-- <p class="card-text"><?php echo $value[3]; ?></p> -->
                </div>
             <div class="h-100 d-flex align-item-end" >
             <a href="#" class="btn btn-primary">BACA SELENGAPNYA</a>
              
               </div>
              </div>
        </div>
     <?php endforeach;?>
        
    </div>
</div>
            


    <script src="asset/js/jQuary-3.5.1.full.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

</body>
</html>