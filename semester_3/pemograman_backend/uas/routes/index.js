// var express = require('express');
const app = require('@forkjs/group-router');

const UserController = require('../controllers/UserController');

const DatacovidController = require('../controllers/DatacovidController');


app.group('/v1', function(){

  app.group('/private', function(){
    
    app.group('/users', function(){
      app.get('/', UserController.index);
      app.post('/', UserController.create);
    });
    
    app.group('/datacovid', function(){
      
      app.get('/', DatacovidController.index);
      app.post('/', DatacovidController.create);
      app.get('/:id', DatacovidController.detail);
      app.put('/:id', DatacovidController.update);
      app.delete('/:id', DatacovidController.delete);
      
    });

  });

});

module.exports = app.router;
