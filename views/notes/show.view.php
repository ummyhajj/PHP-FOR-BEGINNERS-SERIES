<?php require base_path('views/partials/head.php'); ?>
<?php require base_path('views/partials/nav.php'); ?>
<?php require base_path('views/partials/banner.php'); ?>
  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <p class='mb-6'>
        <a href="/notes" class="text-blue-500 hover:underline">go back....</a>
      </p>

      <ul>
        <textarea readonly><?= htmlspecialchars($note['body']) ?></textarea>
        <!-- I want the authorized user to be able to edit notes -->
        <p class="mt-6">
          <a href="#" class="text-blue-500 hover:underline">Edit Note</a>
        </p>
      </ul>
    </div>
  </main>


  <?php require base_path('views/partials/footer.php'); ?> ] 