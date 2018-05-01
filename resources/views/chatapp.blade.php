@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card" style="">
					<div class="card-header d-flex mb-3">
						<div class="mr-auto p-2">
							ChatAPP
						</div>
						<div class="p-2">
							You Are now Online...
						</div>
					</div>

					<div id="app" class="chatapp" class="container">
						{{-- <chat-nav></chat-nav> --}}
						<chat-log v-bind:messages="messages"></chat-log>
						<chat-composer v-on:message-sent="addMessage"></chat-composer>
					</div>	
				</div>
			</div>
		</div>
	</div>
@endsection