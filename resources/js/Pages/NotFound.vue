<template>
    <div class="page">

        <div class="p-5 bg-dark text-white">
            <div class="container">


                <h1 class="display-3">Ops! Page not found, 404</h1>
                <p class="lead">sorry the page you requested doesn't exist</p>


                <hr class="my-2">
                <p>More info</p>
                <p class="lead">
                    <router-link class="btn btn-primary btn-lg" :to="{ name: 'posts' }" role="button">
                        Read my post
                    </router-link>
                </p>
            </div>
        </div>

        <div class="container py-4">
            The page you requested was not found try to visit these pages:

            <ul>
                <li>
                    <router-link :to="{ name: 'home' }">HomePage</router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'home' }">About</router-link>
                </li>
                <li>
                    <router-link :to="{ name: 'home' }">Posts</router-link>
                </li>
            </ul>



        </div>

    </div>
</template>

<script>
export default {
    name: 'NotFound'
}
</script>

<style lang="scss" scoped>
main {
    min-height: 100vh;
}
</style>

