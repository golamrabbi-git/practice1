<x-layout>
    <x-slot:heading>Edit Job Listing</x-slot:heading>

    <div class="max-w-2xl mx-auto space-y-6">
        <!-- Page Header -->
        <div class="text-center space-y-2">
            <h1 class="text-3xl font-bold text-gray-900">Edit Job Listing</h1>
            <p class="text-lg text-gray-600">Update the details for <span class="font-semibold text-emerald-700">{{ $job->title }}</span></p>
        </div>

        <!-- Form Card -->
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-6 sm:p-8">
                <form action="/jobs/{{ $job->id }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PATCH')

                    <!-- Job Title Field -->
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Job Title</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="text"
                                   id="title"
                                   name="title"
                                   class="block w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 ease-in-out"
                                   placeholder="Senior Software Engineer"
                                   value="{{ old('title', $job->title) }}"
                                   required>
                        </div>
                        @error('title')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Salary Field -->
                    <div>
                        <label for="salary" class="block text-sm font-medium text-gray-700 mb-1">Annual Salary</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">$</span>
                            </div>
                            <input type="number"
                                   id="salary"
                                   name="salary"
                                   class="block w-full pl-7 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition duration-150 ease-in-out"
                                   placeholder="75,000"
                                   value="{{ old('salary', $job->salary) }}"
                                   required>
                        </div>
                        @error('salary')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Form Actions -->
                    <div class="flex items-center justify-end space-x-4 pt-6">
                        <button form="delete-form" class="text-red-500 text-sm border px-6 py-2 rounded-md hover:bg-red-500 hover:text-white transition duration-150 ease-in-out">Delete</button>
                        <a href="/jobs/{{ $job->id }}"
                           class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 font-medium hover:bg-gray-50 transition duration-150 ease-in-out">
                            Cancel
                        </a>
                        <button type="submit"
                                class="px-6 py-2 bg-emerald-700 text-white font-medium rounded-lg shadow-sm hover:bg-emerald-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition duration-150 ease-in-out">
                            Update Job
                        </button>
                    </div>
                </form>

                <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
</x-layout>
