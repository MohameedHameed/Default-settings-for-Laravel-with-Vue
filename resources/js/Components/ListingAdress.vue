<template>
    <div>
    <h2 class="text-xl font-bold"> beds{{ Listing.beds }}</h2>
    <p class="text-gray-700"> baths:{{ Listing.baths }}</p>
    <p class="text-gray-500">Price: ${{ Listing.price }}</p>
    <p class="text-gray-500">city: {{ Listing.city }}</p>
    <p class="text-gray-500">area {{ Listing.area }}</p>
    <p class="text-gray-500">strretname {{ Listing.street }}</p>
    <p class="text-gray-500">street_nr {{ Listing.street_nr }}</p>
</div>
</template>

<script setup>

defineProps({
    Listing:Object,
})
</script>