<template>

<div v-for="listing in Listings" :key="listing.id" class="bg-white shadow-md rounded-lg p-4 mb-4">

        <ListingAdress :Listing="listing" />
        <Link :href="route('Listing.edit',listing.id)">Edit</Link>
        <Link :href="route('Listing.destroy',listing.id)" method="DELETE" as="button" >Delete</Link>


</div>
</template>

<script setup>
import ListingAdress from '../../Components/ListingAdress.vue';
import {Link} from '@inertiajs/vue3';
defineProps({
    Listings:Array,
})
</script >