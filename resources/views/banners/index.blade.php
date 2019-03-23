@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/home" class="btn btn-primary">Go back</a>
            <br><br>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                   @if(count($banners) > 0)
                        @foreach($banners as $banner)                
                                       <h3>{{$banner->banner_image}}</h3>
                            <br>
                        @endforeach
                   @else
                    <p>No post yet.</p>
                   @endif
                </div>
            </div>
        </div>
    </div>
    
<div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
 
  <ol class="carousel-indicators">
   @foreach( $banners as $banner )
      <li data-target="#carouselExampleControls" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
   @endforeach
  </ol>
 
  <div class="carousel-inner" role="listbox">
    @foreach( $banners as $banner )
       <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
           <img class="d-block img-fluid" src="/storage/cover_images/{{$banner->banner_image}}" alt="{{ $banner->banner_image}}">
              <div class="carousel-caption d-none d-md-block">
                 <h3>{{ $banner->banner_image }}</h3>
                 <p>{{ $banner->banner_image }}</p>
              </div>
       </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    
</div>


@endsection
