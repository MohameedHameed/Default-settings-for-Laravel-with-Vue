<template>
    <div class="max-w-xl mx-auto p-4">
      <h1 class="text-2xl font-bold mb-4">Create New Listing</h1>
      
      <form @submit.prevent="submit">
        <div class="mb-2">
          <label>Beds:</label>
          <input v-model.number="form.beds" type="number" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.beds">{{ form.errors.beds }}</div>
        </div>
  
        <div class="mb-2">
          <label>Baths:</label>
          <input v-model.number="form.baths" type="number" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.baths">{{ form.errors.baths }}</div>
        </div>
  
        <div class="mb-2">
          <label>Area (m²):</label>
          <input v-model.number="form.area" type="number" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.area">{{ form.errors.area }}</div>
        </div>
  
        <div class="mb-2">
          <label>City:</label>
          <input v-model="form.city" type="text" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.city">{{ form.errors.city }}</div>
        </div>
  
        <div class="mb-2">
          <label>Code:</label>
          <input v-model="form.code" type="text" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.code">{{ form.errors.code }}</div>
        </div>
  
        <div class="mb-2">
          <label>Street:</label>
          <input v-model="form.street" type="text" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.street">{{ form.errors.street }}</div>
        </div>
  
        <div class="mb-2">
          <label>Street Number:</label>
          <input v-model="form.street_nr" type="text" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.street_nr">{{ form.errors.street_nr }}</div>
        </div>
  
        <div class="mb-2">
          <label>Price ($):</label>
          <input v-model.number="form.price" type="number" class="border w-full p-2" />
          <div class="text-red-500 text-sm" v-if="form.errors.price">{{ form.errors.price }}</div>
        </div>
  
        <button class="bg-blue-500 text-white px-4 py-2 rounded">Save</button>
      </form>
    </div>
  </template>
  
  <script setup>
  import { useForm } from '@inertiajs/vue3'
  
  const form = useForm({
    beds: '',
    baths: '',
    area: '',
    city: '',
    code: '',
    street: '',
    street_nr: '',
    price: ''
  })
  
  const submit = () => {
    form.post('/Listing')
  }
  </script>
  