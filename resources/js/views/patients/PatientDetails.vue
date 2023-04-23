<script setup>
import { ref, toRefs, onMounted } from 'vue'
import { API_BASE_URL } from '@/config';
import { useRouter } from 'vue-router'

const router = useRouter()

const props = defineProps({
    id: String
})

const { id } = toRefs(props)

const patient = ref(null)
const error = ref(null)

const deletePatient = () => {
    const confirmed = confirm("Are you sure you want to delete this patient?")
    if (!confirmed) return
    axios.delete(`${API_BASE_URL}/patients/${id.value}`)
        .then(response => {
            if (response.status !== 200) throw Error(response.status)
            router.push({name: 'Patients'})
        })
        .catch(err => {
            error.value = err.message
        })
}

onMounted(() => {
    axios.get(`${API_BASE_URL}/patients/${id.value}`)
        .then(response => {
            if (response.status !== 200) throw Error('Something went wrong')
            patient.value = response.data
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
            <h1 v-if="patient" class="h2">{{ patient.name }}</h1>
            <h1 v-else class="h2">...</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div v-if="patient" class="btn-group me-2">
                    <button @click="$router.push({ name: 'PatientEdit', params: { id: patient.id } })"
                        class="btn btn-sm btn-outline-secondary">Edit</button>
                    <button @click="deletePatient()" class="btn btn-sm btn-outline-secondary">Delete</button>
                </div>
                <button v-else type="button" class="btn btn-sm btn-outline-secondary">...</button>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <div v-if="patient">
            <table class="table">
                <tbody>
                    <tr>
                        <th>Name: </th>
                        <td>{{ patient.name }}</td>
                    </tr>
                    <tr>
                        <th>DOB: </th>
                        <td>{{ patient.dob }}</td>
                    </tr>
                    <tr>
                        <th>National ID: </th>
                        <td>{{ patient.national_id }}</td>
                    </tr>
                    <tr>
                        <th>Address: </th>
                        <td>
                            {{ patient.address.street_address }}<br />
                            {{ patient.address.postal_code }} / {{ patient.address.island.atoll }} {{
                                patient.address.island.name }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div v-if="!patient && !error">
            Loading...
        </div>
    </div>
</template>