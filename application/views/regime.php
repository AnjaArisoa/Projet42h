<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/accueil.css'?>">
    <style>
        .dash-cards {
            display: flex;
            flex-wrap: wrap;
        }

        .card-single {
            width: 30%;
            margin: 10px;
            border: 5px solid #669980;
        }

        .card-body {
            width: 100%;
            height: 200px;
        }

        .card-body img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card-footer {
            text-align: center;
            margin-top: 10px;
        }

        .btn-export {
            background-color: #666699;
            color: white;
            font-family: sans-serif;
            margin-left: 1100px;
            margin-top: 200px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <main>
        <div class="dash-cards">
            <?php for($i = 0; $i < count($objet); $i++) { ?>
                <div class="card-single">
                    <div class="card-body">
                        <img src="<?php echo base_url().'assets/img/'.$objet[$i]['image']; ?>" alt="">
                    </div>
                    <div class="card-footer">
                        <p><?php echo $objet[$i]['description']; ?></p>
                    </div>
                </div>
            <?php } ?>
            <p>Duree:<?php echo $objet[0]['duree']; ?>/jours</p>
            <a class="btn-export" href="<?php echo site_url('Regime/pdf'); ?>?duree=<?php echo $objet[0]['duree']; ?>&&id=<?php echo $objet[0]['idRegime']; ?>">Exporter</a>
        </div>
    </main>   
</body>
</html>



