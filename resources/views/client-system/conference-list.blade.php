@extends('layouts.app')
@section('content')
    <div class="mx-auto text-black container">
        <h1 class="flex items-center text-5xl font-extrabold mt-[50px] mb-[50px] justify-center dark:text-[#2c384d]">All conferences</h1>
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
                        Conference date and time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        View conference
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Conference 1
                    </th>
                    <td class="px-6 py-4">
                        Litexpo, Vilnius
                    </td>
                    <td class="px-6 py-4">
                        2023-12-01, 11h
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">View</a>
                    </td>
                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Conference 2
                    </th>
                    <td class="px-6 py-4">
                        Aaaaa, Ryga
                    </td>
                    <td class="px-6 py-4">
                        2023-12-16, 8h
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">View</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Conference 3
                    </th>
                    <td class="px-6 py-4">
                        Bbbbbb, Warsawa
                    </td>
                    <td class="px-6 py-4">
                        2023-01-09, 10h
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">View</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>


    </div>
@endsection
