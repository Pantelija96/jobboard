<x-layout>
    <x-breadcrumbs class="mb-4"
       :links="['Jobs' => route('jobs.index'), $job->title => route('jobs.show', $job), 'Apply' => '#']">
    </x-breadcrumbs>

    <x-job-card :$job />

    <x-card class="mb-4">
        <h2 class="mb-4 text-lg font-medium">
            Applying for: {{ $job->title }}
        </h2>

        <form action="{{ route('job.application.store', $job) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <x-label for="expected_salary" :required="true">Expected salary</x-label>
                <x-text-input type="number" name="expected_salary"/>
            </div>

            <div class="mb-4">
                <x-label for="cv" :required="true">CV (pdf):</x-label>
                <x-text-input type="file" name="cv"/>
            </div>

            <x-button class="w-full">Apply</x-button>
        </form>
    </x-card>
</x-layout>
