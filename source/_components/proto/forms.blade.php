<x-proto.section title="Forms">
  <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 items-start">
    <div class="grid grid-cols-1 gap-6">
      <label class="block">
        <span class="text-gray-700">Input (text)</span>
        <input type="text" class="mt-1 block w-full" placeholder="john@example.com">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (email)</span>
        <input type="email" class="mt-1 block w-full" placeholder="john@example.com">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (email, multiple)</span>
        <input type="email" multiple="" class="mt-1 block w-full" placeholder="john@example.com">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (password)</span>
        <input type="password" class="mt-1 block w-full" placeholder="john@example.com">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (date)</span>
        <input type="date" class="mt-1 block w-full">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (datetime-local)</span>
        <input type="datetime-local" class="mt-1 block w-full">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (month)</span>
        <input type="month" class="mt-1 block w-full">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (number)</span>
        <input type="number" class="mt-1 block w-full">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (search)</span>
        <input type="search" class="mt-1 block w-full">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (time)</span>
        <input type="time" class="mt-1 block w-full">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (week)</span>
        <input type="week" class="mt-1 block w-full">
      </label>
    </div>
    <div class="grid grid-cols-1 gap-6">
      <label class="block">
        <span class="text-gray-700">Input (tel)</span>
        <input type="tel" multiple="" class="mt-1 block w-full" placeholder="john@example.com">
      </label>
      <label class="block">
        <span class="text-gray-700">Input (url)</span>
        <input type="url" multiple="" class="mt-1 block w-full" placeholder="john@example.com">
      </label>
      <label class="block">
        <span class="text-gray-700">Select</span>
        <select class="block w-full mt-1">
          <option>Option 1</option>
          <option>Option 2</option>
        </select>
      </label>
      <label class="block">
        <span class="text-gray-700">Select (multiple)</span>
        <select class="block w-full mt-1" multiple="">
          <option>Option 1</option>
          <option>Option 2</option>
          <option>Option 3</option>
          <option>Option 4</option>
          <option>Option 5</option>
        </select>
      </label>
      <label class="block">
        <span class="text-gray-700">Textarea</span>
        <textarea class="mt-1 block w-full h-24" rows="3" placeholder="Enter some long form content."></textarea>
      </label>
      <div class="block">
        <span class="text-gray-700">Checkboxes</span>
        <div class="mt-2">
          <div>
            <label class="inline-flex items-center">
              <input type="checkbox" checked="">
              <span class="ml-2">Option 1</span>
            </label>
          </div>
          <div>
            <label class="inline-flex items-center">
              <input type="checkbox">
              <span class="ml-2">Option 2</span>
            </label>
          </div>
          <div>
            <label class="inline-flex items-center">
              <input type="checkbox">
              <span class="ml-2">Option 3</span>
            </label>
          </div>
        </div>
      </div>
      <div class="block">
        <span class="text-gray-700">Radio Buttons</span>
        <div class="mt-2">
          <div>
            <label class="inline-flex items-center">
              <input type="radio" checked="" name="radio-direct" value="1">
              <span class="ml-2">Option 1</span>
            </label>
          </div>
          <div>
            <label class="inline-flex items-center">
              <input type="radio" name="radio-direct" value="2">
              <span class="ml-2">Option 2</span>
            </label>
          </div>
          <div>
            <label class="inline-flex items-center">
              <input type="radio" name="radio-direct" value="3">
              <span class="ml-2">Option 3</span>
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>

</x-proto.section>
