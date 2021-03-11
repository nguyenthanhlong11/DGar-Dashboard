<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>D-Gar Group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

  <style>
    /* Header css */
    body { 
      margin: 0;
      font-family: Alegreya Sans;
      font-size: 17px;
    }
    .header {
      overflow: hidden;
      background:#ccc;
      padding: 20px 10px;
    }

    .header a {
      float: left;
      color: black;
      text-align: center;
      padding: 12px;
      text-decoration: none;
      font-size: 18px; 
      line-height: 25px;
      border-radius: 4px;
    }
    .header-right {
      float: right;
    }

    @media screen and (max-width: 500px) {
      .header a {
        float: none;
        display: block;
        text-align: left;
      }
      
      .header-right {
        float: none;
      }
    }
        /* Seachbar */
      .search-container {
      float: right;
    }

      input[type=text] {
      padding: 6px;
      margin-top: 8px;
      font-size: 17px;
      border: none;
    }

    .search-container button {
      float: right;
      padding: 6px 10px;
      margin-top: 8px;
      margin-right: 16px;
      background: #ddd;
      font-size: 17px;
      border: none;
      cursor: pointer;
    }

    .search-container button:hover {
      background: #ccc;
    }
    .row.content {height: 100%}
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
    /* icon css */
    .well i{
      font-size: 40px;
      color: #DCDCDC;
    }
    /* ... */
    .well{
      display: flex;
      flex-wrap: wrap;
      padding: 10px;
      justify-content: space-between;
    }

    /* chart */
    .tabcontent{
      border-right: groove 1px;
      border-bottom: groove 1px;
    }
    /* sidebar */
    /* menu */
    .dropbtn {
      color: white;
      width: auto;
      font-size: 20px;
      border: none;
      color: black;
      cursor: pointer;
    }

    .dropdown {
      position: relative;
      display: inline-block;
      vertical-align: middle;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      width: 250px;
      background-color: #f9f9f9;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {background-color: #f1f1f1}

    .dropdown:hover .dropdown-content {
      display: block;
    }


    /* piechart */
    .piechart{
      margin-left: 250px;
    }
    /* table */
    .table{
      text-align: center;
    }
    .table thead tr th{
      text-align: center;
    }
    .table thead{
      background: #00BFFF;
    }
    .table button{
      border:none;
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

