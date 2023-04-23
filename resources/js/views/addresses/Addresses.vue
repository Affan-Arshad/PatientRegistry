<script setup>
import { ref, onMounted } from 'vue'
import {API_BASE_URL} from '@/config'

const addresses = ref([])
const error = ref(null)

onMounted(
    async () => {
        try {
            const response = await fetch(`${API_BASE_URL}/addresses`)

            if (!response.ok) throw Error('Something went wrong')

            addresses.value = await response.json()

        } catch (err) {
            error.value = err.message
        }
    }
)
</script>

<template>
    <div class="container">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Addresses</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                </div>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <p v-if="!addresses.length && !error">Loading...</p>

        <table v-if="addresses.length" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Street Address</th>
                    <th scope="col" class="text-nowrap">Postal Code</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="address in addresses">
                    <td>{{ address.id }}</td>
                    <td>{{ address.street_address }}</td>
                    <td>{{ address.postal_code }}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary"
                            @click="$router.push({ name: 'AddressDetails', params: { id: address.id } })">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>