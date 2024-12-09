<?php require('views/partials/head.php'); ?>
<?php require('views/partials/nav.php'); ?>
<?php require('views/partials/banner.php'); ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
        <form  method="POST">
            <div class="shadow sm-overflow:hidden sm:rounded-md">
                <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                    <div>
                        <label for="body" class="block text-sm/6 font-medium text-gray-700">Body</label>
                        <div class="mt-1">
                            <textarea 
                                name="body" 
                                id="body" 
                                rows="3" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm/6" 
                                placeholder="Write your note here..." 
                                
                            ><?= $_POST['body'] ?? '' ?></textarea>

                            <?php if (isset($errors['body'])) :?>                                  
                                <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
 
                             <?php endif; ?>      
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50  px-4 py-3 mt-6 text-right sm:px-6">
                
                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
           </div>
        </form>

    </div>
  </main>
  <?php require('views/partials/footer.php'); ?>