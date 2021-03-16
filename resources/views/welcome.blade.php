<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>D-Gar Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="public/css/adminPage.css"> -->
  <!-- <script src='Chart.min.js'></script> -->
  <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans:400,800' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <style>
    /* Header css */
    body { 
      margin: 0;
      font-family: Alegreya Sans;
      font-size: 17px;
    }
    /* button download in sidebar */
    .btn-download {
  background-color:crimson;
  margin-left: 60px;
  margin-top: 100px;
  border: none;
  border-radius: 1px;
  color: white;
  cursor: pointer;
  font-size: 25px;
}

/* Darker background on mouse-over */
.btn-download:hover {
  background-color:darkred;
}
/* menu in dashboard */
.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}

.navbar-right .fa-bell{
  margin-right: 300px;
}
.row .col-sm-4{
  text-align: center;
  margin-bottom: 50px
}

.col-sm-4 i{
  font-size:120px; 
  display: inline-block;
  padding-top: 50px;
}

.col-sm-4 p{
  font-size: 25px;
}

.col-sm-4 h2{
  font-size: 30px
}
.col-sm-4 .col1{
  background-color:#FAE420; 
  padding:30px; 
  height: 350px;
  border-style:solid; 
  border-radius: 30px;
  border-color: #FAE420;
}
.col-sm-4 .col2{
  background-color: #ECADAD; 
  padding:30px;
  height: 350px;
  border-style:solid; 
  border-radius: 30px;
  border-color: #ECADAD;
}
.col-sm-4 .col3{
  background-color:#8EE3BA; 
  padding:30px;
  height: 350px;
  border-style:solid; 
  border-radius: 30px;
  border-color: #8EE3BA;
}

.tabcontent{
  border-style: solid;
  border-width: 1px;
  border-radius: 5px;
  background:white;
}
  </style>
</head>
<body class="w3-light-grey">
  <div id="appadmin">
      <appadmin/>
  </div>
  <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>

