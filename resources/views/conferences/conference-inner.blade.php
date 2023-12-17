@extends('layouts.app')
@section('content')
    <div class="mx-auto text-black container">
        <h1 class="flex items-center text-5xl font-extrabold mt-[50px] mb-[50px] justify-center dark:text-[#2c384d]">
            {{$conference['name']}}
        </h1>
        <div>
            <span>{{__('content.conferences.conference_date')}}: </span><span>{{$conference['date']}}</span>
        </div>
        <div>
            <span>{{__('content.conferences.conference_time')}}: </span><span>{{$conference['time']}}</span>
        </div>
        <div>
            <span>{{__('content.conferences.conference_place')}}: </span><span>{{$conference['location']}}</span>
        </div>
        <p class="mt-[50px]">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin elit arcu, dictum at convallis et, viverra ut magna. Donec congue ullamcorper semper. Ut semper dolor neque, non elementum lacus ultricies ut. Nunc egestas tortor nunc, ut volutpat arcu ultricies suscipit. Aenean porttitor enim id feugiat rhoncus. Aliquam sit amet iaculis sapien. Fusce tristique enim vel metus mattis accumsan. Aliquam viverra nulla faucibus, maximus augue mollis, consectetur ligula. Morbi molestie quam turpis, a maximus nisi efficitur quis. Curabitur maximus sodales accumsan.

            Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent sit amet ante bibendum, egestas arcu id, laoreet est. Duis sapien purus, luctus quis mauris in, lobortis malesuada magna. Donec tortor leo, auctor id tempor sit amet, volutpat vel sem. Proin lobortis metus vitae suscipit elementum. Integer bibendum molestie risus in volutpat. Morbi tincidunt mi nisi, nec auctor augue lobortis ac. Vestibulum fermentum consectetur efficitur. Quisque venenatis, magna in tincidunt finibus, turpis eros pharetra ipsum, nec tincidunt ex sem ac sapien. Curabitur consequat metus et lectus viverra dictum vitae at quam. Mauris posuere consequat leo, a euismod felis tincidunt et. Nam interdum erat vitae lorem sollicitudin cursus. Vestibulum interdum nisl at lorem vulputate, placerat sagittis ligula fermentum. Morbi molestie, purus id ultrices sagittis, enim neque vestibulum augue, nec vehicula dui justo vitae dui.

            Proin et dui vel tellus feugiat aliquam ac non dui. Fusce nunc augue, vehicula ac eros nec, venenatis congue massa. Integer ac odio non est vulputate fermentum. Mauris vestibulum dolor et diam ultricies suscipit. Proin elementum dolor eget lorem placerat mattis. Duis semper augue elit, porta rutrum risus rutrum ut. Nam nulla eros, maximus non lorem sed, convallis tincidunt dui. Etiam sit amet mauris ac nulla venenatis lacinia. Etiam eu luctus enim. Fusce in libero dui. Curabitur sit amet facilisis orci. Donec congue, mauris ullamcorper pretium sollicitudin, diam urna molestie tellus, vitae laoreet orci ante in augue. Aliquam erat volutpat.</p>

    </div>
@endsection
