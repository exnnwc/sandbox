<?php
include ("controller.php");
include ("view.php");
include ("model.php");
//The model is where all of the logic of the program resides.
$model=new model;

//The View is where everything that is displayed to the user.
$view=new view;

//The Controller is all user input.
$control=new controller;

$model->process_input($control->input($_REQUEST));
$view->change_view($model->appropriate_view());
	

