<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Upload Multiple Files in Laravel 8 with Coding Driver</title>


  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 <link href="cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
 <link href=https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css rel="stylesheet">
 <link href="{{asset('CSS/bootstrap.min.css')}}" rel="stylesheet">
 <link href="{{asset('CSS/buttons.css')}}" rel="stylesheet">
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js "></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/phaser@3.55.2/dist/phaser.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<style>
   body {
                font-family: 'Nunito', sans-serif;
                
            }
        

</style>
</head>
<body>
<div id="root">
</div>


<div id="demo"></div>
<div class="container">

<button type="button" class="btn btn-primary btn-sm">Primary  </button>
<button type="button" class="btn btn-secondary btn-sm">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>
<button type="button" class="btn btn-link">Link</button>

<script>
$(document).ready(function() {
  $("#demo").css("font-size","35px");
     $('#example').DataTable();
  
});



</script>

</html>