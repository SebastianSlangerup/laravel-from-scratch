@props([
    'title' => 'Idea'
])

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-700 p-6 max-w-xl mx-auto text-white">
<main>
    {{ $slot }}
</main>
</body>
</html>
