<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <title>PHP Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full flex items-center bg-gray-100">
    <div class="flex flex-col gap-6 w-96 mx-auto p-6 bg-white border border-gray-200 rounded shadow">

        <h2 class="font-semibold text-lime-600">Create New Task</h2>

        <form action="?action=store" method="POST">
            <input type="text" name="task" class="w-full rounded py-1.5 px-2 ring-1 ring-inset ring-gray-300 shadow-sm focus:ring-2 focus:ring-inset focus:ring-lime-600" />

            <button type="submit" class="mt-6 w-14 bg-lime-600 rounded text-sm text-white ring-1 ring-inset ring-lime-700 px-2 py-1 shadow-sm hover:bg-lime-700">Create</button>
        </form>
    </div>
</body>

</html>