//Define URL mappings
App.Router.map(function () {
  this.resource('tasks', {path: '/'});
});

//to display data from a model in view
App.TasksRoute = Ember.Route.extend({
  model: function () {
    return this.store.find('task');
  }
});
