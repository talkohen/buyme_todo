App.TasksController = Ember.ArrayController.extend({
  itemController: 'task',

    tasksCount: function () {
        return this.get('length');
    }.property('@each.status'),
    remainingTasksCount: function () {
        return this.filterBy('status', false).get('length');
    }.property('@each.status'),
    doneTasksCount: function () {
        return this.filterBy('status', true).get('length');
    }.property('@each.status'),

    actions: {
        addTaskToggle() {
          $("#newTaskDiv").slideToggle( "slow", function() {

          });
        },
        submitTask (){

            var titleInput, task;
            titleInput = $("#titleInput").val();

            if (!titleInput) {
                return;
            }


            task = this.store.createRecord('task', {
                title: titleInput,
                status: 0
            });

            function success(data) {
                task.set('id', data.id)
            }

            function failure(reason) {
                alert ("Failed to save task");
            }
            task.save().then(success).catch(failure);
            $("#titleInput").val('')
            $("#newTaskDiv").slideToggle( "slow", function() {});

        }
    }
  
});

