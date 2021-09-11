<x-layout>

  <article class="py-4">

    <h1 class="font-bold py-2 text-lg">{{ $post->title }}</h1>

    <p class="py-2">
      <a class="text-sky-700" href="/categories/{{ $post->category->slug }}">
        {{ $post->category->name }}
      </a>
    </p>


    {!! $post->body !!}

  </article>

  <a class="text-sky-700 font-bold" href="/">Go Back</a>

</x-layout>
