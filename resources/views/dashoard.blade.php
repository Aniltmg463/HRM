<x-layout>
    @auth
        <div class="auth-section">
            <form method='post' action="{{ route('logout') }}">
                @csrf
                <button type='submit' class="logout-button">Logout</button>
            </form>
        </div>
    @endauth

    <div class="main-content">
        <h1 class="welcome-message">Hello Admin</h1>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        x-layout {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }

        .auth-section {
            margin-bottom: 20px;
        }

        .logout-button {
            background-color: #ff4757;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #e84118;
        }

        .main-content {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .welcome-message {
            color: #2f3542;
            font-size: 36px;
            margin: 0;
        }
    </style>
</x-layout>
