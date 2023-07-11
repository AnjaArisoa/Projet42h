<!DOCTYPE html>
<html>
<head>
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-image: linear-gradient(to bottom, #f1f1f1, #ffffff);
    }

    .page-effect {
      background-color: #ffffff;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
      margin: 20px auto;
      max-width: 1000px;
      padding: 20px;
    }
      
    .logo {
      text-align: center;
    }

    .logo img {
      max-width: 100px;
      float: left;
      margin-left: 50px;
    }

    .title {
      text-align: center;
      
      

    }

    .subtitle {
      text-align: center;
    }

    .content {
      text-align: center;
      
    }

    .content img {
      max-width: 200px;
    }

    .footer {
      text-align: center;
      font-size: 14px;
      color: #777;
    }
  </style>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <div class="element">
  <div class="page-effect">
    <div class="container">
      <div class="logo">
        <img src="../assets/img/icon.png" alt="Logo" class="img-fluid">
      </div>
      <div class="title">
        <h1><?php echo $olona[0]['nom']?></h1>
      </div>
      <div class="subtitle">
        <p>Informations supplémentaires</p>
    
      <?php for($i = 0; $i < count($objet); $i++) { ?>
      <div class="content">
                    <div class="card-body">
                        <img src="<?php echo base_url().'assets/img/'.$objet[$i]['image']; ?>" alt="">
                    </div>
                    <div class="card-footer">
                        <p><?php echo $objet[$i]['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
            <br> 
            <p>Duree:<?php echo $objet[0]['duree']; ?>/jours</p>
    </div>
    <hr style="color: black;">
    <footer class="footer">
      <span>&copy; 2023 Your Company. All rights reserved.</span>
    </footer>
  </div>
</div> 
<br>
<br>
<br>
<br>
<button class="download" style="background-color:">Download PDF</button>


  <script>
    let div =document.querySelector(".element");
    let btn = document.querySelector(".download");
    btn.addEventListener('click', () => {
        html2pdf().from(div).save()
    })
  </script>

  
</body>
</html>
