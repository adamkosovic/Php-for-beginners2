<?php require "partials/head.php"; ?>
<?php require "partials/nav.php"; ?>
<?php require "partials/banner.php"; ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
  <form method="POST" class="max-w-xl">
  
  <div class="mb-6">
    <label for="body" class="block mb-2 text-sm font-medium text-gray-900">
      Description
    </label>

    <textarea
      id="body"
      name="body"
      rows="5"
      class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-blue-500 focus:outline-none focus:ring-1 focus:ring-blue-500"
      placeholder="Write your note here..."
    ><?= $_POST['body'] ?? '' ?></textarea>

    <?php if (isset($errors['body'])) : ?>
      <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
    <?php endif; ?>
  </div>

  <button
    type="submit"
    class="rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-500"
  >
    Create Note
  </button>

</form>
  </div>
</main>

<?php require "partials/foot.php"; ?>