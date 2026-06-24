<script setup>

import {Link} from '@inertiajs/vue3'


defineProps({

leads:Object

})


</script>


<template>


<div class="p-6">


<h1 class="text-2xl">
Leads
</h1>


<Link
href="/leads/create"
class="underline"
>
New Lead
</Link>



<table class="mt-5 w-full">


<tr
v-for="lead in leads.data"
:key="lead.id"
>


<td>
{{lead.first_name}}
{{lead.last_name}}
</td>


<td>
{{lead.company}}
</td>


<td>
{{lead.score}}
</td>


<td>
{{lead.status}}
</td>


</tr>


</table>


</div>


</template>