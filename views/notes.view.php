<?php require 'template/header.php' ?>
<?php require 'template/nav.php' ?>


<?php require 'template/banner.php' ?>




<div class=" container mx-auto my-5">
    <?php foreach($notes as $note): ?>

        <li class="mx-5"><a href="/note?id=<?= $note['id']?>" class="text-blue-500 hover:underline">
            <?= $note['body'] ?>
        </a></li>


        <?php endforeach; ?>


</div>




<?php require 'template/footer.php' ?>