<x-layout>

    @foreach ($posts as $post)

        <article class="py-4">

            <a class="text-sky-700" href="/posts/{{ $post->id }}">
                <h1 class="font-bold py-2 text-lg">{{ $post->title }}</h1>
            </a>

            <div>
                {{ $post->excerpt }}
            </div>

        </article>

    @endforeach

</x-layout>
