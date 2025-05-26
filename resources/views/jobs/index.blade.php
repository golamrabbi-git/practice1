<x-layout>
    <x-slot:heading> Jobs </x-slot:heading>
    <h1 class="text-3xl font-bold text-center text-emerald-800">Jobs Page</h1>
    <ul>
        @foreach($jobs as $job)
            <li class="border border-emerald-800 p-2 mb-2 rounded-lg">
                <a href="/jobs/{{$job->id}}">
                    <strong class="hover:text-blue-700">Job: {{ $job->title }}</strong>:
                    <p>Salary: {{ $job->salary }}</p>
                </a>

            </li>
        @endforeach

{{--        <div>--}}
{{--            {{ $jobs->links() }}--}}
{{--        </div>--}}

    </ul>
</x-layout>
