<x-layout>
    <x-slot:heading> Jobs </x-slot:heading>
    <h1>Jobs Page</h1>
<ul>
    @foreach($jobs as $job)
        <li>
            <a href="/jobs/{{$job['id']}}">
                <strong class="hover:text-blue-700">Job: {{ $job['title'] }}</strong>:<p>Salary: {{ $job['salary'] }}</p>
            </a>
        </li>
    @endforeach
</ul>
</x-layout>
