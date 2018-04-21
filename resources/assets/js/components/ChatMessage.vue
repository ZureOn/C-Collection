<template lang="html">
    <div class="chat-message">
        <p>{{ message.message }}</p>
        <small>{{ message.user }}</small>
    </div>
</template>

<script>
    export default {
        ////local data
        // data(){
        //     return{
        //         message: "this is my first message in ChatAPP",
        //         user: "John Doe"
        //     }
        // }
        props:['message']
    }
</script>

<style lang="css">
    .chat-message{
        padding: 1rem;
    }

    .chat-message p{
        margin-bottom: .5rem;
    }
</style>
