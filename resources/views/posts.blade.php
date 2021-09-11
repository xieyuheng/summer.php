<x-layout>

  @foreach ($posts as $post)

    <article class="py-4">

      <h1 class="font-bold py-2 text-lg">
        <a class="text-sky-700" href="/posts/{{ $post->slug }}">
          {{ $post->title }}
        </a>
      </h1>

      <p class="py-2">
        <a class="text-sky-700" href="/categories/{{ $post->category->slug }}">
          {{ $post->category->name }}
        </a>
      </p>

      <div>
        {{ $post->excerpt }}
      </div>

    </article>

  @endforeach

</x-layout>
