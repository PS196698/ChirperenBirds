<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Birds</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col items-center justify-center bg-gray-100">
<form method="post" action="{{ route('birds.store') }}" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
    @method('POST')
    <div class="mb-4">
        <label for="Name" class="block text-sm font-medium text-gray-700 mb-2">Bird Name:</label>
        <input type="text" name="name" class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" />
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Submit</button>
</form>
</body>
</html>
