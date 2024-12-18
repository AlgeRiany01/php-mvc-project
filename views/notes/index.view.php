<?php require base_path('views/template/header.php')  ?>
<?php require base_path( 'views/template/nav.php') ?>
<?php require base_path( 'views/template/banner.php') ?>



<div class=" container mx-auto my-5">
    <ul>
        <?php foreach ($notes as $note): ?>

            <li class="mx-5"><a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
            <?= htmlspecialchars($note['body'])  ?>
                </a></li>
        <?php endforeach; ?>
    </ul>
<p class="mx-5 pt-5">
    <a href="/note/create" class="text-blue-500 hover:underline"> Create Note </a>
</p>

</div>




<?php require  base_path('views/template/footer.php') ?>