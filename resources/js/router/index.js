import { createRouter, createWebHistory } from 'vue-router';

import Home from '../views/Home.vue';
import Patients from '../views/patients/Patients.vue';
import PatientDetails from '../views/patients/PatientDetails.vue';
import PatientCreate from '../views/patients/PatientCreate.vue';
import PatientEdit from '../views/patients/PatientEdit.vue';
import Addresses from '../views/addresses/Addresses.vue';
import AddressDetails from '../views/addresses/AddressDetails.vue';
import AddressCreate from '../views/addresses/AddressCreate.vue';
import AddressEdit from '../views/addresses/AddressEdit.vue';
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
        path: '/patients/create',
        name: 'PatientCreate',
        component: PatientCreate
    },
    {
        path: '/patients/edit/:id',
        name: 'PatientEdit',
        component: PatientEdit,
        props: true
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
        path: '/addresses/create',
        name: 'AddressCreate',
        component: AddressCreate
    },
    {
        path: '/addresses/edit/:id',
        name: 'AddressEdit',
        component: AddressEdit,
        props: true
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