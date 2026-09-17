<?php require base_path ("views/partials/head.php"); ?>
<?php require base_path ("views/partials/nav.php"); ?>
<?php require base_path ("views/partials/banner.php"); ?>

<main>
  <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
    <form method="POST" action="/note" class="max-w-xl">
      <input type="hidden" name="_method" value="PATCH">
      <input type="hidden" name="id" value="<?= $note['id'] ?>">
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
        ><?= $note['body'] ?></textarea>

        <?php if (isset($errors['body'])) : ?>
          <p class="text-red-500 text-xs mt-2"><?= $errors['body'] ?></p>
        <?php endif; ?>
      </div>

      <div class="flex items-center gap-3">
        <button
          type="submit"
          class="rounded-md bg-blue-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
        >
          Update
        </button>

        <a
          href="/notes"
          class="rounded-md bg-gray-100 px-5 py-2.5 text-sm font-semibold text-gray-700 transition hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2"
        >
          Cancel
        </a>
      </div>
    </form>
  </div>
</main>

<?php require base_path("views/partials/foot.php"); ?>