<template>
    <button class="btn btn-default" v-bind:class="{'btn-primary':liked}" v-text="text" v-on:click="like()"></button>
</template>

<script>
    export default{
        props:['article_id'],
        mounted() {
            this.$http.post('/api/like/' + this.article_id)
                .then(response => {
                    this.liked = response.data.liked
                })
        },
        data() {
            return {
                liked: false
            }
        },
        computed: {
            text() {
                return this.liked ?
                            '赞' : '取消赞'
            }
        },
        methods:{
            like() {
                this.$http.post('/api/user/like',{'article_id':this.article_id})
                    .then(response => {
                        this.liked = response.data.liked
                    })
            }
        },

    }
</script>