<script setup>

import { onMounted } from 'vue';

import { useWelcomeStore } from '@/stores/welcome';

const welSotre = useWelcomeStore()

onMounted(() => {

  welSotre.welcome()

})

</script>

<template>

  <h1>{{ welSotre.hello }}</h1>

</template>
