<x-layout>
    <x-slot:heading>
        <h1 class="text-2xl font-bold text-gray-900">Career Opportunities</h1>
    </x-slot:heading>

    <div class="max-w-4xl mx-auto space-y-6">
        <!-- Page Header -->
        <div class="text-center">
            <h2 class="text-3xl font-bold text-emerald-800 mb-2">Current Job Openings</h2>
            <p class="text-gray-600">Browse our available positions and find your perfect fit</p>
        </div>

        <!-- Jobs List -->
        <div class="space-y-4">
            @foreach($jobs as $job)
                <a href="/jobs/{{$job->id}}" class="block group">
                    <div class="border border-gray-200 rounded-lg p-3 hover:border-emerald-300 hover:bg-emerald-50 transition-all duration-200 shadow-sm group-hover:shadow-md">
                        <div class="flex justify-between items-start">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-800 group-hover:text-emerald-700 mb-1">
                                    {{ $job->title }}
                                </h3>
                                <div class="flex items-center text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 text-emerald-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"/>
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="font-medium">${{ number_format($job->salary) }}</span>
                                    <span class="text-sm ml-1">per year</span>
                                </div>
                            </div>
                            <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-emerald-100 text-emerald-800">
                                View Details
                            </span>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-8">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
