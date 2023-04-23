<script setup>
import { ref, toRefs, onMounted } from 'vue'
import { API_BASE_URL } from '@/config';

const props = defineProps({
    id: String
})

const { id } = toRefs(props)

const address = ref(null)
const error = ref(null)

onMounted(
    async () => {
        try {
            const response = await fetch(`${API_BASE_URL}/addresses/${id.value}`)

            if (!response.ok) throw Error('Something went wrong')

            address.value = await response.json()

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
            <h1 v-if="address" class="h2">{{ address.street_address }}</h1>
            <h1 v-else class="h2">...</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div v-if="address" class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Delete</button>
                </div>
                <button v-else type="button" class="btn btn-sm btn-outline-secondary">...</button>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <div v-if="address">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Street Address: </th>
                        <td>{{ address.street_address }}</td>
                    </tr>
                    <tr>
                        <th>Postal Code: </th>
                        <td>{{ address.postal_code }}</td>
                    </tr>
                    <tr>
                        <th>Island: </th>
                        <td>{{ address.island.atoll }} {{ address.island.name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div v-if="!address && !error">
            Loading...
        </div>
    </div>
</template>