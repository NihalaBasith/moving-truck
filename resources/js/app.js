import "./bootstrap";
import { createApp } from 'vue';
import { createRouter, createWebHistory } from "vue-router";
import App from './App.vue';
import Home from './pages/HomeRoute.vue';
import About from './pages/AboutRoute.vue';
import Services from './pages/ServicesRoute.vue';
import Contacts from './pages/ContactsRoute.vue';
import '@fortawesome/fontawesome-free/css/all.css'




  const router = createRouter({
    history: createWebHistory(),
    routes:[
        { path: '/', component: Home },
        { path: '/about', component: About },
        { path: '/services', component: Services },
        { path: '/contacts', component: Contacts },

    ]
  });


createApp(App).use(router).mount('#app');


 