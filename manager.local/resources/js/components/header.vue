<script setup>
import { ref, onMounted } from 'vue';

const show = ref(false);
onMounted( async () => {
    show.value = true
}) 


</script>
<template>
    <q-slide-transition v-show="show" duration="1200">
        <div class="header">
                      
        </div>
    </q-slide-transition>
</template>