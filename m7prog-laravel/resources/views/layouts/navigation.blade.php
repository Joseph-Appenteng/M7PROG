<div class="flex justify-between h-16">
    <div class="flex">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
    <a href="{{ route('dashboard') }}">
    <p  class="dark:text-black-200">Joseph Appenteng</p>
    </a>
</div>


        <!-- Navigation Links -->
       <!-- Navigation Links -->
<div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')"  class="bg-black dark:bg-white-800">
        {{ __('Dashboard') }}
    </x-nav-link>
    <x-nav-link :href="route('home')" :active="request()->routeIs('home')" class="bg-black dark:bg-black-800">
        {{ __('Portfolio') }}
    </x-nav-link>
    <x-nav-link :href="route('project.index')" :active="request()->routeIs('project')"  class="bg-black dark:bg-black-800">
        {{ __('Projects') }}
    </x-nav-link>
</div>
    </div>

    <!-- Settings Dropdown -->
    <div class="hidden sm:flex sm:items-center sm:ms-6">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus">
                    <div>{{ Auth::user()->name }}</div>
                    <div class="ms-1">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </button>
            </x-slot>
            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</div>
