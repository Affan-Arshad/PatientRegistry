<script setup>
import { ref, onMounted } from 'vue'
import { API_BASE_URL } from '@/config'

const addresses = ref(null)
const error = ref(null)

const deleteAddress = (id) => {
    const confirmed = confirm("Are you sure you want to delete this address?")
    if (!confirmed) return
    axios.delete(`${API_BASE_URL}/addresses/${id}`)
        .then(response => {
            if (response.status !== 200) throw Error(response.status)
            addresses.value = addresses.value.filter(address => address.id !== id)
        })
        .catch(err => {
            error.value = err.message
        })
}

onMounted(() => {
    axios.get(`${API_BASE_URL}/addresses`)
        .then(response => {
            if (response.status !== 200) throw Error('Something went wrong')
            addresses.value = response.data
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
            <h1 class="h2">Addresses</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                    <button @click="$router.push({ name: 'AddressCreate' })" type="button"
                        class="btn btn-sm btn-outline-secondary">Add</button>
                </div>
            </div>
        </div>

        <div v-if="error" class="alert alert-danger fade show" role="alert">
            {{ error }}
        </div>

        <p v-if="!addresses && !error">Loading...</p>

        <table v-if="addresses?.length" class="table table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Street Address</th>
                    <th scope="col" class="text-nowrap">Postal Code</th>
                    <th scope="col">Island</th>
                    <th scope="col" class="text-center" width="1">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="address in addresses">
                    <td>{{ address.id }}</td>
                    <td>{{ address.street_address }}</td>
                    <td>{{ address.postal_code }}</td>
                    <td>{{ address.island.atoll }} {{ address.island.name }}</td>
                    <td width="1">
                        <div class="btn-group me-2">
                            <button @click="$router.push({ name: 'AddressDetails', params: { id: address.id } })"
                                class="btn btn-sm btn-outline-secondary">View</button>
                            <button @click="$router.push({ name: 'AddressEdit', params: { id: address.id } })"
                                class="btn btn-sm btn-outline-secondary">Edit</button>
                            <button @click="deleteAddress(address.id)"
                                class="btn btn-sm btn-outline-secondary">Delete</button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <div v-if="addresses?.length === 0">No addresses in the DB</div>
    </div>
</template>