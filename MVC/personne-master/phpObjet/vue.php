<?php 
$chaine = "ma chaine";
$chaine2 = "chaine 2";
$url = "https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSvGBbRtzgNfNaHPP9X28Gj6OQF0l6ZaiqgxJlujX5QsE5g35Or18WijxY3";

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
</head>
<body>
    
<?= $chaine ?> , <?= $chaine2 ?>
<br/>
<?php echo "{$chaine} , {$chaine2}" ?>
<br/>
<img src="<?= $url ?>" />

</body>
</html>