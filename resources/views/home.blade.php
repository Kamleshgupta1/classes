@extends('layouts.app')

@section('content')

<div class="homeparent">
    <div class="row">
        <div class="col-md-4">
            <ul id="tree1">
                                @foreach($categories as $category)
                                    <li>
                                        {{ $category->title }}
                                        @if(count($category->childs))
                                            @include('manageChild',['childs' => $category->childs])
                                        @endif
                                    </li>
                                @endforeach
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
</div>    

@endsection
