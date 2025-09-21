{{--<a  {{$attributes--}}
{{--        ->class(['rounded-md border border-slate-300 px-2 py-1 text-center font-semibold text-black shadow-sm'])--}}
{{--        ->merge(['href' => ''])}}>--}}
    <a href="{{ $href }}" {{$attributes->class(['rounded-md border border-slate-300 px-2 py-1 text-center font-semibold text-black shadow-sm'])}} >
    {{ $slot }}
</a>
