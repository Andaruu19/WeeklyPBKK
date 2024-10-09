<x-layout>
  <x-slot:title>{{ $title }}</x-slot>

  {{-- <article class="py-4 max-w-screen-md border-b border-gray-400">
    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title'] }}</h2>
    <div class="text-base text-gray-500">
      <a href="/authors/{{ $post->author->id }}">{{ $post->author->name }}</a> | 1 Januari 2024
    </div>
    <p class="my-5 font-light">{{($post['body']) }}</p>
    <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to posts </a>

  </article> --}}

<main class="pt-8 pb-16 lg:pt-16 lg:pb-24 bg-white dark:bg-gray-900 antialiased">
  <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
      <article class="mx-auto w-full max-w-4xl format format-sm sm:format-base lg:format-lg format-blue dark:format-invert">
          <header class="mb-4 lg:mb-6 not-format">
            <a href="/posts" class="font-medium text-m text-blue-600 hover:underline">&laquo; Back to All Posts</a>
              <address class="flex items-center mb-6 my-6 not-italic">
                  <div class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white">
                      <img class="mr-4 w-16 h-16 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-2.jpg" alt="{{ $post->author->name }}">
                      <div>
                          <a href="#" rel="author" class="text-xl font-bold text-gray-900 dark:text-white">{{ $post->author->name }}</a>
                          <p class="text-base text-gray-500 dark:text-gray-400">{{ $post->created_at->format('j F Y') }}</p>
                          <a href="/posts?category={{ $post->category->slug }}" class="bg-{{ $post->category->color }}-100 my-2 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            {{ $post->category->slug }}
                          </a>
                      </div>
                  </div>
              </address>
              <h1 class="mb-4 text-3xl font-extrabold leading-tight text-gray-900 lg:mb-6 lg:text-4xl dark:text-white">{{ $post->title }}</h1>
          </header>
          <p>{{ $post->body }}</p>
      </article>
  </div>
</main>        
</x-layout>