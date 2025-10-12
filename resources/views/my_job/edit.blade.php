<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Edit - $job->title' => '#']" class="mb-4" />

    <x-card class="mb-8">
        <form action="{{ route('my-jobs.update', ['my_job' => $job]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="grid mb-4 grid-cols-2 gap-4">
                <div>
                    <x-label for="title" :required="true">Job Title</x-label>
                    <x-text-input name="title" :value="$job->title"/>
                </div>

                <div>
                    <x-label for="location" :required="true">Job Location</x-label>
                    <x-text-input name="location" :value="$job->location" />
                </div>

                <div class="col-span-2">
                    <x-label for="salary" :required="true">Job Salary</x-label>
                    <x-text-input name="salary" type="number" :value="$job->salary" />
                </div>

                <div class="col-span-2">
                    <x-label for="description" :required="true">Job Description</x-label>
                    <x-text-input name="description" type="textarea" :value="$job->description" />
                </div>

                <div>
                    <x-label for="experience" :required="true">Job Experience</x-label>
                    <x-radio-group name="experience" :options="
                        array_combine(array_map('ucfirst', \App\Models\Job::$experience), \App\Models\Job::$experience)
                    " :allOption="false" :value="$job->experience"/>
                </div>

                <div>
                    <x-label for="category" :required="true">Job Category</x-label>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" :allOption="false" :value="$job->category" />
                </div>

                <div class="col-span-2">
                    <x-button class="w-full"> Edit job</x-button>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>
