<script setup>

import ScoreBadge from '@/Components/ScoreBadge.vue'
import { Link } from '@inertiajs/vue3'


defineProps({

stats:Object,

recentLeads:Array

})

</script>


<template>


<div class="p-6">


<h1 class="text-3xl font-bold">
CallFlow Dashboard
</h1>

<nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl px-6 py-4">

            <div class="flex items-center gap-6">

                <Link
                    :href="route('dashboard')"
                    class="text-gray-600 hover:text-blue-600 transition"
                    :class="{
                        'text-blue-600 font-semibold': route().current('dashboard')
                    }"
                >
                    Dashboard
                </Link>


                <Link
                    :href="route('leads.index')"
                    class="text-gray-600 hover:text-blue-600 transition"
                    :class="{
                        'text-blue-600 font-semibold': route().current('leads.*')
                    }"
                >
                    Leads
                </Link>

            </div>

        </div>
    </nav>

<div class="grid grid-cols-4 gap-4 mt-6">


<div class="bg-white p-4 shadow">
Total

<h2>
{{stats.total}}
</h2>

</div>



<div class="bg-white p-4 shadow">
Hot Leads

<h2>
{{stats.hot}}
</h2>

</div>


<div class="bg-white p-4 shadow">
Warm Leads

<h2>
{{stats.warm}}
</h2>

</div>


<div class="bg-white p-4 shadow">
Pipeline

<h2>
€{{stats.pipeline}}
</h2>

</div>


</div>




<h2 class="mt-8 text-xl">
Recent Leads
</h2>


<div
v-for="lead in recentLeads"
:key="lead.id"
class="p-3 border mt-2"
>


{{lead.first_name}}
{{lead.last_name}}


<ScoreBadge
:score="lead.score"
/>


</div>


</div>


</template>