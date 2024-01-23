<!-- <h1 class="title mt-4">Login</h1> -->
<?php if (!empty($errors)) : ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error) : ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img class="mx-auto h-32 w-auto" src="<?= BASE_PATH ?>images/Logo-Phileas.svg" alt="Your Company">
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="" method="post">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" value="<?= $email ?? ''; ?>" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <button type="submit" value="submit" name="submit" class="flex w-full justify-center rounded-md bg-[#620d0d] px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign
                    in</button>
            </div>
        </form>
    </div>
</div>