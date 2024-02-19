<x-main>
    <section class="mx-16 my-10">
        <div class="flex space-x-10 items-center">
            <img src="{{ asset('/storage/film/'. $film->image) }}" class="w-1/3 rounded-md" alt="">
            <div class="text-white space-y-4">
                <h1 class="font-bold text-xl">{{ $film->judul_film }}</h1>
                <h3 class="text-lg font-medium">Rp{{ $film->harga }}</h3>
                <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae eveniet nihil qui quos nam, provident atque consequuntur nisi necessitatibus voluptatum dolor aperiam nostrum ea maiores accusantium quod magni quo a neque ad eum? Beatae, sapiente a tenetur quod consequuntur doloremque odio odit esse, sed aperiam perferendis eum, inventore voluptatem labore?</p>
                <div class="flex space-x-6">
                    <div class="bg-green-700 text-white text-sm py-1 px-4 rounded-md">
                        {{ $film->date }}
                    </div>
                    <div class="bg-rose-700 text-white text-sm py-1 px-4 rounded-md">
                        {{ $film->time }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-main>