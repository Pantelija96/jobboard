<x-layout>
    <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4" />

    <div class="mb-8 text-right">
        <x-link-button href="{{ route('my-jobs.create') }}" class="bg-white"> Create new job</x-link-button>
    </div>

    @forelse($jobs as $job)
        <x-job-card :job="$job">
            <div class="text-xs text-slate-500">
                @forelse($job->jobApplications as $application)
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <div> {{ $application->user->name }}</div>
                            <div> Applied {{ $application->created_at->diffForHumans() }}</div>
                            <div> Download CV</div>
                        </div>
                        <div>
                            Expected salary ${{ number_format($application->expected_salary) }}
                        </div>
                    </div>
                @empty
                    <div class="mb-4">No applications yet!</div>
                @endforelse

                <div class="flex space-x-2">
                    <x-link-button href="{{ route('my-jobs.edit', $job) }}">Edit</x-link-button>

                    <form action="{{ route('my-jobs.destroy', $job) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <x-button>Delete</x-button>
                    </form>
                </div>

            </div>
        </x-job-card>
    @empty
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center text-medium">
                No jobs yet!
            </div>
            <div class="text-center text-medium">
                <x-link-button href="{{ route('my-jobs.create') }}" class="bg-white"> Add new job!</x-link-button>
            </div>
        </div>
    @endforelse

</x-layout>
