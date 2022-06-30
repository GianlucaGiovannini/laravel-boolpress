// 0. If using a module system (e.g. via vue-cli), import Vue and VueRouter
// and then call `Vue.use(VueRouter)`.
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)


// 1. Define route components.
// These can be imported from other files

/*  SPOSTATO SU ROUTES.JS
import Home from "./Pages/Home";
import About from "./Pages/About";
import Posts from "./Pages/Posts";
import Post from "./Pages/Post"; 
*/


// 2. Define some routes
// Each route should map to a component. The "component" can
// either be an actual component constructor created via
// `Vue.extend()`, or just a component options object.
// We'll talk about nested routes later.

/* SPOSTATO SU ROUTES.JS
const routes = [
    { path: '/', name: 'home', component: Home },
    { path: '/about', name: 'about', component: About },
    { path: '/posts', name: 'posts', component: Posts },
    { path: '/posts/:slug', name: 'post', component: Post }
] 
*/
// QUELLO CHE HO SPOSTATO SU ROUTE.JS L'HO IMPORTATO QUI SOTTO
import routes from './routes'

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    mode: 'history', // serve a pulire l'URI e toglie # che sennò andrebbe a fine URI
    routes // short for `routes: routes`
})

// 4. Create and mount the root instance.
// Make sure to inject the router with the router option to make the
// whole app router-aware.
export default router;