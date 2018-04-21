<template lang="html">
    <div class="chat-log">
    	<chat-message  v-for="message in messages" :key="messages.id" v-bind:message="message"></chat-message>
    </div>
</template>

<script>
    export default {
        data(){
        	return{
        		messages: [
	        		{
	        			message: "hey!",
	        			user: "John Doe"
	        		},
	        		{
	        			message: "hello every1!",
	        			user: "Jane Doe"
	        		},
	        		{
	        			message: "hi :)",
	        			user: "Jane Doe"
	        		}
        		]
        	}
        }
    }
</script>

<style lang="css">
    .chat-log .chat-message:nth-child(even){
    	background-color: #D1D1D1
    }
</style>
