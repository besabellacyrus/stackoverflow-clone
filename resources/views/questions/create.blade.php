@extends('layouts.app')

@section ('content')
	<div class="container">

		<div class="row">
			
			<div class="col-md-8">
				<h1>Ask Question</h1>
				<form action="/question" method="POST" accept-charset="utf-8">
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" id="title" class="form-control" name="title" required>
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea id="body" class="form-control" name="body" required></textarea>
					</div>
					{{-- <div class="form-group">
						<label for="tags">Tags</label>
						<input type="text" id="tags" class="form-control" name="tags" placeholder="i.e sample, tags, here (separate it with ,)">
					</div> --}}
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Publish</button>
					</div>
				</form>
				@include ('layouts.error')

			</div>
		</div>
		
	</div>

@endsection