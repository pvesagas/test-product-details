<template>
    <div class="product-image">
        <img id="img" v-bind:src="img" alt="">
    </div>
</template>

<script>

export default {
    props: {
        img: String
    },
    name: "ProductImageComponent",

}
</script>

<style scoped>

</style>
