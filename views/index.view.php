<?php require base_path('views/template/header.php')  ?>
<?php require base_path( 'views/template/nav.php') ?>
<?php require base_path( 'views/template/banner.php') ?>




<div class=" container mx-auto my-5">
<p>Hello <?=$_SESSION['user']['email'] ?? ''?>, this is home page</p>

</div>



<?php require base_path('views/template/footer.php') ?>