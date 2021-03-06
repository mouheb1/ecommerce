@extends('layouts.admin')
@section('container')

<div class="app-content">	
	<div class="app-content--inner">

		<div class="card card-box mb-5">
    <div class="card-header">
        <h5 class="my-3">
            Create New Category
        </h5>
    </div>
    <div class="card-body">
        <form method="POST" action="{{route('category.update',$category->id)}}">
    	{{csrf_field()}}
    	{{method_field('PATCH')}} 

		        <div class="form-group col-md-6">
		            <label for="title">Title</label>
		            <input type="text" class="form-control" id="title" name="title" placeholder="Title" value=" {{$category->title}} ">
		        </div>
		        <div class="form-group col-md-6">	          
		            <input type="submit" class="form-control btn btn-sm btn-primary col-2" value="Update">
		        </div>
		    		    
		</form>

    </div>
</div>

	</div>
</div>
@stop