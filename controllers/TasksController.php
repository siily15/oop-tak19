<?php

class TasksController {

    public function index () {

        global $app;

        $tasks = $app['database']->selectAll('todos');

        return view('tasks', ['tasks' => $tasks]);

    }
    public function store () {

        global $app;

        $app['database']->insert('todos', [
            'description' => $_POST['description'],
        ]);

        return redirect('tasks');
    }
}
