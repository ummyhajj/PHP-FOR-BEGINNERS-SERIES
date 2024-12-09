<?php require('views/partials/head.php'); ?>
<?php require('views/partials/nav.php'); ?>
<?php require('views/partials/banner.php'); ?>

  
  <main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">

   
    
    <ul>
      <?php foreach ($notes as $note): ?>
        <li>
          <a href="/naming-convention/note?id=<?= $note['id'] ?>"  class="text-blue-500 hover:underline">
            <?= htmlspecialchars($note['body'] )?>
          </a>
    
        </li>

      <?php endforeach; ?>


      <p class="mt-6">
        <a href="/naming-convention/notes/create" class="text-blue-500 hover:underline">Create Notes</a>
      </p>
    </ul> 
    
    </div>
  </main>
  <?php require('views/partials/footer.php'); ?>