<div class="min-h-full">
  <header class="text-gray-600 body-font border-t-[20px] border-[#620d0d] fixed w-screen bg-white z-10 drop-shadow-md">
    <div class="container mx-auto flex justify-center flex-wrap p-5 flex-col md:flex-row items-center">
      <nav class="flex flex-wrap items-center text-base justify-center w-1/3">
        <a href="<?= BASE_PATH ?>" class="mr-5 hover:text-gray-900">Home</a>
        <a href="<?= BASE_PATH ?>about" class="mr-5 hover:text-gray-900">Over ons</a>
        <a href="<?= BASE_PATH ?>dashboard" class="mr-5 hover:text-gray-900">Dashboard</a>
      </nav>
      <div class="w-1/3 flex justify-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 w-32 w-1/3">
          <img src="<?= BASE_PATH ?>images/Logo-Phileas.svg" alt="" srcset="" class="">
        </a>
      </div>
      <div class="w-1/3 flex justify-center">
        <?php if ($this->session->keyExists('user')) : ?>
          <a href="<?= BASE_PATH ?>logout" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Logout
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        <?php else : ?>
          <a href="<?= BASE_PATH ?>login" class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0">Login
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </header>
  <section class="w-sceen h-[168px]"></section>
  <header class="bg-white mt-6">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Dashboard</h1>
    </div>
  </header>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <ul role="list" class="divide-y divide-gray-100">

        <?php foreach ($web as $appointment) : ?>
          <li class="flex justify-between gap-x-6 py-5">
            <div class="flex min-w-0 gap-x-4">
              <!-- <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt=""> -->
              <div class="min-w-0 flex-auto">
                <p class="text-sm font-semibold leading-6 text-gray-900"><?= $appointment->name; ?></p>
                <p class="mt-1 truncate text-xs leading-5 text-gray-500"><?= $appointment->email; ?></p>
              </div>
            </div>
            <div class="min-w-0 flex-auto">
              <div class="flex">
                <p>Start: &nbsp;</p>
                <p class="text-sm leading-6 text-gray-900"> <?= $appointment->startDate; ?></p>
              </div>
              <div class="flex">
                <p>End: &nbsp;</p>
                <p class="mt-1 truncate text-sm  leading-5 text-gray-500"> <?= $appointment->endDate; ?></p>
              </div>
            </div>
            <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
              <p class="text-sm leading-6 text-gray-900"><?= $appointment->message; ?></p>
              <!-- <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">3h ago</time>
                </p> -->
            </div>
          </li>
        <?php endforeach; ?>
      </ul>

    </div>
  </main>
</div>