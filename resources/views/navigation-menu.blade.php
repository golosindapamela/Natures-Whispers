<nav x-data="{ open: false }" style="background-color: #1f6534;" class="border-b border-gray-100 text-white">
    <div class="flex justify-between items-center h-16" style="padding-left: 200px; padding-right: 200px;">
        
        <!-- Left: Logo + Title -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('logo.png') }}" alt="Nature's Whispers Logo" style="height: 45px;">
            <span class="text-white text-xl font-bold">Nature's Whispers</span>
        </div>

        <!-- Right: Navigation Links -->
        <div class="flex items-center space-x-8">
            @auth
                <a href="{{ url('/blog') }}"
                   class="text-white font-medium hover:text-gray-200 transition duration-200">Explore</a>

                <a href="{{ url('/view_post') }}"
                   class="text-white font-medium hover:text-gray-200 transition duration-200">My Blogs</a>

                <a href="{{ route('dashboard') }}"
                   class="text-white font-medium hover:text-gray-200 transition duration-200">Write</a>

            @endauth

            <!-- Auth Dropdown -->
            @auth
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex border-2 border-transparent rounded-full focus:outline-none transition"
                                        style="background-color: white; border-color: transparent;">
                                    <img class="h-8 w-8 rounded-full object-cover" 
                                        src="{{ Auth::user()->profile_photo_url }}" 
                                        alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" 
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm font-medium rounded-md focus:outline-none transition"
                                        style="font-weight: bold; background-color: white; color: #1f6534;">
                                        {{ Auth::user()->name }}
                                        <svg class="ms-2 -me-0.5 w-4 h-4" 
                                            fill="none" 
                                            stroke="#1f6534" 
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
                                <x-dropdown-link href="{{ route('logout') }}"
                                                 @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            @endauth
        </div>
    </div>
</nav>
