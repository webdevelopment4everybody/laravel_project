@extends('layouts.app')
@section('content')
    <div class="mx-auto text-black container relative">
        @if(session()->get('role') == 'client')
            <a class="right-0 absolute text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
               href="{{route('client')}}">{{__('content.conferences.back')}}</a>
        @elseif(session()->get('role') == 'employee')
            <a class="right-0 absolute text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
               href="{{route('employee')}}">{{__('content.conferences.back')}}</a>
        @else
            <a class="right-0 absolute text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700"
               href="{{route('administrator.conferences')}}">{{__('content.conferences.back')}}</a>
        @endif
        @if(!empty($conference))
        <h1 class="flex items-center text-5xl font-extrabold mt-[50px] mb-[50px] justify-center dark:text-[#2c384d]">
            {{$conference->name}}
        </h1>
        <div>
            <span>{{__('content.conferences.conference_date')}}: </span><span>{{$conference->date}}</span>
        </div>
        <div>
            <span>{{__('content.conferences.conference_time')}}: </span><span>{{$conference->time}}</span>
        </div>
        <div>
            <span>{{__('content.conferences.conference_place')}}: </span><span>{{$conference->place}}</span>
        </div>
        <p class="mt-[50px]">{{$conference->description}}</p>
        @if(session()->get('role') != 'client')
            <div class="registered-users mt-[50px]">
                <h2 class="text-2xl mb-[20px] font-bold dark:text-[#2c384d]">{{__('content.conferences.registered_users_title')}}
                    :</h2>
                    <ul class="max-w-md space-y-1 text-black  list-disc list-inside dark:text-black">
                        @forelse($conference->users as $user)

                            <li>{{$user->name}} {{$user->lastname}} {{$user->email}} {{$user->phone}}</li>
                        @empty
                            <div class="registered-users mt-[50px]">
                                <p>{{__('content.conferences.not_found')}}</p>
                            </div>
                        @endforelse
                    </ul>
            </div>
        @endif
    @endif
@endsection
