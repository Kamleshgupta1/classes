@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="/home" class="btn btn-primary">Go back</a>
            <br><br>
            <div class="card">
                <div class="card-header"><b><h3>Your total marks</h3></b></div>
                <div class="card-body">
                    @if(!Auth::guest())
                        @if(@auth)
                            <form>
                              <div class="form-group col-md-3 mb-3">
                                <h3>hh</h3>
                              </div>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!--

-->