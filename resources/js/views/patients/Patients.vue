<script setup>
import { API_BASE_URL } from '@/config.js'
import { ref, onMounted } from 'vue'

const patients = ref([])
const error = ref(null)

onMounted(
    async () => {
        try {
            const response = await fetch(`${API_BASE_URL}/patients`)

            if (!response.ok) throw Error('Something went wrong')

            patients.value = await response.json()

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
            <h1 class="h2">Patients</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button type="button" class="btn btn-sm btn-outline-secondary">Add</button>
                </div>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <p v-if="!patients.length && !error">Loading...</p>

        <table v-if="patients.length" class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">National ID</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="patient in patients">
                    <td>{{ patient.id }}</td>
                    <td>{{ patient.name }}</td>
                    <td>{{ patient.dob }}</td>
                    <td>{{ patient.national_id }}</td>
                    <td>
                        <button class="btn btn-sm btn-outline-secondary"
                            @click="$router.push({ name: 'PatientDetails', params: { id: patient.id } })">View</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>