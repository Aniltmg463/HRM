{{-- <x-layout>
    <br>
    <br>
    <form method="POST" action="{{ route('auth.Submitforgetpassword') }}">
        <input type="email" name="email" id="email" placeholder="Enter Mail">
        <button type="submit">Send reset password link</button>
    </form>

    <br>
    <br>

</x-layout> --}}


<x-layout>
    <div class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-semibold text-center mb-6">Forgot Your Password?</h2>

            @if (session('status'))
                <div class="mb-4 text-green-600 text-sm text-center">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 text-red-500 text-sm text-center">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('auth.Submitforgetpassword') }}">
                @csrf

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500"
                        required>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-400">
                        Send Reset Password Link
                    </button>
                </div>
            </form>

            <div class="mt-4 text-center">
                <a href="{{ route('login') }}" class="text-sm text-indigo-500 hover:underline">Back to Login</a>
            </div>
        </div>
    </div>
</x-layout>
