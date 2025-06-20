<x-layout>
    <h1 class="text-3xl font-semibold text-center mb-6">Reset Password</h1>

    <div class="flex justify-center">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 shadow-md rounded-lg">
                <div class="text-center text-xl font-bold mb-4">Reset Your Password</div>

                <div>
                    <form method="POST" action="">

                        <!-- Email Field -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input id="email" type="email"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="email" required autocomplete="email">
                        </div>

                        <!-- New Password Field -->
                        <div class="mb-4">
                            <label for="new-password" class="block text-sm font-medium text-gray-700">New
                                Password</label>
                            <input id="new-password" type="password"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="new-password" required autocomplete="new-password">
                        </div>

                        <!-- Confirm Password Field -->
                        <div class="mb-4">
                            <label for="password-confirm" class="block text-sm font-medium text-gray-700">Confirm New
                                Password</label>
                            <input id="password-confirm" type="password"
                                class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <!-- Submit Button -->
                        <div class="mt-6 text-center">
                            <button type="submit"
                                class="w-full bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                                Reset Password
                            </button>
                        </div>

                        <!-- Back to Login Link -->
                        <div class="mt-4 text-center">
                            <a href="{{ route('login') }}" class="text-sm text-indigo-500 hover:text-indigo-600">
                                Remembered your password? Back to Login
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
