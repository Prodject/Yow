<template>
    <div class="conversation">
        <h1>{{ contact ? contact.name : 'Select a Contact' }}</h1>
        <MessagesFeed :contact="contact" :messages="messages" />
        <MessagesComposer @send="sendMessage" />
    </div>
</template>

<script>
import MessagesFeed from './MessagesFeed';
import MessagesComposer from './MessagesComposer';

export default {
    props: {
        contact: {
            type: Object,
            default: null
        },
        messages: {
            type: Array,
            default: []
        }
    },
    methods: {
        sendMessage(text) {
            console.log(text);
        }
    },
    components: {MessagesFeed, MessagesComposer}
}
</script>
