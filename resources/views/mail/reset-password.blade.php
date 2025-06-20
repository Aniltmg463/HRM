<x-mail::message>
    # Hello {{ $user->name }}

    You have requested reset link. Click below button to reset your password.

    <x-mail::button :url="route('auth.showresetpassword', $token)">
        Reset
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
