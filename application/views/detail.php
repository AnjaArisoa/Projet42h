<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href=<?php echo base_url().'/assets/css/detail.css'?>>
</head>

<body>
<main>
  <section>
    <div class="container flex">
      <div class="left" style="margin-right:50px;">
        <div class="image">
          <img src="<?php echo base_url().'assets/img/'.$objet[0]['img']?>" class="slide" style="width:450px;height:520px;">
        </div>
      </div>
      <div class="right">
        <h3><?php echo $objet[0]['nom']?></h3>
        <h4> Ingredient </h4>
        <p><?php echo $objet[0]['apropos']?></p>
        <h5>Apport</h5>
        <div class="aproposbe" style="width:200px;text-decoration:underline;">
        <?php echo $objet[0]['aproposbe']?>
        </div>
        
      </div>
    </div>
  </section>
  </main>
</body>


</html>