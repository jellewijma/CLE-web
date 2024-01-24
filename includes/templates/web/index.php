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

<section class="h-[188px] w-screen">

</section>

<!-- <?php if (!empty($errors)) : ?>
  <section class="content">
    <ul class="notification is-danger">
      <?php foreach ($errors as $error) : ?>
        <li><?= $error; ?></li>
      <?php endforeach; ?>
    </ul>
  </section>
<?php endif; ?> -->

<?php if (!empty($errors)) { ?>
  <div class="absolute top-4 inset-x-[calc(50vw-192px)] flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md animate-duration-300 opacity-0 z-20" id="success-popup">
    <div class="flex items-center justify-center w-12 bg-red-500">
      <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
      </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
      <div class="mx-3">
        <?php foreach ($errors as $error) : ?>
          <li><?= $error; ?></li>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php } ?>


<?php if ($success) { ?>
  <div class="absolute top-4 inset-x-[calc(50vw-192px)] flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md animate-duration-300 opacity-0 z-20" id="success-popup">
    <div class="flex items-center justify-center w-12 bg-emerald-500">
      <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z" />
      </svg>
    </div>

    <div class="px-4 py-2 -mx-3">
      <div class="mx-3">
        <span class="font-semibold text-emerald-500 dark:text-emerald-400">Success</span>
        <p class="text-sm text-gray-600"><?= $success; ?></p>
      </div>
    </div>
  </div>
<?php } ?>

<section class="text-gray-600 body-font container mx-auto">
  <div class="container w-screen mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col bg-  ">
    <img src="<?= BASE_PATH ?>images/8C8A1144.jpg" alt="" srcset="" class="w-screen h-96 object-cover ">
  </div>
</section>
<section class="text-gray-600 body-font container mx-auto">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">De Thuishaven
      </h1>
      <p class="mb-8 leading-relaxed">Dit is het centrale punt voor alle leden van studentenvereniging Phileas Fogg, zogezegd de thuishaven, de huiskamer. Dit is de plek waar verschillende genootschappen, disputen en jaarclubs samenkomen voor activiteiten, vergaderingen én om gezamenlijk te genieten van het bier. Onze sociëteit wordt wekelijks gebruikt voor interne én externe/open feesten. Toegang tot de sociëteit is op dinsdag alleen voor leden. Op de andere dagen worden er verscheidene evenementen georganiseerd.</p>
      <div class="flex justify-center">
        <a href="open" class="inline-flex text-white bg-[#620d0d] border-0 py-2 px-6 focus:outline-none hover:bg-red-950 rounded text-lg">Openings tijden</a>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Maps</button>
      </div>
    </div>
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
      <img class="object-cover object-center rounded" alt="hero" src="./images/cafe.jpg">
    </div>
  </div>
</section>
<!-- invert -->
<section class="text-gray-600 body-font container mx-auto">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 lg:pr-24 md:pr-16">
      <img class="object-cover object-center rounded" alt="hero" src="./images/IMG_3539-1024x683.jpeg">
    </div>
    <div class="lg:flex-grow md:w-1/2  flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Wat Kun Je Verwachten?
      </h1>


      <p class="mb-8 leading-relaxed">
        <span class="font-bold">Gezelligheid:</span> Ons café straalt warmte uit en biedt een ontspannen sfeer waar je je meteen thuis zult voelen. <br>
        <span class="font-bold">Culinaire Ervaring:</span> Ontdek een menu vol smaakvolle gerechten en verfrissende drankjes, samengesteld met oog voor kwaliteit en diversiteit.<br>
        <span class="font-bold">Evenementen:</span> Van themafeesten tot quizavonden, bij Phileas Fogg is er altijd wel iets te beleven. Blijf op de hoogte van onze evenementenkalender en mis niets!
      </p>
    </div>

  </div>
</section>
<section class="text-gray-600 body-font relative container mx-auto" id="reserveer">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Resereveer een plek</h1>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <!-- <div class="flex flex-wrap -m-2"> -->
      <div>
        <?php if (isset($web)) : ?>
          <form action="" method="post" class="flex flex-wrap">
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="name" class="leading-7 text-sm text-gray-600">Naam</label>
                <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="startDate" class="leading-7 text-sm text-gray-600">Begin datum</label>
                <input type="datetime-local" id="startDate" name="startDate" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-1/2">
              <div class="relative">
                <label for="endDate" class="leading-7 text-sm text-gray-600">Eind datum</label>
                <input type="datetime-local" id="endDate" name="endDate" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
              </div>
            </div>
            <div class="p-2 w-full">
              <div class="relative">
                <label for="message" class="leading-7 text-sm text-gray-600">Opmerking</label>
                <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
              </div>
            </div>
            <div class="p-2 w-full">
              <!-- <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-red-950 rounded text-lg">Button</button> -->
              <button type="submit" name="submit" class="flex mx-auto text-white bg-[#620d0d] border-0 py-2 px-8 focus:outline-none hover:bg-red-950 rounded text-lg">Verstuur</button>
            </div>
          </form>
        <?php endif;  ?>
      </div>
    </div>
  </div>
</section>
<footer class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0 w-32 w-1/3">
          <img src="./images/Logo-Phileas.svg" alt="" srcset="" class="">
        </a>
      </a>
    </div>
    <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-600 hover:text-gray-800">First Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
          </li>
          <li>
            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
          </li>
        </nav>
      </div>
    </div>
  </div>
  <div class="bg-gray-100">
    <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-500 text-sm text-center sm:text-left">© 2024 —
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@florian</a>
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@jelle</a>
        <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@daan</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a class="text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a class="ml-3 text-gray-500">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>

<style>
  #success-popup {
    animation: slide-right 3500ms forwards;
  }

  @keyframes slide-right {
    0% {
      transform: translateX(0);
      opacity: 1;
    }

    85.7% {
      transform: translateX(0);
      opacity: 1;
    }

    100% {
      opacity: 0;
      transform: translateX(50%);
      display: none;
    }
  }

  .hide-scroll::-webkit-scrollbar {
    display: none;
  }

  /* For IE, Edge and Firefox */
  .hide-scroll {
    -ms-overflow-style: none;
    /* IE and Edge */
    scrollbar-width: none;
    /* Firefox */
  }
</style>