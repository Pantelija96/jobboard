<x-layout>
    <x-breadcrumbs class="mb-4" :links="['Jobs' => route('jobs.index')]" />

    <x-card class="mb-4 text-sm" x-data="">
        <form x-ref="filters" action="{{ route('jobs.index') }}" id="searchForm" method="GET">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div class="flex gap-2 justify-content items-center">
                    <div class="mb-1 font-semibold"> Search </div>
                    <x-text-input name="search" value="{{ request('search') }}" formRef="filters" placeholder="Search" />
                </div>
                <div class="flex space-x-2 justify-content items-center">
                    <div class="mb-1 font-semibold"> Salary </div>
                    <div class="flex gap-2 justify-content ">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" formRef="filters" placeholder="From" />
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" formRef="filters" placeholder="To" />
                    </div>
                </div>
                <div>
                    <div class="mb-1 font-semibold"> Experience </div>
                    <x-radio-group name="experience" :options="
                        array_combine(array_map('ucfirst', \App\Models\Job::$experience), \App\Models\Job::$experience)
                    " />
                </div>
                <div>
                    <div class="mb-1 font-semibold"> Category </div>
                    <x-radio-group name="category" :options="\App\Models\Job::$category" />
                </div>
            </div>
            <x-button class="w-full">
                Filter
            </x-button>
        </form>
    </x-card>

    @foreach($jobs as $job)
        <x-job-card :job="$job">
            <div class="mt-4">
                <x-link-button :href="route('jobs.show', $job)">
                    Show
                </x-link-button>
            </div>
        </x-job-card>
    @endforeach
</x-layout>
