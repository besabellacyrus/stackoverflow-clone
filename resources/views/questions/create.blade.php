@extends('layouts.app')

@section ('content')
	<div class="container">

		<div class="row">
			
			<div class="col-md-8">
				<h1>Ask Question</h1>
				<form action="" method="POST" accept-charset="utf-8">
					{{ csrf_field() }}
					
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" id="title" class="form-control" name="title"></input>
					</div>
					<div class="form-group">
						<label for="body">Body</label>
						<textarea id="body" class="form-control" name="body"></textarea>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="tags">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Publish</button>
					</div>

				</form>

			</div>
		</div>
		
	</div>

@endsection