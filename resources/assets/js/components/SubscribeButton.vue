<template>
    <div>
        <button class="btn btn-primary ml-4" @click="subscribeUser" v-text="buttonText"></button>
        
    </div>
</template>

<script>
    export default {
        props: ['userId', 'subscribe'],
        

        mounted() {
            console.log('Component mounted.')
        },

        data: function (){
            return {
                status: this.subscribe,
            }
        },

        methods: {
            subscribeUser(){
                axios.post('/subscribe/' + this.userId)
                .then(response => {

                    this.status = ! this.status;

                    console.log(response.data);
                })
                .catch(errors => {
                    if (errors.response.status == 401){
                        window.location = '/login';
                    }
                });
            }
        },

        computed: {
            buttonText(){
                return (this.status) ? 'UnSubscribe' : 'Subscribe';
            }
        }
    }
</script>
