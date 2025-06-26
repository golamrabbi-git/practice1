<x-layout>
    <x-slot:heading> Create Job </x-slot:heading>
    <h1 class="text-3xl font-bold text-center text-emerald-800">Create a New Job</h1>

    <div class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg mt-6">
        <form action="/jobs" method="POST" class="space-y-4">
            @csrf <!-- Laravel's CSRF protection -->

            <!-- Job Name -->
            <div>
                <label for="Job Title" class="block text-sm font-medium text-gray-700">Job Title</label>
                <input type="text" id="title" name="title"
                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                       placeholder="Enter job Title" required>
                @error('title')
                <p class="text-sm text-semibold text-red-700">{{ $message }}</p>
                @enderror
            </div>

            <!-- Salary -->
            <div>
                <label for="salary" class="block text-sm font-medium text-gray-700">Salary</label>
                <input type="number" id="salary" name="salary"
                       class="mt-1 block w-full border-gray-300 rounded-lg shadow-sm focus:ring-emerald-500 focus:border-emerald-500"
                       placeholder="Enter salary" required>
                @error('salary')
                <p class="text-sm text-semibold text-red-700">{{ $message }}</p>
                @enderror
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit"
                        class="px-4 py-2 bg-emerald-800 text-white font-semibold rounded-lg shadow-md hover:bg-emerald-600">
                    Create Job
                </button>
            </div>
        </form>

{{--        @if($errors->any())--}}
{{--            @foreach($errors->all() as $error)--}}
{{--                <ul class="text-red-800">{{$error}}</ul>--}}
{{--            @endforeach--}}
{{--        @endif--}}
    </div>
</x-layout>
