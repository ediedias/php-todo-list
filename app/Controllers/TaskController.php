<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController
{
    public function index(): void {
        $tasks = Task::all();
        require '../app/Views/index.php';
    }

    public function create(): void {
        require '../app/Views/create.php';
    }

    public function edit(): void {
        $task = Task::find($_GET["id"]);
        require '../app/Views/edit.php';
    }

    public function update(): void {
        $task = Task::find($_POST["id"]);
        $task->set('title', $_POST['task']);
        $task->save();
        header('Location: ../public/index.php');
    }

    public function destroy(): void  {
        $task = Task::find($_GET["id"]);
        $task->destroy();
        header('Location: ../public/index.php');
    }

    public function store(): void {
        $task = new Task();
        $task->set('title', $_POST["task"]);
        $task->save();
        header('Location: ../public/index.php');
    }
}