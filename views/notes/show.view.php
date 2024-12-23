<?php require base_path('views/template/header.php')  ?>
<?php require base_path( 'views/template/nav.php') ?>
<?php require  base_path( 'views/template/banner.php') ?>




<div class="  mx-5 my-5">


    <a href="/notes" class="my-5 text-blue-500 hover:underline"> Go Back</a>

    <p> <?= htmlspecialchars($note['body'])  ?> </p>


    <footer class="mt-6">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Edit</a>
        </footer>


</div>



<?php require  base_path('views/template/footer.php') ?>