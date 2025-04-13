<script setup> 
const props = defineProps({
    "l-icon": {
        type: String,
        required: true
    }
})


</script>
<template>
    <div class="p-items-wrapper">
        <div class="label" for="">
            <div class="p-items-label">
                <i v-bind:class="props.lIcon"></i>
                <div>Программирование</div>
            </div>
            <a href="#">Все записи</a>
        </div>
        <div class="p-items">
            <p-item></p-item>
            <p-item></p-item>
            <p-item></p-item>
        </div>
    </div>
</template>