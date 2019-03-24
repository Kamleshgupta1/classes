@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-4">
        <ul id="myUL">
          <li><span class="caret">Beverages</span>
            <ul class="nested">
              <li>Water</li>
              <li>Coffee</li>
              <li><span class="caret">Tea</span>
                <ul class="nested">
                  <li>Black Tea</li>
                  <li>White Tea</li>
                  <li><span class="caret">Green Tea</span>
                    <ul class="nested">
                      <li>Sencha</li>
                      <li>Gyokuro</li>
                      <li>Matcha</li>
                      <li>Pi Lo Chun</li>
                    </ul>
                  </li>
                </ul>
              </li>  
            </ul>
          </li>
        </ul>
    </div>
    
    <div class="col-8">
        <div class="row">
            <div class="col-10 mb-2">
                  <div class="card">
                    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
            </div>
            <div class="col-10">
                  <div class="card">
                    <img class="card-img-top" src=".../100px180/" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                    <div class="card-footer">
                      <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                  </div>
            </div>

        </div>
    </div>
    
</div>

@endsection
