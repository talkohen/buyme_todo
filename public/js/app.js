//Create app
window.App = Ember.Application.create();

//Set adapter base url
App.ApplicationAdapter = DS.RESTAdapter.extend({
  namespace: 'todo_server/public'
});
