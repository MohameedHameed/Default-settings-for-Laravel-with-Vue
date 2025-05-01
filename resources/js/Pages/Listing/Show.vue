<template>
        <ListingAdress :Listing="Listing" />

</template>

<script setup>
import ListingAdress from '../../Components/ListingAdress.vue';

defineProps({
    Listing:Object,
})
</script>