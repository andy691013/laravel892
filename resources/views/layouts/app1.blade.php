<!DOCTYPE html>
<html>

<head>
    <title>學員儀器對照表系統</title>
  
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<head>
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

      <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
   
   <link href="{{asset('CSS/bootstrap.min.css')}}" rel="stylesheet">
   <link href="{{asset('CSS/buttons.css')}}" rel="stylesheet">
   
  
   <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
   @livewireStyles
</head>
<style>



  </style>
<body class="bg-light">

    <div class="container " style="margin-top:40px;">

        <div class="card">
            <div class="card-body">
            
                @livewire('leads')
            </div>
        </div>

    </div>

    @livewireScripts

     <script type="text/javascript">
        window.livewire.on('userStore', () => {
            $('#creat1').modal('hide');
        });
         window.livewire.on('userUpdate', () => {
            $('#exampleModal').modal('hide');
        });
          window.livewire.on('userUpdateIa', () => {
            $('#updateia').modal('hide');
        });

          window.livewire.on('userUpdateIap', () => {
            $('#updateiap').modal('hide');
        });
          window.livewire.on('userUpdateIat', () => {
          
       $('#updateiat').modal('hide');
      
});
           
    
         
       
        
        
        
    </script>

    <script src =" //cdn.jsdelivr.net/npm/sweetalert2@11 " > </script>
  <x-livewire-alert::scripts/>
  

</body>

</html>
