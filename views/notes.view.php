<?php require 'template/header.php' ?>
<?php require 'template/nav.php' ?>


<?php require 'template/banner.php' ?>




<div class=" container mx-auto my-5">
    <ul>
        <?php foreach ($notes as $note): ?>

            <li class="mx-5"><a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['body'] ?>
                </a></li>
        <?php endforeach; ?>
    </ul>
<p class="mx-5 pt-5">
    <a href="" class="text-blue-500 hover:underline"> Create Note </a>
</p>

</div>




<?php require 'template/footer.php' ?>