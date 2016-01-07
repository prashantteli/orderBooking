//Define an angular module for our app
var app = angular.module('myApp', []);

app.controller('tasksController', function($scope, $http) {
  getTask(); // Load all available tasks 
  function getTask(){  
  $http.post("ajax/getTask.php").success(function(data){
        $scope.tasks = data;
       });
  };
  $scope.addTask = function (task) {
    $http.post("ajax/addTask.php?task="+task).success(function(data){
        getTask();
        $scope.taskInput = "";
      });
  };
  $scope.deleteTask = function (task) {
    if(confirm("Are you sure to delete this line?")){
    $http.post("ajax/deleteTask.php?taskID="+task).success(function(data){
        getTask();
      });
    }
  };

  $scope.toggleStatus = function(item, status, task) {
    if(status=='2'){status='0';}else{status='2';}
      $http.post("ajax/updateTask.php?taskID="+item+"&status="+status).success(function(data){
        getTask();
      });
  };

  

});


//Define an angular module for our app
var userDetails = angular.module('userDetails', []);

userDetails.controller('userDetailsController', function($scope, $http) {
  $scope.user={};
  $scope.classes={};
  $scope.classes.email="";
   $scope.roles=[
      {name:'Role'},
      {name:'Developer'},
      {name:'QA'},
      {name:'BA'},
      {name:'Manager'}
    ];

  $scope.user.role=$scope.roles[0]; 


 // getTask(); // Load all available tasks 
  function getUsers(){  
  $http.post("ajax/getTask.php").success(function(data){
        $scope.users = data;
       });
  };
  $scope.addUser = function (user) {
    $http.post("ajax/addTask.php?first_name="+user.first_name+"&last_name="+user.last_name+"&email="+user.email+"&password="+user.password+"&role="+user.role).success(function(data){
        getTask();
        $scope.taskInput = "";
      });
  };
  $scope.deleteUser = function (task) {
    if(confirm("Are you sure to delete this line?")){
    $http.post("ajax/deleteTask.php?taskID="+task).success(function(data){
        getTask();
      });
    }
  };
   
   $scope.clickMe=function(){
    alert(JSON.stringify($scope.user));
  };

  $scope.validateForm=function(){
    if($scope.user.password!=$scope.user.confirm_password){
        alert(JSON.stringify($scope.user));
    }else if($scope.user.role=="select"){
        alert("Invalid Role");
     }  
    else if($scope.user.role=="select"){
        alert("Invalid Role");
    }   
  };

});

 

var loginApp = angular.module('loginApp', []);

loginApp.controller('loginAppController', function($scope, $http) {
  $scope.clickMe=function(){
    alert();
  }
});

angular.bootstrap(document.getElementById("userDetails"),['userDetails']);