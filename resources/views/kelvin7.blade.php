<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{$a1->lead}}{{$a1->name}}儀器成績對照表2</title>


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
  .kelvin1 > img {
    height:400px;
    width:1166px;
  }
  .kelvin2 >img{
    height:400px;
    width:1166px;
  }
  .kelvin3{
     height:450px;
    width:1166px;
  }
   .kelvin4{
     height:450px;
    width:1166px;
  }

  .kelvin5{
    height:500px;
    width:320px;
  }
  .kelvin6{
    height:320px;
    width:400px;
    
  }
  .kelvin7{
    height:250px;
    width:320px;
  }
  
  .kelvin8{
    height:100px;
    font-size:18px;

  }
  @media print {
	.no-printme  {
		display: none;
	}
  }
</style>
</head>
<div class="container ">

  
   
 
  <h3 >#{{$a1->lead}} {{$a1->name}} Fu3-日期:@if($a4) {{$a4->date1}} @else ---/--/-- @endif
  Fu4-日期:@if($a7) {{$a7->date1}} @else ---/--/-- @endif<h3>
 @if($a2 && $a5)
  <div class="row my-3  ">
    <h1 class = "no-printme "> <button class="btn btn-outline-info" onclick={window.print()}>列印</button> </h1>
<div class="col col-md-6 col-sm-12">

  <ul class="list-group">
    <li class="list-group-item"><h5> 日期:@if($a4) {{$a4->date1}} @else ---/--/-- @endif</h5></li>
  <li class="list-group-item"><h5>Fu3 未加心智</h5></li>
  <li class="list-group-item">  <img class="img-fluid kelvin5 "  src="{{asset('storage/'.$a2->p2)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin6"  src="{{asset('storage/'.$a2->p3)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin7"  src="{{asset('storage/'.$a2->p4)}}"/></li>

</ul>
    
</div> 
  <div class="col col-md-6 col-sm-12">
  <ul class="list-group">
    <li class="list-group-item"><h5> 日期:@if($a7) {{$a7->date1}} @else ---/--/-- @endif</h5></li>
  <li class="list-group-item">  <h5>Fu4 未加心智</h5></li>
 
  <li class="list-group-item">  <img class="img-fluid kelvin5"  src="{{asset('storage/'.$a5->p2)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin6"  src="{{asset('storage/'.$a5->p3)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin7"  src="{{asset('storage/'.$a5->p4)}}"/></li>
</ul>
      

</div>
</div>
<p style='page-break-after:always'></p> 
     




<div class="row  mb-5 ">

<div class="col col-md-6 col-sm-12">
  <ul class="list-group">
    <li class="list-group-item"><h5> 日期:@if($a4) {{$a4->date1}} @else ---/--/-- @endif</h5></li>
  <li class="list-group-item"><h5>Fu3 加入心智</h5></li>
 
  <li class="list-group-item">  <img class="img-fluid kelvin5 "  src="{{asset('storage/'.$a2->p22)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin6"  src="{{asset('storage/'.$a2->p32)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin7"  src="{{asset('storage/'.$a2->p42)}}"/></li>

</ul>
    
  </div> 


  <div class="col col-md-6 col-sm-12">
  <ul class="list-group">
  <li class="list-group-item"><h5> 日期:@if($a7) {{$a7->date1}} @else ---/--/-- @endif</h5></li>
  <li class="list-group-item">  <h5>Fu4 加入心智</h5></li>
 
  <li class="list-group-item">  <img class="img-fluid kelvin5"  src="{{asset('storage/'.$a5->p22)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin6"  src="{{asset('storage/'.$a5->p32)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin7"  src="{{asset('storage/'.$a5->p42)}}"/></li>
</ul>
      


</div>

</div>

     <p style='page-break-after:always'></p> 
     

@endif

   <div class="my-5  ">
   
    <h4>跳視 Saccade</h4>
     <h5>跳視反應時間分析圖</h5>
    
     <table class="table  table-bordered table-sm kelvin8 ">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">合格</th>
      <th scope="col">偷跑</th>
      <th scope="col">太慢</th>
      <th scope="col">小計</th>
      <th scope="col">標準範圍</th>
    </tr>
  </thead>
  <tbody>
     @if($a4)
    <tr>
 
      <td>Fu3 跳視反視反應時間</td>
      <td >@if ($a4->s3<37) <span class="text-danger">{{$a4->s3}}  </span>@else {{$a4->s3}} @endif (次)</td>
      <td>{{$a4->s1}}(次)</td>
      <td>{{$a4->s2}} (次)</td>
      <td>42 (次)</td>
      <td>37 (次)@if ($a4->s3<37) <span class="text-danger">未達</span> @else <span class="text-success">達標</span>@endif</td>
    
   @else <h3> 還沒建資料</h3>
  
    </tr>
    @endif

     @if($a7)
    <tr>
 
      <td>Fu4 跳視反視反應時間</td>
      <td >@if ($a7->s3<37) <span class="text-danger">{{$a7->s3}}  </span>@else {{$a7->s3}} @endif (次)</td>
      <td>{{$a7->s1}}(次)</td>
      <td>{{$a7->s2}} (次)</td>
      <td>42 (次)</td>
      <td>37 (次)@if ($a7->s3<37) <span class="text-danger">未達</span> @else <span class="text-success">達標</span>@endif</td>
    
   @else <h3> 還沒建資料</h3>
  
    </tr>
    @endif
    
  </tbody>
