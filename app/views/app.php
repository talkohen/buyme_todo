<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>מנהל משימות</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Boostrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/style.css">


</head>
<body>
<script type="text/x-handlebars" id="tasks">
<header>
<div id="title">משימות</div>
<button id="addTaskButton" {{action "addTaskToggle"}}><span class="circle-border">+</span></button>
</header>
<div id="newTaskDiv">
<label>שם המשימה :</label>
{{input type="text" name="title" class=" form-control" id="titleInput" placeholder= "לצאת עם נושי" }}
<button class="btn" id="submitTaskButton" {{action "submitTask"}}>שמירה</button>
</div>
<ul>
    {{#each}}
    {{#if isDone}}
    <li class="done-task">
    <span class="status-button status-button-done" {{action "changeTaskStatus" id status}}></span>
    <strike>{{id}}. &nbsp {{title}}</strike>
    <span class="delete-button" {{action "deleteTask" id}}>X</span>
    </li>

    {{else}}

    <li>
    <span class="status-button" {{action "changeTaskStatus" id status}}></span>
    {{id}}.{{input type="text" name="title" class="editTitleInput form-control"  focus-out='changeTaskTitle' value=title}}
    <span class="delete-button delete-button-pending" {{action "deleteTask" id}}>X</span>
    </li>
    {{/if}}
    {{/each}}
</ul>

<footer>
<div class="col-md-6" id="stats">
<div class="col-xs-4" id="doneTasksCount">לסיום: <b>{{remainingTasksCount}}</b></div>
<div class="col-xs-4" id="doneTasksCount">הושלמו: <b>{{doneTasksCount}}</b></div>
<div class="col-xs-4" id="tasksCount">סה"כ: <b>{{tasksCount}}</b></div>
</div>
</footer>
</script>
<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="packages/ember/handlebars-v1.3.0.js"></script>
<script src="packages/ember/ember.js"></script>
<script src="packages/ember/ember-data.js"></script>
<script src="js/app.js"></script>
<script src="js/router.js"></script>
<script src="js/models/task.js"></script>
<script src="js/controllers/task.js"></script>
<script src="js/controllers/tasks.js"></script>

</body>
</html>
