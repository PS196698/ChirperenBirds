<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Bird</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-screen flex flex-col items-center justify-center bg-gray-100">
<!-- Form to update a bird -->
<form action="{{ route('birds.update', $bird) }}" method="post" class="bg-white p-6 rounded shadow-md w-full max-w-sm">
    @csrf
    @method('PATCH')
    <!-- Bird name input field -->
    <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name:</label>
        <input type="text" class="block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" name="name" value="{{ $bird->name }}">
    </div>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full">Update Bird</button>
</form>
</body>
</html>
