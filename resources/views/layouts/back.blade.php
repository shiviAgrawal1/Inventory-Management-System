<!DOCTYPE html>
<html lang="en">
<head>
  <title>Asset Management</title>
   
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css" />

  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>


<style type="text/css">
body{
  background-color: white;
}
 
th{
  font-size: 20px;
  color: black;
}
td{
  font-size: 18px;
}
          
#top {
         background-color: black;
        }
        #a{
          color: blue;
        }
label{
  font-size : 20px;
}

th{
	font-size: 18px;
	font-weight: bold;
}
#top{
  background-color: white;

}
      
li{
  color: white;
}
#black{
  color: black;
}
</style>

</head>
<body>

@yield('container')
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>