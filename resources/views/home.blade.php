@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Fill fill out details and submit it before time.
                    @if(@auth)
                    <form action="PostController@store", method="post">
                      <div class="form-group col-md-3 mb-3">
                        <label for="maths">Maths</label>
                        <input type="number" class="form-control" id="maths" placeholder="Enter marks" required>
                      </div>
                      <div class="form-group col-md-3 mb-3">
                        <label for="spcc">SPCC</label>
                        <input type="number" class="form-control" id="spcc" placeholder="Enter marks" required>
                      </div>
                      <div class="form-group col-md-3 mb-3">
                        <label for="dwm">DWM</label>
                        <input type="number" class="form-control" id="dwm" placeholder="Enter marks" required>
                      </div>
                      <div class="form-group col-md-3 mb-3">
                        <label for="ml">ML</label>
                        <input type="number" class="form-control" id="ml" placeholder="Enter marks" required>
                      </div>
                      <div class="form-group col-md-3 mb-3">
                        <label for="se">SE</label>
                        <input type="number" class="form-control" id="se" placeholder="Enter marks" required>
                      </div>
                      <a href="/courses/show" class="btn btn-primary">Submit</a>
                   </form>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
