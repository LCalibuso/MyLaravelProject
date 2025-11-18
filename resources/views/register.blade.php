<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @auth
        <p>You are an authenticated user</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    @endauth
    @guest
        <form action="/register" method="POST">
            @csrf
            <x-form-input type="text" name="firstname" placeholder="firstname" label="Firstname"/>
            <x-form-input type="text" name="lastname" placeholder="lastname" label="Lastname" />
            <x-form-input type="text" name="email" placeholder="email" label="Email" />
            <x-form-input type="password" name="password" placeholder="Enter password" label="Password" />
            <button>register</button>
        </form>

        <form action="/login" method="POST">
            @csrf
            <x-form-input type="text" name="email" placeholder="email" label="Email" />
            <x-form-input type="password" name="password" placeholder="Enter password" label="Password" />
            <button>login</button>
        </form>

    @endguest
    
</body>
</html>