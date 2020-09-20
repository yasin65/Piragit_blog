@extends('layouts.dash')
@section('admin_content')

	<div class="row-fluid sortable">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>

				<h2><a class="btn btn-success" href="{{route('category.create')}}">create</a></h2>

				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
				</div>
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  <thead>
					  <tr>
						  <th>Category Name</th>
						  <th> Slug</th>
						  <th>Description</th>
						  <th>Status</th>
						  <th>Actions</th>
					  </tr>
				  </thead>   
				  <tbody>
				  	@foreach($categories as $category)
					<tr>
						<td>{{$category->name}}</td>
						<td class="center">{{$category->slug}}</td>
						<td class="center">{{$category->description}}</td>
						<td class="center">
							<span class="label label-success">{{$category->id}}</span>
						</td>
						<td class="center">
							<a class="btn btn-sm btn-success mr-1" href="{{route('category.edit',[$category->id])}}">
								<i class="fas fa-edit">edit</i>  
							</a>
							<form action="{{route('category.destroy',[$category->id])}}"class="mr-1"method="post">
								
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger"><i class="fas fa-trash">delete</button>
								
							</form>
						
							<a class="btn btn-sm btn-success mr-1" href="{{route('category.show',[$category->id])}}">
								<i class="fas fa-eye">view</i> 
							</a>
						</td>
					</tr>
					@endforeach
				  </tbody>
			  </table>            
			</div>
		</div><!--/span-->
	
	</div><!--/row-->


	@endsection