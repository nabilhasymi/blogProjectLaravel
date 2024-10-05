<x-Layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <article>
        <h3 class="font-bold">{{ $detail['title'] }}</h3>
        <div class="text-slate-700"><a href="">{{ $detail->author->name }}</a> |
            {{ $detail->created_at->format('d F Y') }}</div>
        <p class="text-justify pt-1 pb-2  text-sm text-slate-600">{{ $detail['body'] }}</p>
        <a href="/blog"
            class="text-sky-500 hover:text-sky-600 active:text-sky-700 hover:underline transition-all">&laquo; Back
            to Blog</a>
    </article>

</x-Layout>
