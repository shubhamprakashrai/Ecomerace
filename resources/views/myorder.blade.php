@extends('master')
@section('content')
<div class="coustom-product">

        
        <div class="col-sm-10">
          <div class="tranding-wraper">
            <h2>Order list</h2>
           {{--}} <a class="btn btn-success"  href="/ordernow">Order Now</a> <br> <br>--}}
            @foreach ($orders as $item)
            <div class="row search-item cart-list-devider">
             <div class="col-sm-3">
                <a href="{detail/{{$item->id}}">
                    <img class="tranding-img" src="{{$item->gallery}}">
                    </a>
             </div>

             <div class="col-sm-3">
               
                    <div class="">
                      <h2>{{$item->name}}</h2>     
                      <h4> Delivery Status:{{$item->status}}</h4> 
                      <h4> Payment Status:{{$item->payment_status}}</h4> 
                      <h4> Payment Method:{{$item->payment_method}}</h4>   
                      <h4> Delivery  Address:{{$item->address}}</h4>     
                      <h4> Price:{{$item->price}}</h4>             
                    </div>
                    </a>
             </div>
             <div class="col-sm-3">
             {{--!  <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning"Remove From Cart</button> </a> --}}
         </div>
           </div>
            @endforeach
                        {{-- <a class="btn btn-success"  href="/ordernow">Order Now</a> <br> <br> --}}
           </div>  
        </div>
   
</div>
@endsection