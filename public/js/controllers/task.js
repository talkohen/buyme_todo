function success(data) {
    //alert ('action success');
}

function failure(reason) {
    //alert ("action fail");
}

//Controller for single object
App.TaskController = Ember.ObjectController.extend({

    //Computed values for task
    isDone: Ember.computed('status', function() {
        return this.get('status') == 1;
    }),

    //Action listeners
    actions: {
        changeTaskStatus (id ,status){
            var newStatus = 0;

            var task = this.get('model');
                if (status == 0) {
                    newStatus = 1;
                }
                task.set('status', newStatus);
                task.save().then(success).catch(failure);

        },
        changeTaskTitle (){

            var task = this.get('model');
            var title = this.get('title');
            task.set('title', title);
            task.save();

        },
        deleteTask (id) {
            var task = this.get('model');

                task.destroyRecord().then(function() {
                    alert("task deleted")})
                    .catch(function (error) {
                        alert ("error deleting")});

        }
    }
});


