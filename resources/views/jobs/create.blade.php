<x-layout>
    <x-slot:heading> Create Job </x-slot:heading>
    <h1 class="text-3xl font-bold text-center text-emerald-800">Create a New Job</h1>

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
        <form action="/jobs" method="POST" class="space-y-4">
            @csrf <!-- Laravel's CSRF protection -->

            <!-- Job Name -->
            <div>
                <x-form-label for="Job Title">Job Title</x-form-label>
                <x-form-input id="title" name="title" type="text" placeholder="Enter Job Title" required  />
                <x-form-error name="title"/>
            </div>

            <!-- Salary -->
            <div>
                <x-form-label for="Salary">Salary</x-form-label>
                <x-form-input id="salary" name="salary" type="text" placeholder="Enter Job Salary" required  />
                <x-form-error name="salary"/>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <x-form-btn type="submit">Save</x-form-btn>
            </div>

        </form>

{{--        @if($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <ul class="text-red-800">{{$error}}</ul>--}}
{{--            @endforeach--}}
{{--        @endif--}}
    </div>
</x-layout>
