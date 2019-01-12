

<?php
include "connect.php";
$select = $con->prepare("SELECT * FROM users ");
$select->setFetchMode(PDO::FETCH_ASSOC);
$select->execute();
while($data=$select->fetch()){
?>
<img src="img/<?php echo $data['image']; ?>" width="100" height="100">
<?php
}?>

<a href="index.php">Add new image</a>