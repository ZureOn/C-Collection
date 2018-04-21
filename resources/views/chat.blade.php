<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>ChatApp</title>
		<link rel="stylesheet" href="css/app.css">
	</head>
	<body>
		<h1>ChatApp</h1>
		<div id="app" class="container">
			{{-- <chat-nav></chat-nav> --}}
			<chat-log v-bind:messages="messages"></chat-log>
			<chat-composer v-on:messageSent="addMessage"></chat-composer>
		</div>		
		<script src="js/app.js" charset="UTF-8"></script>
	</body>
</html>