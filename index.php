<?php
require_once 'affichage.php';
require_once 'db.php';

$stmt = db()->prepare("SELECT * FROM contenus");
$stmt->execute();
$contenus = $stmt->fetchAll();
?>

<?php
echo pageHeader("saucisson");
?>
<div class="">
    <?php foreach ($contenus as $contenu) { ?>
        
    <?php } ?>
</div>
<?php echo pageFooter(); ?>