@extends('master')
@section('content')
<div class="coustom-product">        
        <div class="col-sm-6">
         
            <table class="table table-striped">
              
                <tbody>
                  <tr>
                    <td>Price</td>
                    <td>{{$total}} Rupees</td>
                  
                  </tr>
                  <tr>
                    <td>Tax</td>
                    <td>0 Rupees</td>
                  </tr>
                  <tr>
                    <td>Delivery</td>
                    <td>100</td>
                  </tr>

                  <tr>
                    <td>Total Amount</td>
                    <td>{{$total+100}}</td>
                  </tr>
                </tbody>
              </table>

              <form method="POST" action="orderplace">
                @csrf
                <div class="form-group">
                  <textarea placeholder="Enter your Address" name="address"  class="form-control" > </textarea>
                </div>
                <div class="form-group">
                    <label for="">Payement method</label>
        
                    <p><input type="radio" value="Cash"  name="payment"> <span>Online Payment</span> </p>
                    <p><input type="radio" value="Cash" name="payment"> <span>EMI Payment</span> </p>
                    <p><input type="radio" value="Cash" name="payment"> <span>Payment On delivery</span> </p>
                   
                </div>
                
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
              
        </div>
   
</div>
@endsection