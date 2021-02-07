@extends('master')
@section('content')
<div class="custom-product">
         <div class="col-sm-9">
          <div class="trending-wrapper">
            <h2>Cart List</h2>
              @foreach ($products as $item)
              <div class="row search-item cart-list-divider">

                <div class="col-sm-3">
                  <a href="detail/ {{$item->id}} ">
                    <img class="trending-img" src=" {{$item->gallery}} ">
                    </a>

                </div>
                <div class="col-sm-3">
                 
                    <div class="">
                      <h2>{{$item->name}}</h2>
                      <h5>{{$item->description}}</h5>
                    </div>

                </div>
                <div class="col-sm-3">
                  <a href="/removecart/{{$item->cart_id}} " class="btn btn-warning">Remove From Cart</a>

                </div>
              </div>
              @endforeach
            </div>
         </div>
</div>
@endsection