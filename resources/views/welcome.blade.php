<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to User Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-md text-center">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Welcome to User Management</h1>
            <p class="text-gray-600 mb-6">This is a project CRUD using Laravel during my training at Pascalia Asia Vietnam.</p>
            <a href="{{ route('users.index') }}" class="inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-300">Go to User Management</a>
        </div>
    </div>
</body>
</html>
