<x-layout>

  @include ("./post-header")

  @if ($posts->count())
    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
      <x-posts-grid :posts="$posts" />
    </main>
  @else
    <p class="text-center">No posts yet.</p>
  @endif

</x-layout>
