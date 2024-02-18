  <!-- Main modal -->
  <div id="edit-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-stone-950 rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-white dark:text-white">
                    Update Product Film
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="edit-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" action="{{ route('film.update', $film->id_film) }}" class="p-4 md:p-5" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="grid gap-4 mb-4 grid-cols-2">
                    <input type="file" name="image" id="image" class="py-0" placeholder="Type film name" required>
                    <div class="col-span-2">
                        <label for="judul_film" class="block mb-2 text-sm font-medium text-white">Name</label>
                        <input type="text" name="judul_film" id="judul_film" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type film name" required="" value="{{ old('judul_film', $film->judul_film) }}">
                    </div>
                    <div class="col-span-2">
                        <label for="harga" class="block mb-2 text-sm font-medium text-white">Price</label>
                        <input type="number" name="harga" id="harga" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="" value="{{ old('harga', $film->harga) }}">
                    </div>
                    <div class="col-span-2">
                        <label for="time" class="block mb-2 text-sm font-medium text-white">Time</label>
                        <select name="time" id="time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select time</option>
                            <option value="17">17.00</option>
                            <option value="20">20.00</option>
                            <option value="23">23.00</option>
                        </select>
                    </div>
                    <div class="col-span-2">
                        <label for="date" class="block mb-2 text-sm font-medium text-white">Date</label>
                        <input type="date" name="date" id="date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="$2999" required="" value="{{ old('date', $film->date) }}">
                    </div>
                </div>
                <button type="submit" class="text-white bg-red-700 font-medium rounded-lg text-sm px-5 py-2 text-center">  
                    Save your change
                </button>
            </form>
        </div>
    </div>
</div>