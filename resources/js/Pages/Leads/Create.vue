<script setup>
import { useForm } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'

const form = useForm({
    company: '',
    first_name: '',
    last_name: '',
    email: '',
    phone: '',
    opportunity_value: '',
})

const submit = () => {
    form.post(route('leads.store'))
}
</script>

<template>
    <div class="p-6">

        <h1 class="text-2xl font-bold mb-4">
            Create Lead
        </h1>

        <Link
            :href="route('leads.index')"
            class="text-blue-500"
        >
            Back to Leads
        </Link>


        <form
            @submit.prevent="submit"
            class="mt-6"
        >

            <!-- Company -->
            <div class="mb-4">
                <label>Company</label>

                <input
                    v-model="form.company"
                    class="border p-2 w-full"
                />

                <div v-if="form.errors.company">
                    {{ form.errors.company }}
                </div>
            </div>


            <!-- First Name -->
            <div class="mb-4">
                <label>First Name</label>

                <input
                    v-model="form.first_name"
                    class="border p-2 w-full"
                />

                <div v-if="form.errors.first_name">
                    {{ form.errors.first_name }}
                </div>
            </div>


            <!-- Last Name -->
            <div class="mb-4">
                <label>Last Name</label>

                <input
                    v-model="form.last_name"
                    class="border p-2 w-full"
                />
            </div>


            <!-- Email -->
            <div class="mb-4">
                <label>Email</label>

                <input
                    v-model="form.email"
                    type="email"
                    class="border p-2 w-full"
                />

                <div v-if="form.errors.email">
                    {{ form.errors.email }}
                </div>
            </div>


            <!-- Phone -->
            <div class="mb-4">
                <label>Phone</label>

                <input
                    v-model="form.phone"
                    class="border p-2 w-full"
                />
            </div>


            <!-- Opportunity Value -->
            <div class="mb-4">
                <label>
                    Opportunity Value
                </label>

                <input
                    v-model="form.opportunity_value"
                    type="number"
                    class="border p-2 w-full"
                />
            </div>


            <button
                type="submit"
                :disabled="form.processing"
                class="bg-blue-500 text-white px-4 py-2"
            >
                Create Lead
            </button>

        </form>

    </div>
</template>