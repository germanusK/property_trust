<!-- FOOTER GALLERY -->
<div class="bg-black text-center text-white dark:bg-neutral-600 dark:text-neutral-200">
  <div class="w-full whitespace-nowrap md:whitespace-normal overflow-x-scroll no-scrollbar">
    <div class="flex w-fit md:w-full md:flex-wrap items-baseline align-middle justify-center">
      @foreach (\App\Models\AssetImage::inRandomOrder()->take(48)->get() as $img)
        <div class="m-1 w-56 h-72">
          <img src="{{ $img->url }}" class="object-cover object-center w-full h-full hover:border-x-4 rounded" />
        </div>
      @endforeach
    </div>
  </div>
</div>
<!-- FOOTER GALLERY ENDS -->


<!-- SUBSCRIPTION FORM -->
<div class=" bg-gray-300 text-center">
  <!--Sign-up form section-->
  <div class="px-6 pt-6">
    <form method="post" action="{{ route('updates.subscribe') }}">
      @csrf
      <div
        class="gird-cols-1 grid items-center justify-center gap-4 md:grid-cols-3">
        <div class="md:mb-6 md:ml-auto">
          <p class="text-secondary-800 dark:text-secondary-200">
            <strong>Sign up for our newsletter</strong>
          </p>
        </div>

        <div class="relative md:mb-6" data-te-input-wrapper-init>
          <input type="email" name="email" class="peer block min-h-[auto] w-full rounded border bg-neutral-200 px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:placeholder:opacity-100 data-[te-input-state-active]:placeholder:opacity-100 motion-reduce:transition-none dark:placeholder:text-secondary-200 [&:not([data-te-input-placeholder-active])]:placeholder:opacity-0" id="exampleFormControlInput1" placeholder="Email address" required />
          <label for="exampleFormControlInput1" class="pointer-events-none absolute left-3 top-0 mb-0 max-w-[90%] origin-[0_0] truncate pt-[0.37rem] leading-[1.6] text-secondary-500 transition-all duration-200 ease-out peer-focus:-translate-y-[0.9rem] peer-focus:scale-[0.8] peer-focus:text-primary peer-data-[te-input-state-active]:-translate-y-[0.9rem] peer-data-[te-input-state-active]:scale-[0.8] motion-reduce:transition-none dark:text-secondary-200 dark:peer-focus:text-secondary-200">Email address</label>
        </div>

        <div class="mb-6 md:mr-auto">
          <button type="submit" class="inline-block rounded bg-neutral-600 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)]" data-te-ripple-init data-te-ripple-color="light">Subscribe</button>
        </div>
      </div>
    </form>
  </div>
</div>
<!-- SUBSCRIPTION FORM ENDS -->


