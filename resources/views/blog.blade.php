<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    @foreach ($posts as $post)
        <article class="border-b border-gray-300 p-4 max-w-screen-sm mb-4">
            <a href="/blog/{{ $post['slug'] }}" class="hover:underline">
                <h3 class="font-bold mb-2">{{ $post['title'] }}</h3>
            </a>
            <div class="text-slate-500 text-sm">
                <a href="/author/{{ $post->author->id }}" class="hover:underline">{{ $post->author->name }}</a>
                <span> | {{ $post->created_at->format('d M Y') }} | </span>
                <span> {{ $post->created_at->diffForHumans() }} </span>
            </div>
            <p class="text-justify pt-1 pb-2  text-sm text-slate-700">{{ Str::limit($post['body'], 150) }}</p>
            <a href="/blog/{{ $post['slug'] }}"
                class="text-sky-500 hover:text-sky-600 active:text-sky-700 hover:underline transition-all">Read more
                &raquo;</a>
        </article>
    @endforeach
</x-Layout>
