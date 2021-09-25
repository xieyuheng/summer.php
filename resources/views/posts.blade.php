<x-layout>

  @include ("./post-header")

  <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    <x-posts-grid :posts="$posts" />
  </main>

</x-layout>
