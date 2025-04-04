<script setup>
import { ref, onBeforeMount } from 'vue'
import $ from 'jquery'
const slide = ref(1);
const posts = ref([]);
const loaded = ref(false);
loaded.value = false;
const loadPosts = () => {
    return $.ajax({
        type: "get",
        url: route.get('posts.list'),
        data: null,
        dataType: "json",
        processData: false,
    });
}
onBeforeMount(async () => {
    let res = await loadPosts();
    posts.value = res;
    loaded.value = true;
})


</script>
<template>
    <div class="main-banner" v-bind:data-loading="!loaded">
        <q-carousel v-show="loaded" swipeable navigation dark animated padding arrows v-model="slide" infinite
            transition-prev="slide-right" transition-next="slide-left">
            <q-carousel-slide :name="index" v-for="(group, index) in posts"
                class="row fit justify-start items-center q-gutter-xs q-col-gutter no-wrap">
                <div v-for="post in group" v-html="post.preview_text"
                    class="single-item rounded-borders col-6 full-height shadow-4"></div>
            </q-carousel-slide>
        </q-carousel>
        <div v-show="!loaded" style="width: 100%;height: 100%;" class="q-gutter-md row items-center">
            <div class="skeleton">
                <q-skeleton height="150px" />
                <div class="inner">
                    <q-skeleton width="650px" height="10px"/>
                    <q-skeleton width="660px" height="10px"/>
                    <q-skeleton width="645px" height="10px"/>
                </div>
                <div class="inner">
                    <q-skeleton width="450px" height="10px"/>
                    <q-skeleton width="446px" height="10px"/>
                    <q-skeleton width="468px" height="10px"/>
                </div>
            </div>
        </div>
    </div>
</template>