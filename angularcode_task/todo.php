<!DOCTYPE html>
<html ng-app="myApp">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="css/taskman.css"/>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,300,700" rel="stylesheet" type="text/css">
    </head>
    <body ng-controller="tasksController">
    <div class="navbar navbar-inverse">
    </div>
	<div class="row">
    	<div class="container">
            <br/>
    		<div class="col-sm-6 col-sm-offset-3">
    			<div ng-include src="'partials/task.php'"></div>
    		</div>
    	
    	</div>
    </div>
    	
	<script type="text/javascript" src="js/angular.min.js"></script>
	<script type="text/javascript" src="app/app.js"></script>
    </body>
</html>
