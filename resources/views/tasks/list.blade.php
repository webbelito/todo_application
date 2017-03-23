@extends('layouts.master')

@section('content')

	<div class="container main">

			<!-- Current Tasks -->

			<div class="row">

				@if(count($tasks) > 0)

					@foreach ($tasks as $task)


						@if(!$task->completed)

				  		<div class="col-sm-6 margin-bottom-10">

							<div class="card text-center 5">					

								<div class="card-header {{ $task->priorityBgColor() }}">

								</div>

								<div class="card-block">

									<h4 class="card-title">{{ $task->title }}</h4>
									<p class="card-text">{{ $task->description }}</p>

									<div class="card-footer text-muted margin-bottom-10">
										{{ $task->howLongAgo() }}
									</div>

									<form action="/tasks/{{ $task->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<button class="btn btn-md btn-danger" type="submit">Delete</button>

									</form>


								</div>

							</div>
						</div>

						@endif

					@endforeach

				@endif

			</div>

	</div>

@endsection
