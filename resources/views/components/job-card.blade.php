<x-card class="mb-4" test_id="{{$job->id}}">
    <div class="flex justify-between mb-4">
        <h2 class="text-lg font-medium"><a href="{{ route('jobs.show', $job) }}"> {{$job->title}} </a></h2>
        <span class="text-slate-500">${{ number_format($job->salary) }}</span>
    </div>

    <div class="mb-4 flex justify-between text-sm text-slate-500 items-center">
        <div class="flex space-x-5">
            <div>Company name</div>
            <div>{{ $job->location }}</div>
        </div>
        <div class="flex space-x-2 text-xs">
            <x-tag class="capitalize">
                {{ $job->experience }}
            </x-tag>
            <x-tag>
                {{ $job->category }}
            </x-tag>
        </div>
    </div>

    {{ $slot }}
</x-card>
