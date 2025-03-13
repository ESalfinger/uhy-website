<div class="insights-filters bg-green-sage bg-opacity-50 py-6">
  <div class="container mx-auto">
    <form action="#">
      <div class="grid lg:grid-cols-4 gap-5 mb-5">
        <div class="form-field">
          <label for="insight-publication" class="sr-only">Filter by insight or publication</label>
          <select name="insight-publication" id="insight-publication" class="form-select w-full rounded uppercase text-sm border-none text-black-light">
            <option selected disabled>Filter by insight or publication</option>
            <option value="insight">Insight</option>
            <option value="publication">Publication</option>
          </select>
        </div>
        <div class="form-field">
          <label for="type" class="sr-only">Filter by type</label>
          <select name="type" id="type" disabled class="form-select w-full rounded uppercase text-sm border-none text-black-light">
            <option disabled selected>Filter by type</option>
          </select>
        </div>
        <div class="form-field">
          <label for="sector" class="sr-only">Filter by sector</label>
          <select name="sector" id="sector" class="form-select w-full rounded uppercase text-sm border-none text-black-light">
            <option disabled selected>Filter by sector</option>
          </select>
        </div>
        <div class="form-field">
          <label for="service" class="sr-only">Filter by service</label>
          <select name="service" id="service" class="form-select w-full rounded uppercase text-sm border-none text-black-light">
            <option disabled selected>Filter by service</option>
          </select>
        </div>
      </div>
      <div class="grid gap-5 lg:grid-cols-4">
        <div class="form-field md:basis-1/2 lg:col-span-2">
          <label for="keyword" class="sr-only">Keyword search</label>
          <input type="text" id="keyword" name="keyword" placeholder="Keyword search" class="form-input w-full rounded uppercase text-sm border-none text-black-light">
        </div>
        <div class="form-field lg:col-start-4">
          <button type="submit" class="ml-auto rounded border-none bg-green-mid text-white px-5 py-3 uppercase flex items-center hover:bg-green-dark transition ease-out duration-300">
            <span>Search</span>
            <img src="/assets/images/icons/search-icon.svg" alt="" width="11" height="11" class="size-3 ml-10"></button>
        </div>
      </div>
    </form>
  </div>
</div>
