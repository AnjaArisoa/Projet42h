<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Responsive Product Design</title>
	<link rel="stylesheet" type="text/css" href=<?php echo base_url().'/assets/css/choix.css'?>>
</head>
<body>
<main>
	<section class="products">
		<div class="all-products">
            <?php for($i=0;$i<count($suggestion);$i++) { ?>
                <div class="product">
				<img src="<?php echo base_url().'assets/img/diet.jpeg' ?>">
				<div class="product-info">
					<h4 class="product-title">
						suggestion no. <?php echo $i+1 ?>
					</h4>
					<p class="product-price"><?php echo $suggestion[$i]['prix'] ?> Ar</p>
					<p class="duration"><?php echo $suggestion[$i]['duree'] ?> j</p>
					<a class="product-btn" href="<?php echo site_url('Regime/') ?>?id=<?php  echo $suggestion[$i]['idRegime']; ?>&&duree=<?php  echo $suggestion[$i]['duree']; ?>"><h4>Payer pour ce regime	</h4></a>
				</div>
			</div>
            <?php }?>
		</div>
	</section>
</main>
</body>
</html>