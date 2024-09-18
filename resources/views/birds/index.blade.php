<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birds</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen flex flex-col items-center justify-center bg-gray-100">
<h1 class="text-3xl font-bold mb-4">Birds</h1>
<form action="{{ route('birds.create') }}" class="mb-4">
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md">Create</button>
</form>
<table class="table-auto w-full max-w-lg text-left border-collapse shadow-md">
    <thead>
    <tr class="bg-gray-200">
        <th class="border px-4 py-2 font-bold">Bird Name</th>
        <th class="border px-4 py-2 font-bold">Edit</th>
        <th class="border px-4 py-2 font-bold">Delete</th>
    </tr>
    </thead>
    <tbody>
    @foreach($birds as $bird)
        <tr class="bg-white">
            <td class="border px-4 py-2">{{ $bird->name }}</td>
            <td class="border px-4 py-2">
                <form action="{{ route('birds.edit', $bird->id) }}" method="POST">
                    @csrf
                    @method('GET')
                    <button type="submit" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                </form>
            </td>
            <td class="border px-4 py-2">
                <form action="{{ route('birds.destroy', $bird->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="mt-4">
    {{ $birds->links() }}
</div>
</body>

</html>
