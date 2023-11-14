@extends('layouts.default')
@section('content')

{{-- @if($errors->any())
    @foreach($errors->all() as $error)
    <span>{{$error}}</span>
    @endforeach
@endif --}}

    <main class="container max-w-3xl mx-auto space-y-8 mt-8 px-2 md:px-0 min-h-screen">
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/admin/create-role" method="POST">
              @csrf

              <!-- First Name -->
              <div>
                <label
                  for="first_name"
                  class="block text-sm font-medium leading-6 text-gray-900 after:content-['*'] after:ml-0.5 after:text-red-500"
                  >Name</label
                >
                <div class="mt-2">
                  <input
                    id="name"
                    name="name"
                    type="text"
                    autocomplete="name"
                    placeholder="Employee"
                    required
                    class="block w-full rounded-md border-0 p-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm sm:leading-6"
                    value="{{old('name')}}"
                    />
                </div>
              </div>
              <div class="pt-1">
                <h3 class="text-md font-semibold pb-2 pt-1">Permissions</h3>
                <div class="w-full flex items-center gap-x-10 gap-y-3 flex-wrap">
                    @foreach($data as $permission)
                    <div class="flex items-center">
                        <input id="" type="checkbox" class="w-4 h-4 text-blue-500 bg-gray-100 border-gray-50" name="permission[]" value="{{$permission->name}}">
                        <label for="" class="ml-2 text-sm text-gray-900 ">{{$permission->name}}</label>
                    </div>
                    @endforeach
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
