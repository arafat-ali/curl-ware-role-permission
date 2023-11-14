@extends('layouts.default')
@section('content')

    <main class="container max-w-3xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
        <div class="w-full">

            <h3 class="mx-5 pb-2 border-b text-lg font-semibold">Access List</h3>

            <div class="px-5 pt-2">
                <h3 class="text-md font-semibold pb-2 pt-1">Users</h3>
                <div class="w-full flex items-center gap-x-10 gap-y-3 flex-wrap">
                    <div class="flex items-center">
                        <input id="" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50">
                        <label for="" class="ml-2 text-sm text-gray-900 dark:text-gray-300">View All Employee</label>
                    </div>
                    <div class="flex items-center">
                        <input id="" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50">
                        <label for="" class="ml-2 text-sm text-gray-900 dark:text-gray-300">View Employee</label>
                    </div>
                    <div class="flex items-center">
                        <input id="" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50">
                        <label for="" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Add Employee</label>
                    </div>
                    <div class="flex items-center">
                        <input id="" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50">
                        <label for="" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Update Employee</label>
                    </div>
                    <div class="flex items-center">
                        <input id="" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50">
                        <label for="" class="ml-2 text-sm text-gray-900 dark:text-gray-300">Delete Employee</label>
                    </div>
                    <div class="flex items-center">
                        <input id="" type="checkbox" value="" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50">
                        <label for="" class="ml-2 text-sm text-gray-900 dark:text-gray-300">View Subourdinates</label>
                    </div>
                </div>
            </div>
        </div>

    </main>

@stop

