<nav class="bg-gray-800">

    <!-- TOP NAVBAR -->
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">

            <!-- Logo -->
            <div class="flex shrink-0 items-center">
                <img
                    class="h-8 w-auto"
                    src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                    alt="Your Company"
                >
            </div>


            <!-- DESKTOP NAVIGATION -->
            <div class="hidden md:flex md:items-center md:gap-2">

                <a
                    href="/"
                    class="<?= urlIs('/')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                        rounded-md px-3 py-2 text-sm font-medium transition"
                >
                    Home
                </a>

                <a
                    href="/about"
                    class="<?= urlIs('/about')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                        rounded-md px-3 py-2 text-sm font-medium transition"
                >
                    About
                </a>

                <?php if ($_SESSION['user'] ?? false) : ?>
                  <a
                      href="/notes"
                      class="<?= urlIs('/notes')
                          ? 'bg-gray-900 text-white'
                          : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                          rounded-md px-3 py-2 text-sm font-medium transition"
                  >
                      Notes
                  </a>
                <?php endif; ?>

                <a
                    href="/contact"
                    class="<?= urlIs('/contact')
                        ? 'bg-gray-900 text-white'
                        : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                        rounded-md px-3 py-2 text-sm font-medium transition"
                >
                    Contact
                </a>

            </div>


            <!-- DESKTOP RIGHT SIDE -->
            <div class="hidden md:flex md:items-center md:gap-3">

                <?php if ($_SESSION['user'] ?? false) : ?>

                     

                    <span class="text-sm text-gray-300">
                        <?= htmlspecialchars($_SESSION['user']['email'] ?? '') ?>
                    </span>

                    <form method="POST" action="/session">
                        <input type="hidden" name="_method" value="DELETE">

                        <button
                            type="submit"
                            class="rounded-md bg-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-red-500"
                        >
                            Log out
                        </button>
                    </form>

                <?php else : ?>

                    <a
                        href="/register"
                        class="rounded-md px-4 py-2 text-sm font-semibold text-gray-300 transition hover:bg-gray-700 hover:text-white"
                    >
                        Register
                    </a>

                    <a
                        href="/login"
                        class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-500"
                    >
                        Log in
                    </a>

                <?php endif; ?>

            </div>


            <!-- MOBILE MENU BUTTON -->
            <button
                id="mobile-menu-button"
                type="button"
                class="flex items-center justify-center rounded-md p-2 text-gray-300 hover:bg-gray-700 hover:text-white md:hidden"
                aria-label="Open menu"
            >
                <!-- Hamburger -->
                <svg
                    id="menu-open-icon"
                    class="h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                    />
                </svg>

                <!-- X -->
                <svg
                    id="menu-close-icon"
                    class="hidden h-6 w-6"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </button>

        </div>
    </div>


    <!-- MOBILE MENU -->
    <div id="mobile-menu" class="hidden border-t border-gray-700 md:hidden">

        <!-- Navigation -->
        <div class="space-y-1 px-4 py-3">

            <a
                href="/"
                class="<?= urlIs('/')
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                    block rounded-md px-3 py-2 text-base font-medium"
            >
                Home
            </a>

            <a
                href="/about"
                class="<?= urlIs('/about')
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                    block rounded-md px-3 py-2 text-base font-medium"
            >
                About
            </a>

            <a
                href="/notes"
                class="<?= urlIs('/notes')
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                    block rounded-md px-3 py-2 text-base font-medium"
            >
                Notes
            </a>

            <a
                href="/contact"
                class="<?= urlIs('/contact')
                    ? 'bg-gray-900 text-white'
                    : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>
                    block rounded-md px-3 py-2 text-base font-medium"
            >
                Contact
            </a>

        </div>


        <!-- MOBILE USER AREA -->
        <div class="border-t border-gray-700 px-4 py-4">

            <?php if ($_SESSION['user'] ?? false) : ?>

                <!-- User email -->
                <div class="mb-3 px-3">
                    <p class="text-xs text-gray-400">
                        Signed in as
                    </p>

                    <p class="truncate text-sm font-medium text-white">
                        <?= htmlspecialchars($_SESSION['user']['email'] ?? '') ?>
                    </p>
                </div>

                <!-- Logout -->
                <form method="POST" action="/session">
                    <input type="hidden" name="_method" value="DELETE">

                    <button
                        type="submit"
                        class="w-full rounded-md bg-red-600 px-4 py-2.5 text-sm font-semibold text-white transition hover:bg-red-500"
                    >
                        Log out
                    </button>
                </form>

            <?php else : ?>

                <div class="flex flex-col gap-2">

                    <a
                        href="/login"
                        class="block w-full rounded-md bg-indigo-600 px-4 py-2.5 text-center text-sm font-semibold text-white transition hover:bg-indigo-500"
                    >
                        Log in
                    </a>

                    <a
                        href="/register"
                        class="block w-full rounded-md bg-gray-700 px-4 py-2.5 text-center text-sm font-semibold text-white transition hover:bg-gray-600"
                    >
                        Register
                    </a>

                </div>

            <?php endif; ?>

        </div>

    </div>

</nav>


<!-- MOBILE MENU SCRIPT -->
<script>
    const menuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    const openIcon = document.getElementById('menu-open-icon');
    const closeIcon = document.getElementById('menu-close-icon');

    menuButton.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');

        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
    });
</script>