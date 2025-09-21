<article
    {{ $attributes
        ->class(['rounded-md border border-slate-300 px-4 py-2 bg-white shadow-sm'])
        ->merge(['test_id' => '']) }}
>
    {{ $slot }}
</article>
