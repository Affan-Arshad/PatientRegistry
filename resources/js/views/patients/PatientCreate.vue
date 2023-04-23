<script setup>
import { ref, onMounted } from 'vue'
import { API_BASE_URL } from '@/config';
import { useRouter } from 'vue-router'

const error = ref(null)
const islands = ref([])
const router = useRouter()

const formData = ref({
    name: '',
    dob: '',
    national_id: '',
    street_address: '',
    postal_code: '',
    address_id: ''
})

const submitForm = () => {
    axios.post(`${API_BASE_URL}/patients`, formData.value)
        .then((response) => {
            if (response.statusText !== "Created") throw Error(response.statusText)
            router.push({ name: 'Patients' })
        })
        .catch(err => {
            error.value = err.message
        })
}

onMounted(() => {
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
            <h1 class="h2">Create a Patient</h1>
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
                <input v-model="formData.name" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">DOB</label>
                <input v-model="formData.dob" type="date" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">National ID</label>
                <input v-model="formData.national_id" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Street Address</label>
                <input v-model="formData.street_address" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Postal Code</label>
                <input v-model="formData.postal_code" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label class="form-label">Island</label>
                <select v-model="formData.island_id" class="form-select">
                    <option v-for="island in islands" :key="island.id" :value="island.id">{{ island.atoll }} {{ island.name
                    }}</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <div v-else>Loading...</div>
    </div>
</template>