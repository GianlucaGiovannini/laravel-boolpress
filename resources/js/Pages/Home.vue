<template>
    <div class="page">

        <div class="p-5 bg-dark text-white">
            <div class="container">
                <h1 class="display-3">BoolPress Blog</h1>
                <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, quos?</p>
            </div>
        </div>

        <section class="recent_articles">
            <div class="container py-4">
                <h2>Recent Articles</h2>
                <div class="row py-5">
                    <div class="col" v-for="post in posts" :key="post.id">
                        <div class="card">
                            <img :src="'/storage/' + post.cover_image" :alt="post.title">
                            <div class="card-body">
                                <p>
                                    {{post.content.slice(0, 200) + '...'}}
                                </p>
                                <a href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="go_to_blog text-center">
                    <router-link class="btn btn-primary" :to="{name: 'posts'}"> Go To My Blog</router-link>
                </div>
            </div>
        </section>


    </div>
</template>

<script>

export default {
    name: 'Home',
    data() {
        return {
            posts: ''
        }
    },
    methods: {

    },
    mounted() {

        axios
            .get('/api/posts')
            .then((response) => {
                const posts = response.data.data
                this.posts = posts.slice(0, 4)
            }).catch(e => {
                console.error(e);
            })

    }
}

</script>