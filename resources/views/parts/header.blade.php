<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <span
                class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{__('content.title')}}</span>

            <div class="flex items-center lg:order-2">
                {{--            <a href="#" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Get started</a>--}}
                <button data-collapse-toggle="mobile-menu-2" type="button"
                        class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0">
                    <li>
                        <a href="{{route('homepage')}}"
                           class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                           aria-current="page">{{__('content.header.homepage')}}</a>
                    </li>
                    @auth
                        @if(auth()->user()->role->name == App\Enums\UserRoles::CLIENT->value):
                        <li>
                            <a href="{{route('client')}}"
                               class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                               aria-current="page">{{__('content.header.client')}}</a>
                        </li>
                        @endif
                        @if(auth()->user()->role->name == App\Enums\UserRoles::EMPLOYEE->value):
                        <li>
                            <a href="{{route('employee')}}"
                               class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                               aria-current="page">{{__('content.header.employee')}}</a>
                        </li>
                        @endif
                        @if(auth()->user()->role->name == App\Enums\UserRoles::ADMINISTRATOR->value):
                        <li>
                            <a href="{{route('administrator')}}"
                               class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                               aria-current="page">{{__('content.header.admin')}}</a>
                        </li>
                        @endif
                    @endauth
                    <li>
                        @guest
                            <a href="{{route('login')}}"
                               class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                               aria-current="page">{{__('content.header.login')}}</a>
                        @endguest
                        @auth
                            <form method="post" action="{{route("logout")}}">
                                @csrf
                                <button
                                    class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                                    aria-current="page">{{__('content.header.logout')}}</button>
                            </form>
                        @endauth
                    </li>
                    <li>
                        @guest
                            <a href="{{route('register')}}"
                               class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                               aria-current="page">{{__('content.header.register')}}</a>
                        @endguest
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
