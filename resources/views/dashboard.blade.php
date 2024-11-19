<x-app-layout>
    <x-slot name="header">

            <h1 class="text-4xl font-bold">{{ __('Dashboard') }}</h1>
    </x-slot>

        
    <div class="py-12">
        <div class="max-w-7xl mt-10 mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-xl rounded-lg">
                <!-- Hero Section -->
                <section class="text-center my-10">
                    <h1 class="text-4xl font-extrabold text-gray-800 dark:text-white">
                        Welcome Back, <span class="text-purple-600">{{ Auth::user()->name }}</span>!
                    </h1>
                    <div class="mt-6 space-x-4">
                        <button class="px-6 py-3 bg-purple-700 hover:bg-purple-800 text-white font-semibold rounded-md transition duration-300">
                            View Profile
                        </button>
                        <button class="px-6 py-3 bg-gray-300 hover:bg-gray-400 text-black font-semibold rounded-md transition duration-300">
                            Settings
                        </button>
                    </div>
                </section>

                <!-- Content Section -->
                <section class="grid grid-cols-3 gap-6 p-6">
                    <!-- Top boxes -->
                    <div class="col-span-2 grid grid-cols-2 gap-4">
                        <div class="bg-gray-200 dark:bg-gray-700 h-32 rounded-md shadow-md p-4">
                            <h3 class="font-semibold text-lg text-gray-800 ">Recent Activities</h3>
                            <p class="mt-2 text-sm text-gray-600 ">Track what you've been up to recently.</p>
                        </div>
                        <div class="bg-gray-200 dark:bg-gray-700 h-32 rounded-md shadow-md p-4">
                            <h3 class="font-semibold text-lg text-gray-800 ">Notifications</h3>
                            <p class="mt-2 text-sm text-gray-600 ">See the latest updates and alerts.</p>
                        </div>
                        <div class="bg-gray-200 dark:bg-gray-700 h-32 rounded-md shadow-md p-4">
                            <h3 class="font-semibold text-lg text-gray-800 ">Pending Tasks</h3>
                            <p class="mt-2 text-sm text-gray-600 ">You have 3 tasks to complete today.</p>
                        </div>
                        <div class="bg-gray-200 dark:bg-gray-700 h-32 rounded-md shadow-md p-4">
                            <h3 class="font-semibold text-lg text-gray-800 ">Messages</h3>
                            <p class="mt-2 text-sm text-gray-600 ">You have 5 new messages.</p>
                        </div>
                    </div>
                    <!-- Bottom boxes -->
                    <div class="col-span-1 grid grid-rows-2 gap-4">
                        <div class="bg-gray-200 dark:bg-gray-700 h-32 rounded-md shadow-md p-4">
                            <h3 class="font-semibold text-lg text-gray-800 ">Quick Links</h3>
                            <p class="mt-2 text-sm text-gray-600 ">Access your favorite tools quickly.</p>
                        </div>
                        <div class="bg-gray-200 dark:bg-gray-700 h-32 rounded-md shadow-md p-4">
                            <h3 class="font-semibold text-lg text-gray-800 ">Support</h3>
                            <p class="mt-2 text-sm text-gray-600 ">Need help? Get in touch with our team.</p>
                        </div>
                    </div>
                </section>

                <!-- Footer Section -->
                <section class="grid grid-cols-4 gap-4 mt-10 p-6">
                    <div class="bg-gray-300 dark:bg-gray-600 h-16 rounded-md shadow-md flex items-center justify-center">
                        <p class="text-gray-800  font-semibold">Overview</p>
                    </div>
                    <div class="bg-gray-300 dark:bg-gray-600 h-16 rounded-md shadow-md flex items-center justify-center">
                        <p class="text-gray-800  font-semibold">Reports</p>
                    </div>
                    <div class="bg-gray-300 dark:bg-gray-600 h-16 rounded-md shadow-md flex items-center justify-center">
                        <p class="text-gray-800  font-semibold">Analytics</p>
                    </div>
                    <div class="bg-gray-300 dark:bg-gray-600 h-16 rounded-md shadow-md flex items-center justify-center">
                        <p class="text-gray-800  font-semibold">Team</p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>