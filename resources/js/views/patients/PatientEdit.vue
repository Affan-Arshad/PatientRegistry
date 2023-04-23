<script setup>
import { ref, toRefs, onMounted } from 'vue'
import { API_BASE_URL } from '@/config';
import { useRouter } from 'vue-router'

const props = defineProps({
    id: String
})
const { id } = toRefs(props)

const patient = ref(null)
const error = ref(null)
const islands = ref([])
const router = useRouter()

const submitForm = () => {
    axios.put(`${API_BASE_URL}/patients/${id.value}`, {
        ...patient.value,
        street_address: patient.value.address.street_address,
        postal_code: patient.value.address.postal_code,
        island_id: patient.value.address.island_id,
    })
        .then((response) => {
            if (response.statusText !== "OK") throw Error(response.statusText)
            router.push({ name: 'Patients' })
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

    axios.get(`${API_BASE_URL}/islands`)
        .then(response => {
            if (response.status !== 200) throw Error('Something went wrong')
            islands.value = response.data;
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
            <h1 class="h2">Edit Patient</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button @click="$router.push({ name: 'Patients' })" type="button"
                        class="btn btn-sm btn-outline-secondary">Cancel</button>
                </div>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <form v-if="islands.length" @submit.prevent="submitForm">
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input v-model="patient.name" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">DOB</label>
                <input v-model="patient.dob" type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">National ID</label>
                <input v-model="patient.national_id" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Street Address</label>
                <input v-model="patient.address.street_address" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Postal Code</label>
                <input v-model="patient.address.postal_code" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Island</label>
                <select v-model="patient.address.island_id" class="form-select">
                    <option v-for="island in islands" :key="island.id" :value="island.id">{{ island.atoll }} {{ island.name
                    }}</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div v-else>Loading...</div>
    </div>
</template>