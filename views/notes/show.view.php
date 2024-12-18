<?php require base_path('views/template/header.php')  ?>
<?php require base_path( 'views/template/nav.php') ?>
<?php require  base_path( 'views/template/banner.php') ?>




<div class="  mx-5 my-5">


    <a href="/notes" class="my-5 text-blue-500 hover:underline"> Go Back</a>

    <p> <?= htmlspecialchars($note['body'])  ?> </p>


    <form class="mt-6" method="POST">

        <button class="text-red-500 " type="submit">Delete</button>

    </form>


</div>



<?php require  base_path('views/template/footer.php') ?>