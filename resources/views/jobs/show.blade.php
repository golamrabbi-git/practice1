<x-layout>
    <x-slot:heading>
        <h1 class="text-3xl font-bold text-gray-900">Job Details</h1>
    </x-slot:heading>

    <div class="max-w-3xl mx-auto space-y-6">
        <!-- Job Card -->
        <div class="bg-gradient-to-r from-gray-700 to-gray-800 text-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-6 md:p-8">
                <!-- Job Title -->
                <h2 class="text-2xl font-bold mb-1">
                    <span class="text-emerald-400">{{ $job->title }}</span>
                </h2>

                <!-- Salary -->
                <div class="flex items-center text-lg mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-emerald-300" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                    </svg>
                    <span class="font-medium">${{ number_format($job->salary) }}</span>
                    <span class="text-gray-300 ml-2">per year</span>
                </div>

                <!-- Employees Section -->
                <div class="mt-8">
                    <h3 class="text-lg font-semibold mb-3 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"/>
                        </svg>
                        Team Members
                    </h3>

                    <ul class="divide-y divide-gray-600">
                        @forelse($job->employees as $emp)
                            <li class="py-3 flex items-center justify-between">
                                <div>
                                    <p class="font-medium">{{ $emp->name }}</p>
                                    <p class="text-sm text-gray-300">{{ $emp->email }}</p>
                                </div>
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-emerald-800 text-emerald-100">
                                    Employee
                                </span>
                            </li>
                        @empty
                            <li class="py-3 text-gray-400">
                                No employees assigned to this position
                            </li>
                        @endforelse
                    </ul>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex space-x-3">
                    @can('edit-job',$job)
                        <a href="/jobs/{{ $job->id }}/edit"
                           class="px-4 py-2 inline-flex items-center border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                            Edit Job
                        </a>
                    @endcan

                    <a href="/jobs"
                       class="px-4 py-2 inline-flex items-center border border-gray-300 text-sm font-medium rounded-md shadow-sm text-white bg-transparent hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-colors duration-150">
                        Back to Listings
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
