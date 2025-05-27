<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-lg font-medium mb-4">Your Subscription Status</h2>
                    
                    @if (auth()->user()->subscribed('default'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            <p>You are currently subscribed!</p>
                            <p class="mt-2">
                                <a href="{{ route('billing') }}" class="text-sm underline">Manage Subscription</a>
                            </p>
                        </div>
                    @else
                        <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded">
                            <p>You are not currently subscribed.</p>
                            <p class="mt-2">
                                <a href="{{ route('subscribe') }}" class="text-sm underline">Subscribe Now</a>
                            </p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>