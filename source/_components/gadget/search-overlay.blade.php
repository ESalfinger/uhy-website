<div class="fixed w-screen h-screen max-w-full max-h-full top-0 left-0 bg-green-dark backdrop-blur-xl z-40 bg-opacity-70" x-cloak x-show="search_open">
  <div class="relative container mx-auto w-full h-full flex items-center justify-center">
    <button @click="search_open = !search_open" class="bg-green-mid text-white flex items-center justify-center absolute z-50 top-10 right-10 w-[30px] h-[30px] rounded-full outline-0" :class="{search_open: 'bg-white'}">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3" x-show="!search_open">
        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
      </svg>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-3" x-show="search_open" x-cloak>
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
      </svg>
      <span class="sr-only">Open search</span>
    </button>
    <form action="#">
      <div class="border-b-white border-b-4 flex space-x-5 pb-3 w-full">
        <label for="header-search" class="sr-only">How can we help?</label>
        <input type="text" name="header-search" id="header-search" placeholder="How can we help?" class="form-text text-white text-3xl bg-transparent placeholder:text-white border-none focus:ring-transparent ring-transparent w-full">
        <button type="submit" class="w-8 ml-10">
          <img src="/assets/images/icons/search-icon.svg" alt="" width="30" height="30" class="size-8"><span class="sr-only">Search</span>
        </button>
      </div>
    </form>
  </div>
</div>
