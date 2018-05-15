<?php



class TaskController extends BaseController {

    public function index()
    {
        $tasks = Task::getAll();
        return Response::json(compact('tasks'));
    }

    public function create()
    {
        $newTask = Input::get('task');
        $title = $newTask['title'];
        $task= Task::createTask($title);
        return Response::json(compact('task'));
    }

    public function update($id)
    {   $updatedTask = Input::get('task');
        $title = $updatedTask['title'];
        $status = $updatedTask['status'];
        $task= Task::updateTask($id, $title, $status);

        return Response::json(compact('task'));
    }

    public function destroy($id)
    {
        $task= Task::deleteTask($id);
        return Response::json(compact('task'));
    }



}
