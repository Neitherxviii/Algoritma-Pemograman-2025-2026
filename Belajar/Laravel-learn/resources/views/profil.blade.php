<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Profile</title>

    <!-- Tailwind CDN (for learning/demo) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-indigo-500 to-purple-600 flex items-center justify-center">

    <div class="bg-white w-full max-w-md rounded-xl shadow-2xl p-6">

        <!-- Header -->
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Rein</h1>
            <p class="text-gray-500 mt-1">Favorite Description</p>
        </div>

        <!-- Skill Section -->
        <h2 class="text-lg font-semibold text-gray-700 mb-3">Favorite list</h2>

        <ul class="space-y-2 mb-4">
            @foreach ($skills as $skill)
                <li class="flex justify-between items-center bg-gray-100 px-4 py-2 rounded-lg">
                    <span class="text-gray-700 font-medium">
                        {{ $skill->name }}
                    </span>

                    <form action="/skill/{{ $skill->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="text-sm text-red-600 hover:text-red-800 font-semibold">
                            Delete
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>

        <!-- Add Skill Form -->
        <form action="/skill" method="POST" class="flex gap-2">
            @csrf
            <input
                type="text"
                name="name"
                placeholder="New skill"
                class="flex-1 border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500"
            >
            <button
                type="submit"
                class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
                Add
            </button>
        </form>

    </div>

</body>
</html>
