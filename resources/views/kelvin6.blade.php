<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>{{$a1->lead}}{{$a1->name}}Fu3儀器成績</title>


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
    height:400px;
    width:280px;
  }
  .kelvin6{
    height:250px;
    width:350px;
    
  }
  .kelvin7{
    height:230px;
    width:280px;
  }
.kelvin8{
    height:60px;
    font-size:19px;

  }
.kelvin9
{
  height:400px;
    width:280px;
}
@media print {
	.no-printme  {
		display: none;
	}
  }
</style>
</head>
<div class="container ">

  
   
 
  <h3 >#{{$a1->lead}} {{$a1->name}} Fu3 檢測日期:@if($a4) {{$a4->date1}} @else ---/--/-- @endif<h3>
 @if($a2)
  <div class="row mb-5 ">
    <h1 class = "no-printme"> <button class="btn btn-outline-info" onclick={window.print()}>列印</button> </h1>
<div class="col col-md-6 col-sm-12">
  <ul class="list-group">
  <li class="list-group-item"><h5>Post 未加心智</h5></li>
@if($a2->p1!=null)
  <li class="list-group-item"><img class="img-fluid kelvin9"  src="{{asset('storage/'.$a2->p1)}}"/></li>
@endif 
  <li class="list-group-item">  <img class="img-fluid kelvin5"  src="{{asset('storage/'.$a2->p2)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin6"  src="{{asset('storage/'.$a2->p3)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin7"  src="{{asset('storage/'.$a2->p4)}}"/></li>

</ul>
    
  </div> 
  <div class="col col-md-6 col-sm-12">
 
  <ul class="list-group">
  <li class="list-group-item">  <h5>Post 加心智</h5></li>
  @if($a2->p12!=null)
  <li class="list-group-item">  <img class="img-fluid kelvin9"  src="{{asset('storage/'.$a2->p12)}}"/></li>
  @endif
  <li class="list-group-item">  <img class="img-fluid kelvin5"  src="{{asset('storage/'.$a2->p22)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin6"  src="{{asset('storage/'.$a2->p32)}}"/></li>
  <li class="list-group-item">  <img class="img-fluid kelvin7"  src="{{asset('storage/'.$a2->p42)}}"/></li>
</ul>
      
 

</div>

</div>

     <p style='page-break-after:always'></p> 
     

@endif
   <div class="my-5  ">
   
    <h4>跳視 Saccade</h4>
     <h5>跳視反應時間分析圖</h5>
    
     <table class="table  table-bordered  table-sm kelvin8">
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
    <tr>
    @if($a4)
      <td>Fu3 跳視反視反應時間</td>
      <td >@if ($a4->s3<37) <span class="text-danger">{{$a4->s3}}  </span>@else {{$a4->s3}} @endif (次)</td>
      <td>{{$a4->s1}}(次)</td>
      <td>{{$a4->s2}} (次)</td>
      <td>42 (次)</td>
      <td>37 (次) @if ($a4->s3<37) <span class="text-danger">未達</span> @else <span class="text-success">達標</span>@endif </td>
    
   @else <h3> 還沒建資料</h3>
  @endif
    </tr>
    
  </tbody>
</table> <br />
@if($a3)
     <img class="img-fluid col-md-12 col-sm-12 kelvin3 "  src="{{asset('storage/'.$a3->sl)}}"/>
@endif
   </div>
  
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
    <tr>
  @if($a4)
      <td>Fu3 跳視反應準確度</td>
      <td >@if ($a4->s6<37) <span class="text-danger">{{$a4->s6}}  </span>@else {{$a4->s6}} @endif</td>
      <td>{{$a4->s1}} (次)</td>
      <td> {{$a4->s4}} (次)</td>
      <td> {{$a4->s5}}(次)</td>
      <td>42 (次)</td>
      <td>37 (次)@if ($a4->s6<37) <span class="text-danger">未達</span>@else <span class="text-success">達標<span> @endif</td>
  
  @else<h3> 還沒建資料</h3>
  @endif
    </tr>
    
  </tbody>
</table><br/>
@if($a3)
     <img class="img-fluid col-md-12 col-sm-12 kelvin4 "  src="{{asset('storage/'.$a3->sa)}}"/>

</div>
  
   <p style='page-break-after:always'></p> 

   <div class="my-2 p-2 col col-md-12 col-sm-12 " >
     <div class="my-4 kelvin1">
     <h5>凝視中間圖 Gaze center</h5>
     <img class="img-fluid "  src="{{asset('storage/'.$a3->gc)}}"/>
      </div>
      <div class="my-4 kelvin1">
     <h5>凝視左邊分析圖 Gaze Left</h5>
     <img class="img-fluid "  src="{{asset('storage/'.$a3->gl)}}"/>
    </div>
    <div class="my-4 kelvin1">
     <h5>凝視右邊分析圖Gaze Right</h5>
     <img class="img-fluid "  src="{{asset('storage/'.$a3->gr)}}"/>
     </div>
</div>
<p style='page-break-after:always'></p> 
 <div class="my-2  col col-md-12 col-sm-12 ">
 <div class="my-4 kelvin2">
   <h4>眼球追視Pursuit</h4>
    <h5>平滑追視Smooth pursuit</h5>
    
     <img class="img-fluid "  src="{{asset('storage/'.$a3->sp)}}" />
        </div>
    <div class="my-4 kelvin2">
     <h5>疲累追視Tired pursuit</h5>
     <img class="img-fluid"  src="{{asset('storage/'.$a3->tp)}}"/>

   </div>
  </div>

  @endif

</html>