import { createRouter, createWebHistory } from 'vue-router';

import Home from '../views/Home.vue';
import Patients from '../views/patients/Patients.vue';
import PatientDetails from '../views/patients/PatientDetails.vue';
import Addresses from '../views/addresses/Addresses.vue';
import AddressDetails from '../views/addresses/AddressDetails.vue';
import Islands from '../views/Islands.vue';

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home
    },
    {
        path: '/patients',
        name: 'Patients',
        component: Patients
    },
    {
        path: '/patients/:id',
        name: 'PatientDetails',
        component: PatientDetails,
        props: true
    },
    {
        path: '/addresses',
        name: 'Addresses',
        component: Addresses
    },
    {
        path: '/addresses/:id',
        name: 'AddressDetails',
        component: AddressDetails,
        props: true
    },
    {
        path: '/islands',
        name: 'Islands',
        component: Islands
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export { router, routes };