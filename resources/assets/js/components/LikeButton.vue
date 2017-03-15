<template>
    <span class="bartext voteid26536" v-bind:class="{'single_views_over':liked}><a href="#" id="aZanImg"></a></span>
</template>

<script>
    export default{
        props:['user_id'],
        mounted() {
            this.$http.post('/api/like/' + this.user_id)
                .then(response => {
                    this.liked = response.data.liked
                })
        },
        data() {
            return {
                liked: false
            }
        },
        methods:{
            like() {
                this.$http.post('/api/user/like',{'user_id':this.user_id})
                    .then(response => {
                        this.liked = response.data.liked
                    })
            }
        },

    }
</script>