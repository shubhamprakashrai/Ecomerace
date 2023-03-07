@extends('master')
@section('content')
<div class="coustom-product">

        
        <div class="col-sm-10">
          <div class="tranding-wraper">
            <h2>Cart list</h2>
            <a class="btn btn-success"  href="/ordernow">Order Now</a> <br> <br>
            @foreach ($products as $item)
            <div class="row search-item cart-list-devider">
             <div class="col-sm-3">
                <a href="{detail/{{$item->id}}">
                    <img class="tranding-img" src="{{$item->gallery}}">
                    </a>
             </div>

             <div class="col-sm-3">
               
                    <div class="">
                      <h2>{{$item->name}}</h2>     
                      <h4>{{$item->description}}</h4>               
                    </div>
                    </a>
             </div>
             <div class="col-sm-3">
               <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"Remove From Cart</button> </a>
         </div>
           </div>
            @endforeach
            <a class="btn btn-success"  href="/ordernow">Order Now</a> <br> <br>
           </div>  
        </div>
   
</div>
@endsection