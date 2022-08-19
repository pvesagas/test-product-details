<script>

export default {
    name: "ProductImageComponent",
    props: {
        img: String
    },

}
</script>

<template>
    <div class="product-image">
        <img id="img" v-bind:src="img" alt="">
    </div>
</template>
