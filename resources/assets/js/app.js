
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('chat-message', require('./components/ChatMessage.vue'));
Vue.component('chat-log', require('./components/ChatLog.vue'))
Vue.component('chat-composer', require('./components/ChatComposer.vue'))

const app = new Vue({
    el: '#app',
    data:{
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
    },
    methods:{
    	//add to the chat log and update the Database
    	addMessage(message){
    		//add to the chat log
    		this.messages.push(message);
    		console.log('message Added') 
    		//persist to the DB

    	}

    }
});
