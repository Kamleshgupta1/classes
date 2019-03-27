<!DOCTYPE html>
<html>
<head>
	<title>Laravel Category Treeview Example</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link href="/css/treeview.css" rel="stylesheet">
    
    <!-- dropzone for file upload -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
    
</head>
<body>
	<div class="container" style="margin-top:20px;">     
		<div class="panel panel-primary">
			<div class="panel-heading">Manage Documents</div>
	  		<div class="panel-body">
	  			<div class="row">
	  				<div class="col-md-6">
	  					<h3>File Structure</h3>
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
	  				<div class="col-md-6">
	  					<h3>Add New Category</h3>


				  			{!! Form::open(['route'=>'add.category']) !!}


				  				@if ($message = Session::get('success'))
									<div class="alert alert-success alert-block">
										<button type="button" class="close" data-dismiss="alert">×</button>	
									        <strong>{{ $message }}</strong>
									</div>
								@endif
                                @if (count($errors) > 0)
                                  <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert">×</button>	
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                      @foreach ($errors->all() as $error)
                                          <li>{{ $error }}</li>
                                      @endforeach
                                    </ul>
                                  </div>
                               @endif


				  				<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
									{!! Form::label('Title:') !!}
									{!! Form::text('title', old('title'), ['class'=>'form-control', 'placeholder'=>'Enter Title']) !!}
									<span class="text-danger">{{ $errors->first('title') }}</span>
								</div>


								<div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
									{!! Form::label('Category:') !!}
									{!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Category']) !!}
									<span class="text-danger">{{ $errors->first('parent_id') }}</span>
								</div>


								<div class="form-group">
									<button class="btn btn-success">Add New</button>
								</div>

                                {!! Form::close() !!}
                        
                                <hr>
                        
                                <h3>Upload New File</h3>
                        
                                <form method="post" action="{{url('category-tree-view')}}" enctype="multipart/form-data">
                                  {{csrf_field()}}
                                        {!! Form::label('File:') !!}
                                        <div class="input-group control-group increment" >
                                          <input type="file" name="filename[]" class="form-control">
                                          <div class="input-group-btn"> 
                                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                                          </div>
                                        </div>
                                        <div class="clone hide">
                                          <div class="control-group input-group" style="margin-top:10px">
                                            <input type="file" name="filename[]" class="form-control">
                                            <div class="input-group-btn"> 
                                              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                            </div>
                                          </div>
                                        </div>
                                        <br>
                                        <div class="form-group {{ $errors->has('parent_id') ? 'has-error' : '' }}">
                                            {!! Form::label('Folder:') !!}
                                            {!! Form::select('parent_id',$allCategories, old('parent_id'), ['class'=>'form-control', 'placeholder'=>'Select Folder']) !!}
                                            <span class="text-danger">{{ $errors->first('parent_id') }}</span>
                                        </div>

                                        <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>

                                  </form>   
	  				</div>
	  			</div>

	  			
	  		</div>
        </div>
    </div>
<!--    
<div class="container">
<form method="post" action="{{url('category-tree-view')}}" enctype="multipart/form-data">
  {{csrf_field()}}
        <div class="input-group control-group increment" >
          <input type="file" name="filename[]" class="form-control">
          <div class="input-group-btn"> 
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
          </div>
        </div>
        <div class="clone hide">
          <div class="control-group input-group" style="margin-top:10px">
            <input type="file" name="filename[]" class="form-control">
            <div class="input-group-btn"> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
            </div>
          </div>
        </div>

        <button type="submit" class="btn btn-primary" style="margin-top:10px">Submit</button>
</form>        
</div>
-->

    <script type="text/javascript">

        $(document).ready(function() {

          $(".btn-success").click(function(){ 
              var html = $(".clone").html();
              $(".increment").after(html);
          });

          $("body").on("click",".btn-danger",function(){ 
              $(this).parents(".control-group").remove();
          });

        });

    </script>
    <script src="/js/treeview.js"></script>
</body>
</html>