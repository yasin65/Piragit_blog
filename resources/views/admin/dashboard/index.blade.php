@extends('layouts.dash')
@section('admin_content');
<div class="row-fluid">	

				<a class="quick-button metro yellow span2">
					<i class="icon-group"></i>
					<p>Users</p>
					<span class="badge">237</span>
				</a>
				<a href="{{route('post.index')}}" class="quick-button metro red span2">
					<i class="icon-comments-alt"></i>
					<p>Post</p>
					<span class="badge">46</span>
				</a>
				<a href="{{route('post.index')}}" class="quick-button metro blue span2">
					<i class="icon-shopping-cart"></i>
					<p>Orders</p>
					<span class="badge">13</span>
				</a>
				<a href="{{route('category.index')}}" class="quick-button metro green span2">
					<i class="icon-barcode"></i>
					<p>Category</p>
				</a>
				<a href="{{route('tag.index')}}" class="quick-button metro pink span2">
					<i class="icon-envelope"></i>
					<p>Tag</p>
					<span class="badge">88</span>
				</a>
				<a class="quick-button metro black span2">
					<i class="icon-calendar"></i>
					<p>Calendar</p>
				</a>
				
				<div class="clearfix"></div>
								
			</div>
@endsection