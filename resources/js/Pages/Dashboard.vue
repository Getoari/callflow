<script setup>

defineProps({
    stats:Object
})

</script>


<template>

<h1>
CallFlow Dashboard
</h1>


<div>

Hot Leads:
{{stats.hot}}

</div>

</template>