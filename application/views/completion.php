<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/accueil.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/completion.css'?>">
    <title>Navbar</title>
</head>
<body>
    <main>
    <form method="GET" action="<?php echo site_url('Completion/insert_detail') ?>">
    <div class="radio-tile-group">
        <div class="input-container">
          <input id="walk" type="radio" name="transport" value=1 required>
          <div class="radio-tile">
            <img src=<?php echo base_url().'assets/img/fille.png'?> alt="Walk">
            <label for="walk">Fille</label>
          </div>
        </div>

        <div class="input-container">
          <input id="bike" type="radio" name="transport" value=0 required>
          <div class="radio-tile">
            <img src=<?php echo base_url().'assets/img/garçon.png'?> alt="Bike">
            <label for="bike">Garçon</label>
          </div>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Poids</label>
        <div class="col-sm-6">
            <input type="number" class="form-control" name="poids" value="" required/><span>x Kg</span>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Taille</label>
        <div class="col-sm-6">
            <input type="number" class="form-control" name="taille" value="" required/><span>x Cm</span>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Objectif</label>
        <div class="col-sm-6">
            <select class="form-control" name="objectif" required>
                    <option value="0">Perdre</option>
                    <option value="1">Gagner</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-3 col-form-label">Nombre de Kilo</label>
        <div class="col-sm-6">
            <input type="number" class="form-control" name="nbkilo" value="" required/>
        </div>
    </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
</form>

    </main>
</body>
</html>
