<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-hidden overflow-x-auto p-6 bg-white border-b border-gray-200">
                    <div class="min-w-full align-middle">
                        <div class="table min-w-full divide-y divide-gray-200 border">
                            <div class="table-header-group">
                                <div class="table-row px-6 py-3 bg-gray-50 text-center">
                                    <div class="table-cell text-lg leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('Notification Type') }}</div>
                                    <div class="table-cell text-lg leading-4 font-medium text-gray-500 uppercase tracking-wider">{{ __('Created At') }}</div>
                                </div>
                            </div>
                            <div class="table-row-group bg-white divide-y divide-gray-200 divide-solid">
                                @foreach($sentNotifications as $sentNotification)
                                <div class="table-row bg-white">
                                    <div class="table-cell px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">{{ $sentNotification->notification_type }}</div>
                                    <div class="table-cell px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-900">{{ $sentNotification->created_at->format('Y-m-d H:i:s') }}</div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
