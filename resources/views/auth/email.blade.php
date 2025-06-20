<x-layout>

    <h1> Forgot Password Link</h1>
    You can reset your password from below link
    <a href="{{ route('auth.showresetpassword'), ['token' => $token] }}">Reset Password</a>

    {{-- <a href="{{ route('auth.showresetpassword', $token) }}">
        Reset Password
    </a> --}}

</x-layout>
