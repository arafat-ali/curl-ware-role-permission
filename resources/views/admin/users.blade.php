@extends('layouts.default')
@section('content')

    <main class="container max-w-5xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
        <div class="w-full">

            <h3 class="mx-5 pb-2 border-b text-lg font-semibold">User List</h3>
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Access List
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{$row->firstName . ' ' . $row->lastName}}
                            </th>
                            <td class="px-6 py-4">
                                {{$row->email}}
                            </td>
                            <td class="px-6 py-4">
                                {{$row->roles[0]->name}}
                            </td>
                            <td class="px-6 py-4">
                                <a href="/admin/assign-role/{{$row->id}}">Edit Role</a>
                            </td>
                            <td class="px-6 py-4">
                                Delete
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </main>

@stop
