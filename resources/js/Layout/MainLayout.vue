<template>
    <Link :href="route('Listing.index')">Index</Link>&nbsp;
    <Link href="/show">Show</Link>&nbsp;
    <Link :href="route('Listing.create')">Create listing</Link>&nbsp;
    <div v-if="flash" class="Sucess">
        {{flash }}
    </div>
<slot>  </slot>
</template>

<script setup>
import {Link,usePage} from '@inertiajs/vue3';
import { computed }  from 'vue';
import {ref} from 'vue';
const page = usePage();
const flash=computed(()=>page.props.flash.success)
/*
const timer=ref(0);
setInterval(() => {
    timer.value++;
}, 1000);
*/

</script>

<style scoped>
.Sucess {
    background-color: green;
    color: white;
    padding: 10px;
    border-radius: 5px;
    margin-bottom: 20px;
    font-size: 16px;
    font-weight: bold;
}
</style>