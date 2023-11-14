@extends('layouts.default')
@section('content')

    <main class="container max-w-5xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
        <div class="w-full">

            <div class="w-full flex flex-wrap my-2">
                <span class="w-1/2 pb-2 text-lg font-semibold">Roles</span>
                <span class="w-1/2">
                    <button class="border-2 px-2 bg-gray-200 float-right rounded-lg border-gray-900">Create role</button>
                </span>
            </div>

            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Permission List
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900  dark:text-white">
                                {{$row->name}}
                            </td>
                            <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">

                                <span class="flex w-96 flex-wrap">
                                    @foreach($row->permissions as $permission)
                                    <span class="m-1 p-2 border-1 bg-green-600 rounded-lg">{{$permission->name}}</span>
                                    @endforeach
                                </span>
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex">
                                    <span><a href="">Edit</a></span>
                                    <span class="ml-2"><a href="">Delete</a></span>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


        </div>

    </main>

@stop
