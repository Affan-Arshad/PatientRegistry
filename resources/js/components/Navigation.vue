<script setup>
import { routes } from '../router';
</script>

<template>
    <div>
        <ul>
            <li v-for="route in routes">
                <router-link :to="route.path">{{ route.name }}</router-link>
            </li>
        </ul>
    </div>
</template>