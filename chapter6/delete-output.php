<?php require '../header.php'; ?>
<?php
$pdo=new PDO('mysql:host=localhost;dbname=shop;charset=utf8', 
	'staff', 'password');
$sql=$pdo->prepare('delete from product where id = ?');
if ($sql->execute([$_REQUEST['id']])) {
	echo '消去に成功しました';
} else {
	echo '消去に失敗しました';
}
?>
<?php require '../footer.php'; ?>
