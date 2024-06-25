<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
    <meta charset="UTF-8" />
    <title>PHP Todo List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-full flex items-center bg-gray-100">
    <div class="w-96 mx-auto p-6 bg-white border border-gray-200 rounded shadow">

        <div class="flex items-center justify-between gap-x-4">

            <h2 class="font-semibold text-lime-600">Todo List</h2>
            <a href="?action=create" class="rounded text-xs ring-1 ring-inset ring-gray-300 px-2 py-1 shadow-sm hover:bg-gray-50">Add Todo</a>
        </div>

        <ul class="mt-8 grid grid-cols-1 gap-4 text-sm text-gray-600">

            <?php foreach ($tasks as $task) : ?>

                <li class="flex items-center justify-between gap-x-3 ">
                    <div class="flex gap-4 items-center">
                        <svg class="h-6 w-5 flex-none text-lime-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                        </svg>
                        <?= $task->get('title') ?>
                    </div>

                    <div class="flex gap-3">
                        <a href="?action=edit&id=<?= $task->get('id') ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 hover:stroke-amber-500">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                            </svg>
                        </a>

                        <a href="?action=destroy&id=<?= $task->get('id') ?>">
                            <svg xmlns=" http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4 hover:stroke-red-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                            </svg>
                        </a>
                    </div>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>