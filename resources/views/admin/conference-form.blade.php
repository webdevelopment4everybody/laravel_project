@extends('layouts.app')
@section('content')
    <div class="mx-auto text-black container relative">
        <a class="right-0 absolute text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
           href="{{route('administrator.conferences')}}">{{__('content.conferences.back')}}</a>
        <h1 class="flex items-center text-5xl font-extrabold mt-[50px] mb-[50px] justify-center dark:text-[#2c384d]">
            {{ empty($data) ? __('content.admin.add_conference') : __('content.admin.edit_conference')}}
        </h1>
        <form class="max-w-md mx-auto" method="post" action="{{route('administrator.conference.create')}}">
            @csrf
            <div class="grid md:grid-cols-2 md:gap-6">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="conference_name" id="conference_name"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('conference_name') is-invalid @enderror"
                           placeholder=" " required value="{{$data['name'] ?? ''}}"/>
                    <label for="conference_name"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{__('content.admin.conference_name')}}
                    </label>
                    @error('conference_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="conference_description" id="conference_description"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer  @error('conference_description') is-invalid @enderror"
                           placeholder=" " required value="{{$data['description'] ?? ''}}"/>
                    <label for="conference_description"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{__('content.admin.conference_description')}}
                    </label>
                    @error('conference_description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <input type="conference_lectors" name="conference_lectors" id="conference_lectors"
                       class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('conference_lectors') is-invalid @enderror"
                       placeholder=" " value="{{$data['lectors'] ?? ''}}"/>
                <label for="conference_lectors"
                       class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    {{__('content.admin.conference_lectors')}}
                </label>
                @error('conference_lectors')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="conference_date" id="conference_date"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('conference_date') is-invalid @enderror"
                           placeholder=" " required value="{{$data['date'] ?? ''}}"/>
                    <label for="conference_date"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{__('content.admin.conference_date')}}
                    </label>
                    @error('conference_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="conference_time" id="conference_time"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('conference_time') is-invalid @enderror"
                           placeholder=" " required value="{{$data['time'] ?? ''}}"/>
                    <label for="conference_time"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{__('content.admin.conference_time')}}
                    </label>
                    @error('conference_time')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="relative z-0 w-full mb-5 group">
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="conference_place" id="conference_place"
                           class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('conference_place') is-invalid @enderror"
                           placeholder=" " required value="{{$data['location'] ?? ''}}"/>
                    <label for="conference_place"
                           class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                        {{__('content.admin.conference_location')}}
                    </label>
                    @error('conference_place')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit"
                    class="text-white bg-[#2c384d] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                {{empty($data) ?  __('content.conferences.add') : __('content.conferences.update')}}</button>
        </form>
        @if(session()->has('success'))
            <p class="text-center mt-[50px]">{{session()->get('success')}}</p>
        @endif
    </div>
@endsection
