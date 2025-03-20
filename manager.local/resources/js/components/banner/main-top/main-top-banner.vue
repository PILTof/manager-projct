<script setup>
import { ref, onMounted } from 'vue'
import $ from 'jquery'
const slide = ref(1);
const posts = ref([]);

onMounted(() => {
    $.ajax({
        type: "get",
        url: window.route.get('posts.list'),
        data: null,
        dataType: "json",
        processData: false,
        success: function (response) {
            posts.value = response;
        },
        error(arg1, arg2, arg3) {
            console.log(arguments)
        }
    });

})


</script>
<template>
    <div class="main-banner">
        <h4 class="banner-label">Последние новости</h4>
        <q-carousel keep-alive swipeable navigation dark animated arrows v-model="slide" infinite transition-prev="slide-right"
            transition-next="slide-left">
            <q-carousel-slide :name="post.id" v-for="post in posts">
                <q-paralax>
                    {{ post.preview_text }}
                </q-paralax>
            </q-carousel-slide>
        </q-carousel>
    </div>
</template>