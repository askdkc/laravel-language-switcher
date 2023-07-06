<x-guest-layout>
        <div class="container">
                    <h1 class="dark:text-gray-300 text-2xl pb-2">{{ __('Pick Your Language') }}</h1>
                    <a href="language/en"><h3 class="mt-2 mb-2 pl-2 dark:text-gray-300 text-lg hover:bg-gray-200 hover:rounded-md dark:hover:bg-cyan-700">{{ __('English') }}</h3></a>
                    <a href="language/ja"><h3 class="mt-2 mb-4 pl-2 dark:text-gray-300 text-lg hover:bg-gray-200 hover:rounded-md dark:hover:bg-cyan-700">{{ __('Japanese') }}</h3></a>

                    <a href="{{ route('register') }}"><p class="mt-2 hover:bg-gray-200 dark:hover:bg-slate-700 text-center p-2 border rounded-md dark:text-blue-400 text-blue-600">{{ __('Sign Up') }}</p></a>
        </div>
</x-guest-layout>