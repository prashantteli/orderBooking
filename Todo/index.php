<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/taskman.css"/>
<style>
#loginModal {
    background: #f2f2f2;
}

.redBorder{
    border-color: #ff0000;
    outline: 0;
 }

.redBorder:focus,.redBorder:hover{
     border-color: #ff0000;
     outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
    box-shadow: inset 0 1px 1px rgba(194, 118, 118, 0.075),0 0 8px rgba(245, 67, 117, 0.6);
}


</style>
</head>
<body>

    <div class="navbar navbar-inverse">
    </div>
    <div class="container">
    <div class="row">
        <div
            class="col-md-4 col-sm-6  col-sm-offset-3 col-md-offset-4 col-xs-12">

            <div class="panel panel-default" id="loginModal">
                <div class="panel-body">

                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                        <li><a href="#create" data-toggle="tab">Create Account</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane active in" id="login">
                            <form class="" action="todo.php" method="POST" id="loginApp" ng-app="loginApp" ng-controller="loginAppController" ng-submit="notToSubmit();">
                                <fieldset>
                                    <div>
                                        <legend class="">Login</legend>
                                    </div>
                                     <div class="form-group">
                                         <label>Role</label>
                                         <select class="form-control" ng-options="roles.name for roles in roles" ng-model="login.role" ng-class="classes.role">
                                            <!-- <option value="select" selected>Role</option>
                                            <option value="pm">Project Manager</option>
                                            <option value="dev">Developer</option>
                                            <option value="qa">QA</option> -->
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <!-- Username -->
                                        <label class="control-label" for="username">Email</label>
                                        <div class="controls">
                                            <input type="text" id="username" name="username"
                                                placeholder="" class="form-control" ng-model="login.username" >
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <!-- Password-->
                                        <label class="control-label" for="password">Password</label>
                                        <div class="controls">
                                            <input type="password" id="password" name="password"
                                                placeholder="" class="form-control" ng-model="login.password">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <!-- Button -->
                                        <div class="controls">
                                            <button class="btn btn-success" type="button" ng-click="getUser(login);">Login</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="create">
                            <form id="userDetails" ng-app="userDetails" ng-controller="userDetailsController">
                                <div>
                                    <legend class="">Register</legend>
                                </div>
                                <div class="form-group">
                                    <label>Email</label> <input type="text" value=""
                                        class="form-control" ng-class="classes.email" ng-model="user.email">
                                </div>
                                <div class="form-group">
                                    <label>First Name</label> <input type="text" value=""
                                        class="form-control" ng-model="user.first_name" ng-class="classes.first_name">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label> <input type="text" value=""
                                        class="form-control" ng-model="user.last_name" ng-class="classes.last_name">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <select class="form-control" ng-options="roles.name for roles in roles" ng-model="user.role" ng-class="classes.role">
                                        <!-- <option value="select" selected>Role</option>
                                        <option value="pm">Project Manager</option>
                                        <option value="dev">Developer</option>
                                        <option value="qa">QA</option> -->
                                    </select>

                                </div>
                                <div class="form-group">
                                    <label>Password</label> <input type="password" value=""
                                        class="form-control" ng-model="user.password" ng-class="classes.password">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label> <input type="password" value=""
                                        class="form-control" ng-model="user.confirm_password" ng-class="classes.confirm_passwprd">
                                </div>
                                
                                <div class="form-group">
                                    <button class="btn btn-primary" type="button" ng-click="validateForm()">Create Account</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
    <script class="cssdeck" src="js/jquery.min.js"></script>
    <script class="cssdeck" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/angular.min.js"></script>
    <script type="text/javascript" src="app/app.js"></script>
</body>
</html>