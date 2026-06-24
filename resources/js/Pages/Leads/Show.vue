<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
    lead: Object
})
</script>

<template>
    <div class="p-6">

        <div class="flex justify-between items-center mb-6">

            <h1 class="text-2xl font-bold">
                Lead Details
            </h1>

            <Link
                :href="route('leads.index')"
                class="text-blue-600 hover:underline"
            >
                Back to Leads
            </Link>

        </div>


        <div class="bg-white border rounded-lg shadow-sm p-6">

            <div class="mb-4">
                <h2 class="text-xl font-semibold">
                    {{ lead.company }}
                </h2>

                <p class="text-gray-600">
                    {{ lead.first_name }}
                    {{ lead.last_name }}
                </p>
            </div>


            <div class="space-y-2">

                <p>
                    <strong>Email:</strong>
                    {{ lead.email }}
                </p>


                <p>
                    <strong>Phone:</strong>
                    {{ lead.phone }}
                </p>


                <p>
                    <strong>Opportunity Value:</strong>
                    €{{ lead.opportunity_value }}
                </p>


                <p>
                    <strong>Score:</strong>
                    {{ lead.score }}/100
                </p>


                <p>
                    <strong>Status:</strong>
                    {{ lead.status }}
                </p>

            </div>


        </div>

    </div>
</template>