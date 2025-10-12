<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Create' => '#']" class="mb-4" />

    <x-card class="mb-8">
        <form action="{{ route('my-jobs.store') }}" method="POST">
            @csrf

            <div class="grid mb-4 grid-cols-2 gap-4">
                <div>
                    <x-label for="title" :required="true">Job Title</x-label>
                    <x-text-input name="title" />
                </div>

                <div>
                    <x-label for="location" :required="true">Job Location</x-label>
                    <x-text-input name="location" />
                </div>

                <div class="col-span-2">
                    <x-label for="salary" :required="true">Job Salary</x-label>
                    <x-text-input name="salary" type="number" />
                </div>

                <div class="col-span-2">
                    <x-label for="description" :required="true">Job Description</x-label>
                    <x-text-input name="description" type="textarea" />
                </div>

                <div>
                    <x-label for="experience" :required="true">Job Experience</x-label>
                    <x-radio-group name="experience" :options="
                        array_combine(array_map('ucfirst', \App\Models\Job::$experience), \App\Models\Job::$experience)
                    " :allOption="false" :value="old('experience')"/>
                </div>

                <div>
                    <x-label for="category" :required="true">Job Category</x-label>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" :allOption="false" :value="old('category')" />
                </div>

                <div class="col-span-2">
                    <x-button class="w-full"> Create</x-button>
                </div>
            </div>
        </form>
    </x-card>
</x-layout>
