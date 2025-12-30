<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dasboard SSO Server</title>
</head>
<body>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="bg-gradient-to-r from-blue-500 to-indigo-500 p-6 rounded-lg shadow-md">
                        <h3 class="text-2xl font-semibold text-white">Welcome to the Dashboard!</h3>
                        <p class="mt-4 text-lg text-white">You're logged in and ready to manage your system.</p>
                    </div>

                    <div class="mt-6">
                        <h4 class="text-xl font-medium text-gray-700 dark:text-gray-300">Quick Links:</h4>
                        <ul class="list-disc pl-6 mt-2 text-gray-600 dark:text-gray-300">
                            <li><a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">Manage Profile</a></li>
                            <li><a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">View Analytics</a></li>
                            <li><a href="#" class="text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-600">Manage Settings</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
    
</body>
</html>