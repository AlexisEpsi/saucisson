<?php
require_once 'affichage.php';
require_once 'db.php';

$stmt = db()->prepare("SELECT contenus.*, utilisateurs.pseudo FROM contenus INNER JOIN utilisateurs ON contenus.id_utilisateur = utilisateurs.id");
$stmt->execute();
$contenus = $stmt->fetchAll();

echo pageHeader("saucisson");
?>
<link rel="stylesheet" href="styles/style_index.css">
<div class="gridSaucisson">
    <?php foreach ($contenus as $contenu) { ?>
        <div class="card">
            <div class="utilisateur">
                <img src="imagesPP/ppVierge.png" alt="photo de profil" class="imagePP">
                <span class="pseudo"><?php echo $contenu['pseudo']; ?></span>
            </div>
            <img src="images/<?php echo $contenu['chemin_image'];?>" alt="Image saucisson" class="imageSaucisson">


        </div>
    <?php } ?>
</div>
<?php echo pageFooter(); ?>