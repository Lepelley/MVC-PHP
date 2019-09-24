# MVC-PHP
 Mini framework MVC with PHP

# Configuration
Configure Model/Manager.php file to adapt it to your project.

# Architecture explication
- controller
- controller/backend.php
- controller/frontend.php
- model
- model/Manager.php : file to include in every Manager you create, contains the connection to your database with your logins
- public
- public/css
- public/images
- public/js
- vendor : put the external libraries you use here
- view : contains the view of your pages and the templates you use
- view/backend
- view/frontend/errorView.php : view use when a error is catch
- view/frontend/template.php : base template
- view/frontend/testView.php : can be delete, at the beginning, your main view
- index.php : router

# How to add a action/page (step by step progress)
- code the model (in the model folder) and create table in your database if you need them
- code the controler (controler/front(or back)end folder) to get the data and send them to the view
- code the view
- update the router (index.php) to send the good controler

# To Do
- restricte access from folder except public
