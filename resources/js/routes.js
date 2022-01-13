import Vue from 'vue';
import Router from "vue-router";
import Home from "./views/Home";
import About from "./views/About";
import Archive from "./views/Archive";
import Contact from "./views/Contact";
import NotFound from "./views/404";
import PostsShow from "./views/PostsShow"

Vue.use(Router)

export default new Router({
    routes: [
        { path: '/', name: 'home', component: Home },
        { path: '/nosotros', name: 'about', component: About },
        { path: '/archivo', name: 'archive', component: Archive },
        { path: '/contacto', name: 'contact', component: Contact },
        { path: '/blog/:url', name: 'posts_show', component: PostsShow },
        { path: '*', component: NotFound },
    ],
    linkExactActiveClass: 'active',
})