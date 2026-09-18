<?php require base_path ("views/partials/head.php"); ?>
<?php require base_path ("views/partials/nav.php"); ?>

<main>
  <div class="flex min-h-screen items-start justify-center bg-gray-50 px-4 mt-5">

    <div class="w-full max-w-md">

      <!-- Header -->
      <div class="mb-8 text-center">
        <div class="mx-auto mb-5 flex h-12 w-12 items-center justify-center rounded-full bg-indigo-100">
          <span class="text-2xl font-bold text-indigo-600">~</span>
        </div>

        <h1 class="text-3xl font-bold tracking-tight text-gray-900">
          Register for a new account
        </h1>

        <p class="mt-2 text-sm text-gray-500">
          Don't have an account?
          <a href="/register" class="font-semibold text-indigo-600 hover:text-indigo-500">
            Create an account
          </a>
        </p>
      </div>


      <!-- Form -->
      <form method="POST" action="/register">

        <!-- Email + Password -->
        <div class="overflow-hidden rounded-lg border border-gray-300 bg-white shadow-sm">
          <div>
            <input
              type="email"
              name="email"
              placeholder="Email address"
              class="block w-full border-0 border-b border-gray-300 px-4 py-4 text-gray-900 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
            >
            <?php if (isset($errors['email'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['email'] ?></p>
            <?php endif; ?>
          </div>
          <div>
            <input
              type="password"
              name="password"
              placeholder="Password"
              class="block w-full border-0 px-4 py-4 text-gray-900 placeholder:text-gray-400 focus:z-10 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
            >
  
            <?php if (isset($errors['password'])) : ?>
              <p class="text-red-500 text-xs mt-2"><?= $errors['password'] ?></p>
            <?php endif; ?>
          </div>



        </div>

        <button
          type="submit"
          class="mt-6 w-full rounded-lg bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
        >
          Register
        </button>

      </form>

    </div>

  </div>
</main>

<?php require base_path("views/partials/foot.php"); ?>