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

									<div class="row">

										<div class="col-sm-6 col-md-2">

											<button class="btn btn-md btn-danger" data-toggle="modal" data-target="#deleteTaskModal">
												<i class="fa fa-trash" aria-hidden="true"></i>
											</button>

										</div>

										<div class="col-sm-6 col-md-2 offset-md-8">

											<form action="/tasks/{{ $task->id }}" method="POST">

												{{ csrf_field() }}
												{{ method_field('PATCH') }}

												<button class="btn btn-md btn-success" type="submit" name="completed" value="1"><i class="fa fa-check" aria-hidden="true"></i></button>

											</form>

										</div>

									</div>

								</div>

							</div>

						</div>

						@endif

					@endforeach

				@endif

			</div>

	</div>

@endsection
