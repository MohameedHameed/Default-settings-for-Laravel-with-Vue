<template>
    <Link href="/">Index</Link>&nbsp;
    <Link href="/show">Show</Link>
    <div>timer is {{ timer }}</div>
<slot>  </slot>
</template>

<script setup>
import {Link} from '@inertiajs/vue3';
import {ref} from 'vue';

const timer=ref(0);
setInterval(() => {
    timer.value++;
}, 1000);


</script>

