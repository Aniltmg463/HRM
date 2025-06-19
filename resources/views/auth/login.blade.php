<x-layout>
    <h1 class="text-3xl font-semibold text-center mb-6">Login Form</h1>

    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 shadow-md rounded-lg">
                <div class="text-center text-xl font-bold mb-4">Login</div>

                <div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        @method('POST')

                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input id="email" type="email"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="email" required autocomplete="email">
                        </div>

                        <!-- Password Field -->
                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input id="password" type="password"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="password" required autocomplete="current-password">
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="mb-4 flex items-center">
                            <input id="remember" type="checkbox"
                                class="h-4 w-4 text-indigo-500 focus:ring-indigo-500 border-gray-300 rounded"
                                name="remember">
                            <label for="remember" class="ml-2 text-sm text-gray-700">Remember Me</label>
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 text-center">
                            <button type="submit"
                                class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Login
                            </button>
                        </div>

                        <!-- Forgot Password Link -->
                        <div class="mt-4 text-center">
                            <a href="#" class="text-sm text-indigo-500 hover:text-indigo-600">
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