</table> <br />
    @if($a3 && $a6)
     <h4>Fu3</h4>
     <img class="img-fluid col-md-12 col-sm-12 my-2 kelvin3"  src="{{asset('storage/'.$a3->sl)}}"/>
      <h4>Fu4</h4>
     <img class="img-fluid col-md-12 col-sm-12 my-2 kelvin3"  src="{{asset('storage/'.$a6->sl)}}"/>
    @endif
   </div>
  
   
   <p style='page-break-after:always'></p> 
 
 <div class="my-5">
     <h5>跳視反應準確分析圖</h5>
      <table class="table  table-bordered table-sm kelvin8">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">合格</th>
      <th scope="col">偷跑</th>
      <th scope="col">未達目標區</th>
      <th scope="col">超過目標區</th>
      <th scope="col">小計</th>
      <th scope="col">標準範圍</th>
    </tr>
  </thead>
  <tbody>
   @if($a4)
    <tr>
       <td>Fu3 跳視反應準確度</td>
      <td >@if ($a4->s6<37) <span class="text-danger">{{$a4->s6}}  </span>@else {{$a4->s6}} @endif</td>
      <td>{{$a4->s1}} (次)</td>
      <td> {{$a4->s4}} (次)</td>
      <td> {{$a4->s5}}(次)</td>
      <td>42 (次)</td>
      <td>37 (次)@if ($a4->s6<37) <span class="text-danger">未達</span>@else <span class="text-success">達標<span> @endif</td>
      </tr>
    @else<h3> 還沒建資料</h3>
  @endif
  @if($a7)
    <tr>
       <td>Fu4 跳視反應準確度</td>
      <td >@if ($a7->s6<37) <span class="text-danger">{{$a7->s6}}  </span>@else {{$a7->s6}} @endif</td>
      <td>{{$a7->s1}} (次)</td>
      <td> {{$a7->s4}} (次)</td>
      <td> {{$a7->s5}}(次)</td>
      <td>42 (次)</td>
      <td>37 (次)@if ($a7->s6<37) <span class="text-danger">未達</span>@else <span class="text-success">達標<span> @endif</td>
      </tr>
    @else<h3> 還沒建資料</h3>
  @endif
    
  </tbody>
</table><br/>

    @if($a3 && $a6)
<h4>Fu3</h4>
     <img class="img-fluid col-md-12 col-sm-12 my-2 kelvin4 "  src="{{asset('storage/'.$a3->sa)}}"/>
<h4>Fu4</h4>
     <img class="img-fluid col-md-12 col-sm-12 my-2 kelvin4 "  src="{{asset('storage/'.$a6->sa)}}"/>
@endif
</div>
  
   <p style='page-break-after:always'></p> 

   <div class="my-2 p-2 col col-md-12 col-sm-12 " >
     <div class="my-4 kelvin1">
     <h5>凝視中間圖 Gaze center</h5>
      @if($a3 && $a6)
    <h5>Fu3</h5>
     <img class="img-fluid mb-2"  src="{{asset('storage/'.$a3->gc)}}"/>
    <h5>Fu4</h5>
    <img class="img-fluid "  src="{{asset('storage/'.$a6->gc)}}"/>
   @endif
      </div>
</div>
<p style='page-break-after:always'></p> 

<div class="my-2 p-2 col col-md-12 col-sm-12 " >
     <div class="my-4 kelvin1">
     <h5>凝視左邊分析圖 Gaze Left</h5>
       @if($a3 && $a6)
    <h5>Fu3</h5>
     <img class="img-fluid mb-2"  src="{{asset('storage/'.$a3->gl)}}"/>
    <h5>Fu4</h5>
    <img class="img-fluid "  src="{{asset('storage/'.$a6->gl)}}"/>
      @endif
      </div>
</div>
<p style='page-break-after:always'></p> 

<div class="my-2 p-2 col col-md-12 col-sm-12 " >
     <div class="my-4 kelvin1">
    <h5>凝視右邊分析圖 Gaze Left</h5>
 @if($a3 && $a6)
    <h5>Fu3</h5>
     <img class="img-fluid mb-2"  src="{{asset('storage/'.$a3->gr)}}"/>
    <h5>Fu4</h5>
    <img class="img-fluid "  src="{{asset('storage/'.$a6->gr)}}"/>
   @endif
      </div>
</div>
<p style='page-break-after:always'></p> 


   

 <div class="my-2  col col-md-12 col-sm-12 ">
 <div class="my-4 kelvin2">
   <h4>眼球追視Pursuit</h4>
    <h5>平滑追視Smooth pursuit</h5>
     @if($a3 && $a6)
      <h5>Fu3</h5>
     <img class="img-fluid mb2 "  src="{{asset('storage/'.$a3->sp)}}" />

         <h5>Fu4</h5>
     <img class="img-fluid mb2"  src="{{asset('storage/'.$a6->sp)}}" />
     @endif
        </div>
    </div>
    
<p style='page-break-after:always'></p> 



<div class="my-2  col col-md-12 col-sm-12 ">
 <div class="my-4 kelvin2">
   <h4>眼球追視Pursuit</h4>
     <h5>疲累追視Tired pursuit</h5>
     @if($a3 && $a6)
      <h5>Fu3</h5>
     <img class="img-fluid mb2 "  src="{{asset('storage/'.$a3->tp)}}" />

         <h5>Fu4</h5>
     <img class="img-fluid mb2"  src="{{asset('storage/'.$a6->tp)}}" />
      @endif
        </div>
    </div>

  
   </div>
  </div>



</html>