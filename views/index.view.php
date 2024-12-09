<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>
<?php require('partials/banner.php'); ?>

  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
       <p>Hello! Welcome to the home page</p>
    </div>
  </main>
  
  <?php require('partials/footer.php'); ?>

  
  <div class="ml-10 flex items-baseline space-x-4">
    <a href="index.php" class="<?= $current_page === 'index.php' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">Home</a>
    <a href="about.php" class="<?= $current_page === 'about.php' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">About</a>
    <a href="contact.php" class="<?= $current_page === 'contact.php' ? 'bg-gray-900 text-white' : 'text-gray-300' ?> rounded-md px-3 py-2 text-sm font-medium hover:bg-gray-700 hover:text-white">Contact</a>
   </div>