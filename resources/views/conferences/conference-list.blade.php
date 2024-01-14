@extends('layouts.app')
@section('content')
    @php
        $currentTimestamp  = strtotime(date('Y-m-d'));
    @endphp
    <div class="mx-auto text-black container">
        <h1 class="flex items-center text-5xl font-extrabold mt-[50px] mb-[50px] justify-center dark:text-[#2c384d]">
            {{__('content.conferences.title')}}
        </h1>
        <div class="relative overflow-x-auto">
            @if(session()->get('role') == 'admin')
                <a href="{{route('administrator.conference.form')}}"
                   class="block-inline w-[200px] mb-[20px] text-gray-900 bg-white border border-gray-300 hover:bg-gray-100  font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Add new conference</a>
            @endif
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        {{__('content.conferences.conference_name')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('content.conferences.conference_place')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('content.conferences.conference_date')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('content.conferences.conference_time')}}
                    </th>
                    <th scope="col" class="px-6 py-3">
                        {{__('content.conferences.conference_view')}}
                    </th>
                    @if(session()->get('role') == 'client')
                        <th scope="col" class="px-6 py-3">
                            {{__('content.conferences.conference_register')}}
                        </th>
                    @endif
                    @if(session()->get('role') == 'admin')
                        <th scope="col" class="px-6 py-3">
                            {{__('content.conferences.edit')}}
                        </th>
                        <th scope="col" class="px-6 py-3">
                            {{__('content.conferences.delete')}}
                        </th>
                    @endif
                </tr>
                </thead>
                <tbody>

                @forelse($conferences_list as $list)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$list->name}}
                        </th>
                        <td class="px-6 py-4">
                            {{$list->place}}
                        </td>
                        <td class="px-6 py-4">
                            {{$list->date}}
                        </td>
                        <td class="px-6 py-4">
                            {{$list->time}}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('conference', ['id'=>$list->id]) }}"
                               class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">View</a>
                        </td>
                        @if(session()->get('role') == 'client' )
                            <td class="px-6 py-4">
                                <a href="{{ route('form.conference', ['id'=>$list->id]) }}"
                                   class=" {{ (strtotime($list->date) > strtotime(date('Y-m-d'))) ? '' : 'disabled-register-btn'}} text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">{{__('content.conferences.register')}}</a>
                            </td>
                        @endif
                        @if(session()->get('role') == 'admin')
                            <td class="px-6 py-4">
                                <a href="{{ route('administrator.conference.form', [$list->id]) }}"
                                   class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 block text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"> {{__('content.conferences.edit')}}</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('administrator.conference.delete') }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{$list->id}}">
                                    <button type="submit"
                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900  m-0 "> {{__('content.conferences.delete')}}</button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @empty
                    No conferences.
                @endforelse
                </tbody>
            </table>
            @if(session()->has('message'))
                <p class="text-center mt-[50px]">{{session()->get('message')}}</p>
            @endif
        </div>
    </div>
@endsection
