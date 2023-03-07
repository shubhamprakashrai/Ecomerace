@extends('master')
@section('content')
<div class="coustom-product">

       <div class="col-sm-4">
        <a href="#">Filter</a>
        </div>     
        <div class="col-sm-4">
          <div class="tranding-wraper">
            <h4>Result for product</h4>
            @foreach ($products as $item)
            <div class="search-item">
              <a href="{detail/{{$item['id']}}">
             <img class="tranding-img" src="{{$item['gallery']}}">
             <div class="">
               <h2>{{$item['name']}}</h2>     
               <h4>{{$item['description']}}</h4>               
             </div>
             </a>
           </div>
            @endforeach
           </div>  
        </div>
   
</div>
@endsection