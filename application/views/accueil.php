<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href=<?php echo base_url().'/assets/css/accueil.css'?>>
    <title>Navbar</title>
</head>
<body>
    <main>
        <h2 class="dash-title">Overview</h2>
        <div class="dash-cards">
        <?php for($i=0;$i<6;$i++) {  $randomNumber = mt_rand(0,6 );?>
            <div class="card-single">
                <div class="card-body" style="border-bottom:5px solid #669980;">
                    <img src=<?php echo base_url().'assets/img/'. $objet[$randomNumber]['img']?> alt="">                   
                </div>
                <div class="card-footer">
                    <a href="<?php echo site_url('Menu/indexwithid')?>?id=<?php echo $objet[$randomNumber]['idPlat'] ; ?>">View all</a>
                </div>
            </div>
            <?php }?>
        </div>
    </main>
    </div>
</body>
</html>