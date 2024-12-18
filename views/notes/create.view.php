<?php require base_path('views/template/header.php')  ?>
<?php require base_path( 'views/template/nav.php') ?>
<?php require base_path( 'views/template/banner.php') ?>




<div class="  mx-5 my-5">


    <a href="/notes" class="my-5 text-blue-500 hover:underline"> Go Back</a>
    <form method="POST" action="/note/create">
        <div class="max-w-md">
            <div class="border border-gray-900/10 p-5">
                <div class="sm:col-span-4">
                    <label for="body" class="block text-sm/6 font-medium text-gray-900">Body</label>
                    <div class="mt-2">
                        <textarea type="text" name="body" id="body" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 border outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" placeholder="write note..."><?= $_POST['body'] ?? '' ?></textarea>
                       <?php if(isset($errors['body'])): ?>
                        <p class="text-red-500 text-xs"><?= $errors['body'] ?></p>
                        <?php endif ?>
                    
                    </div>
                </div>
                <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>


<?php  require base_path('views/template/footer.php') ?>