<x-layout>
    <x-slot:heading>
        <h1>Job Listing</h1>
    </x-slot:heading>
    Title: <span class="text-xl hover:text-blue-700">{{$job['title']}}</span>
    <br>
    Salary:<span>{{$job['salary']}}</span>
</x-layout>