<!-- Footer container -->
<footer
  class="bg-slate-900 text-center text-neutral-300 dark:bg-neutral-600 dark:text-neutral-200 lg:text-left">
  <div
    class="flex items-center justify-center border-b-2 border-neutral-200 p-6 dark:border-neutral-500 lg:justify-between">
    <div class="mr-12 hidden lg:block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Social network icons container -->
    <div class="flex justify-center">
      {{-- facebook --}}
      <a href="https://www.facebook.com/bpropertytrust?mibextid=2JQ9oc" class="mr-6 text-neutral-300 dark:text-neutral-200">
        <svg
          xmlns="https://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
        </svg>
      </a>
      {{-- twitter --}}
      <a href="https://twitter.com/ptrustgroup/status/1683360424031297537?s=46&t=2ItHQJHSl4cknkDUHt1jRg" class="mr-6 text-neutral-300 dark:text-neutral-200">
        <svg
          xmlns="https://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
        </svg>
      </a>
      {{-- instagram --}}
      <a href="https://instagram.com/propertytrustgroup?igshid=OGQ5ZDc2ODk2ZA==" class="mr-6 text-neutral-300 dark:text-neutral-200">
        <svg
          xmlns="https://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
        </svg>
      </a>
      {{-- linkedin --}}
      {{-- <a href="#!" class="mr-6 text-neutral-300 dark:text-neutral-200">
        <svg
          xmlns="https://www.w3.org/2000/svg"
          class="h-4 w-4"
          fill="currentColor"
          viewBox="0 0 24 24">
          <path
            d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
        </svg>
      </a> --}}
      {{-- youtube --}}
      <a href="https://www.youtube.com/channel/UCAWwEEqgckiFiuoKQuLKPoA" class="mr-6 text-neutral-300 dark:text-neutral-200">
        <span class="fa-brands fa-youtube"></span>
      </a>
      {{-- tiktok --}}
      <a href="https://www.tiktok.com/@nkemboris1" class="mr-6 text-neutral-300 dark:text-neutral-200">
        <span class="fa-brands fa-tiktok"></span>
      </a>
    </div>
  </div>

  <!-- Main container div: holds the entire content of the footer, including four sections (Tailwind Elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
  <div class="mx-6 py-10 text-center md:text-left">
    <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-4">
      <!-- Tailwind Elements section -->
      <div class="">
        <h6
          class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
          <svg
            xmlns="https://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-4 w-4">
            <path
              d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
          </svg>
          Property Trust Group
        </h6>
        <p>
          A team of well established professionals in real estate providing solutions to any issues related to housing (sales and rentals), aquisition and sales of land, construction and general commerce
        </p>
      </div>
      <!-- Products section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Products & Services
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >Housing Reservations</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >Construction</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >Architectural Design</a
          >
        </p>
        <p>
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            > Buy/Sell real estate</a
          >
        </p>
      </div>
      <!-- Useful links section -->
      <div class="">
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Useful links
        </h6>
        <p class="mb-4">
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >Our Products</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >Our Services</a
          >
        </p>
        <p class="mb-4">
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >About Us</a
          >
        </p>
        <p>
          <a href="#!" class="text-neutral-300 dark:text-neutral-200"
            >Contact</a
          >
        </p>
      </div>
      <!-- Contact section -->
      <div>
        <h6
          class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
          Contact
        </h6>
        <p class="mb-4 flex items-center justify-center md:justify-start">
          <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 h-12 w-12">
            <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
            <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
          </svg>
          HQ:  Buea:  Opposite Sumerset/Heartland supermarket and opposite Orange Molyko <br>
          Douala: 2eme Avenue Logpom <br>
          Yaoundé:  Bonne Diz, Odja <br>
          Limbe:  Opposite Castillina, Behind GHS Limbe, Mile 2
        </p>
        <a href="mailto:bpropertytrust@gmail.com" class="mb-4 flex items-center justify-center md:justify-start">
          <svg xmlns="https://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="mr-3 h-5 w-5">
            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
          </svg>
          bpropertytrust@gmail.com
        </a>
        <a href="tel:237-652-078-411" class="mb-4 flex items-center justify-center md:justify-start">
          <svg
            xmlns="https://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="mr-3 h-5 w-5">
            <path
              fill-rule="evenodd"
              d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
              clip-rule="evenodd" />
          </svg>
          +237 652078411
        </a>
        <a href="https://wa.link/n6lrc2" class="flex items-center justify-center md:justify-start">
          <i class="fab fa-whatsapp text-2xl mr-3"></i>
          +237 652078411
        </a>
      </div>
    </div>
  </div>

  <!--Copyright section-->
  <div class="bg-gray-300 p-6 text-center text-stone-700 ">
    <span>© 2023 Copyright:</span>
    <a class="font-semibold text-neutral-900" href="https://propertytrust.group/">Property Trust Group</a>
  </div>

  <!-- display alerts -->

  <script>
    $(document).ready(() => {
      if ( "{{ session()->has('error') != null }}" ) {
        alert("{{session('error')}}")
      }
      if ( "{{ session()->has('success') != null }}" ) {
        alert("{{session('success')}}")
      }
    });
    


    // multiple thresholds
    var grid_observer = new IntersectionObserver((entries) => {
      entries.forEach(element => {
        anime({
          targets: element['target'],
          scale: [
            {value: .1, easing: 'easeOutSine', duration: 500},
            {value: 1, easing: 'easeInOutQuad', duration: 1200}
          ],
          delay: anime.stagger(200, {grid: [14, 5], from: 'center'})
        });
      });
    });

    grid_observer.observe(document.querySelector([".hero-text"]));
    grid_observer.observe(document.querySelector(['.service-cards']));


  </script>
</footer>