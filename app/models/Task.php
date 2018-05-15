<?php


class Task extends Eloquent {


    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';
    protected $fillable = array('title', 'status');
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    public static function getAll () {

        $tasks = static::get();
        return ($tasks);
    }

    public static function createTask ( $title) {

        try {
            $task = new static();
            $task->title = $title;
            $task->status = 0;
            $task->save();
        return $task;
        }
        catch (Exception $exception) {
            return $exception;
        }
    }

    public static function updateTask ($id, $title, $status) {

        try {
            $task = Task::find($id);

            $task->title = $title ;
            $task->status = $status ;

            $task->save();
            return $task;
        }
        catch (Exception $exception) {
            return $exception;
        }
    }

    public static function deleteTask ( $id) {

        try {
            $task = Task::find($id);
            $task->delete();
            return $task;
        }
        catch (Exception $exception) {
            return $exception;
        }
    }
}
