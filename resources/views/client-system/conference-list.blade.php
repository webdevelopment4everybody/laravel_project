@extends('layouts.app')
@section('content')
    <div class="mx-auto text-black container">
        <h1 class="flex items-center text-5xl font-extrabold mt-[50px] mb-[50px] justify-center dark:text-[#2c384d]">All
            conferences</h1>
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Conference name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Conference place
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Conference date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Conference time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        View conference
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Register
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($conferences_list as $list)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$list['name']}}
                    </th>
                    <td class="px-6 py-4">
                        {{$list['location']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$list['date']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$list['time']}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{route('conference',['id'=>$list['id']])}}"
                           class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">View</a>
                    </td>
                    <td class="px-6 py-4">
                        <a href="#"
                           class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Register</a>
                    </td>
                </tr>
                @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
