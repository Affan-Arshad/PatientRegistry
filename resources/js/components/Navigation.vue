<script setup>
import { computed } from 'vue'
import { routes } from '../router';

const selectedRoutes = [
    'Home',
    'Patients',
    'Addresses',
    'Islands'
]
const menuItems = computed(() => routes.filter((route) => selectedRoutes.includes(route.name)))
</script>

<template>
    <header class="p-3 mb-3 border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li v-for="route in menuItems">
                        <router-link v-slot="{ isActive }" class="text-decoration-none" :to="route.path">
                            <span class="nav-link px-2 link-dark" :class="[isActive && 'text-decoration-underline']">{{ route.name }}</span>
                        </router-link>
                    </li>
                </ul>

            </div>
        </div>
    </header>
</template>