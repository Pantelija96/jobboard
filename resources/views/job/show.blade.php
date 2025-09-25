<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index'), $job->title => '#']">
    </x-breadcrumbs>
    <x-job-card :$job>
        <p class="text-sm text-slate-500">
            {!! nl2br(e($job->description)) !!}
        </p>
    </x-job-card>


    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">
            More {{ $job->employer->company_name }} jobs
        </h2>

        <didv  class="text-sm text-slate-500">
            @foreach($job->employer->jobs as $otherJob)
                @if($otherJob->id !== $job->id)
                    <div class="mb-4 flex justify-between">
                        <div>
                            <div class="text-slate-700">
                                <a href="{{ route('jobs.show', $otherJob) }}">
                                    {{ $otherJob->title }}
                                </a>
                            </div>
                            <div class="text-xs">
                                {{ $otherJob->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="text-xs">
                            ${{ $otherJob->salary }}
                        </div>
                    </div>
                @endif
            @endforeach
        </didv>
    </x-card>
</x-layout>
