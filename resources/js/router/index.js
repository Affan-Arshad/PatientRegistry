import { createRouter, createWebHistory } from 'vue-router';

import Home from '../views/Home.vue';
import Patients from '../views/Patients.vue';
import Addresses from '../views/Addresses.vue';
import Islands from '../views/Islands.vue';

const routes = [
    { path: '/', name: 'Home', component: Home },
    { path: '/patients', name: 'Patients', component: Patients },
    { path: '/addresses', name: 'Addresses', component: Addresses },
    { path: '/islands', name: 'Islands', component: Islands },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export {router, routes};