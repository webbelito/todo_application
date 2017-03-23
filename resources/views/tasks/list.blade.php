@extends('layouts.master')

@section('content')

	<div class="container main">

			<!-- Current Tasks -->

			<div class="row">

				@if(count($tasks) > 0)

					@foreach ($tasks as $task)

				  		<div class="col-sm-6 margin-bottom-10">

							<div class="card text-center 5">					

								<div class="card-header {{ $task->priorityBgColor() }}">

								</div>

								<div class="card-block">

									<h4 class="card-title">{{ $task->title }}</h4>
									<p class="card-text">{{ $task->description }}</p>

									<div class="card-footer text-muted margin-bottom-10">
										2 days ago, not functioning automatically now
									</div>

									<form action="/task/{{ $task->id }}" method="POST">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}

										<buton class="btn btn-md btn-danger">Delete</buton>

									</form>

									
									<buton class="btn btn-md btn-success">Complete</buton>

								</div>

							</div>
						</div>

					@endforeach

				@endif

			</div>

	</div>

@endsection
