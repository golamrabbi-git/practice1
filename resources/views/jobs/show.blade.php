<x-layout>
    <x-slot:heading>
        <h1>Job Listings</h1>
    </x-slot:heading>
    <div class="border-emerald-950 bg-gray-600 text-white p-2 rounded-lg">
        Title: <span class="font-bold hover:text-emerald-600">{{$job['title']}}</span>
        <br>
        Salary:<span>{{$job['salary']}}</span>
        <ul>
            <li class="font-bold text-emerald-600">Employees:</li>
            @foreach($job->employees as $emp)
                <li class="">
                    {{ $emp->name }} ({{ $emp->email }})
                </li>
            @endforeach
        </ul>

    </div>
</x-layout>
