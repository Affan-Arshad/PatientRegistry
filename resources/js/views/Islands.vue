<script setup>
import { API_BASE_URL } from '@/config.js'
import { ref, onMounted } from 'vue'

const islands = ref(null)
const error = ref(null)

onMounted(() => {
    axios.get(`${API_BASE_URL}/islands`)
        .then(response => {
            if (response.status !== 200) throw Error('Something went wrong')
            islands.value = response.data
        })
        .catch(err => {
            error.value = err.message
        })
})

</script>

<template>
    <div class="container">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Islands</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">Export</button> -->
                </div>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <p v-if="!islands && !error">Loading...</p>

        <table v-if="islands?.length" class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Atoll</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="island in islands">
                    <td>{{ island.id }}</td>
                    <td>{{ island.atoll }}</td>
                    <td>{{ island.name }}</td>
                </tr>
            </tbody>
        </table>
        
        <div v-if="islands?.length === 0">No islands in the DB</div>
    </div>
</template>