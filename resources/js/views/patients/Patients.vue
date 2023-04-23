<script setup>
import { API_BASE_URL } from '@/config.js'
import { ref, onMounted } from 'vue'

const patients = ref(null)
const error = ref(null)

onMounted(() => {
    axios.get(`${API_BASE_URL}/patients`)
        .then(response => {
            if (response.status !== 200) throw Error('Something went wrong')
            patients.value = response.data
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
            <h1 class="h2">Patients</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button @click="$router.push({ name: 'PatientCreate' })" type="button"
                        class="btn btn-sm btn-outline-secondary">Add</button>
                </div>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <p v-if="!patients && !error">Loading...</p>

        <table v-if="patients?.length" class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">DOB</th>
                    <th scope="col">National ID</th>
                    <th scope="col">Address</th>
                    <th scope="col" class="text-center" width="1">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="patient in patients" class="hover:bg-red">
                    <td>{{ patient.id }}</td>
                    <td>{{ patient.name }}</td>
                    <td>{{ patient.dob }}</td>
                    <td>{{ patient.national_id }}</td>
                    <td>
                        {{ patient.address.street_address }}<br />
                        {{ patient.address.postal_code }} / {{ patient.address.island.atoll }} {{ patient.address.island.name }}
                    </td>
                    <td width="1">
                        <div class="btn-group me-2">
                            <button @click="$router.push({ name: 'PatientDetails', params: { id: patient.id } })"
                                class="btn btn-sm btn-outline-secondary">View</button>
                            <button @click="$router.push({ name: 'PatientEdit', params: { id: patient.id } })"
                                class="btn btn-sm btn-outline-secondary">Edit</button>
                            <button class="btn btn-sm btn-outline-secondary">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div v-if="patients?.length === 0">No patients in the DB</div>
    </div>
</template>