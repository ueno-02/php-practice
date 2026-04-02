<?php require '../header.php'; ?>
    <?php 
    date_default_timezone_set('Japan');
    echo '<p>', date('Y/m/d/ H:i:s'), '</P>';
    echo '<p>', date('Y年m月d日 H時i分s秒'), '</P>';
    ?>
<?php require '../footer.php'; ?>