<?php include("info-card.php"); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projet-7</title>
</head>
<body>
    <section class="container">
            <?php
                foreach ($card_film as $key => $value) { ?>
                   
                        <div class="card">
                            <h2 class="title"><?php echo $value['nom']; ?></h2>
                            <img class="img" src="<?php echo $value['img']; ?>">
                            <p class="p">Date de sortie: <?php echo $value['date']; ?> </p>
                            <p class="p">Réalisateur: <?php echo $value['réalisateur']; ?> </p>
                            <p class="p">Durée: <?php if ($value['durée'] == 'inconnu') {
                                echo 'inconnu';
                            } else {
                                $hours = floor($value['durée'] / 60);
                                $minutes = $value['durée'] % 60;
                                echo $value['durée'] = $hours . ' h ' . $minutes ;
                            } ?> </p>
                            <p class="p">Genre: <?php echo $value['genre']; ?> </p> 
                            <p class="p">Synopsis: <?php echo $value['synopsis']; ?> </p>
                            <?php echo $value['bande-annonce']; ?>           
                        </div>
            <?php }
            ?>             
    </section>
    
</body>
</html>