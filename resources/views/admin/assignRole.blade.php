@extends('layouts.default')
@section('content')

{{-- @if($errors->any())
    @foreach($errors->all() as $error)
    <span>{{$error}}</span>
    @endforeach
@endif --}}

    <main class="container max-w-3xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/admin/assign-role/{{$user->id}}" method="POST">
              @csrf

              <!-- First Name -->
              <div>
                <label
                  for="first_name"
                  class="block text-sm font-medium leading-6 text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500"
                  >Name</label
                >
                <div class="mt-2">
                    <span class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6">
                        {{$user->firstName . ' ' . $user->lastName}}
                    </span>
                </div>
              </div>
              <div>
                <label
                  for="first_name"
                  class="block text-sm font-medium leading-6 text-gray-900"
                  >Role</label
                >
                <div class="mt-2">
                    <span class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6">
                        {{$user->roles[0]->name}}
                    </span>
                </div>
              </div>
              <div class="pt-1">
                <label
                  for="first_name"
                  class="block text-sm font-medium leading-6 text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500"
                  >Select new role</label
                >
                <div class="w-full flex items-center gap-x-10 gap-y-3 flex-wrap">
                    <div class="custom-select w-full">
                        <select name="role" class="w-full py-2">
                            @foreach($roles as $role)
                            <option value="{{$role->name}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


              <div>
                <button
                  type="submit"
                  class="flex w-full justify-center rounded-md bg-black px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-black focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                  Save
                </button>
              </div>
            </form>

    </main>

@stop
