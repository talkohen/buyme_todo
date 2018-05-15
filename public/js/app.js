window.App = Ember.Application.create();

App.ApplicationAdapter = DS.RESTAdapter.extend({
  namespace: 'todo_server/public'
});
