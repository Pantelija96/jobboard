<x-layout>
    <x-breadcrumbs class="mb-4" :links="['My applications' => '#']" />

    @forelse( $applications as $application)
        <x-job-card :job="$application->job" >
            <div class="flex items-center justify-between text-xs text-slate-500">
                <div>
                    <div>
                        Applied {{ $application->created_at->diffForHumans() }}
                    </div>
                    <div>
                        Your asking salary: ${{ number_format($application->expected_salary) }}
                    </div>
                    <dvi>
                        Average asking salary: ${{ number_format($application->job->job_applications_avg_expected_salary) }}
                    </dvi>
                    <div>
                        Number of applicant: {{ $application->job->job_applications_count - 1 }}
                    </div>
                </div>
                <div>
                    <form method="POST" action="{{route('my-job-applications.destroy', $application)}}">
                        @csrf
                        @method("DELETE")
                        <x-button>Cancel</x-button>
                    </form>
                </div>
            </div>
        </x-job-card>
    @empty
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center font-medium">
                No job applications yet
            </div>
            <div class="text-center">
                Go find some <a href="{{ route('jobs.index') }}" class="text-indigo-500 hover:underline">here</a>
            </div>
        </div>
    @endforelse
</x-layout>
