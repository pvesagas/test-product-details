<template>
    <div class="product-details">
        <h1 class="product-details__name" v-text="title"></h1>
        <h3 class="product-details__price" >$ <span v-text="parseFloat(price).toFixed(2)"></span></h3>
        <p class="product-details__description" v-text="description"></p>

        <div class="product-details-sizes">
            <span class="product-details-sizes__label">
                Size
                <span class="product-details-sizes__input-required">*</span>
                <span class="product-details-sizes__input-selected hidden">S</span>
            </span>
            <div class="product-details-sizes-buttons">
                <button class="product-details-sizes-buttons__select" v-for="size in sizeOptions" :key="size.id" v-text="size.label">S</button>

            </div>
        </div>

        <div class="product-details-add-to-cart-div">
            <button class="product-details-add-to-cart-btn">Add to cart</button>
        </div>
    </div>
</template>

<script>
export default {
    props: {
       price: {
           type: Number
       },
       sizeOptions: {
       },
       description: {
           type: String
       },
       title: {
           type: String
       },
    },
    name: "ProductDetailsComponent"
}
</script>

<style scoped>

</style>
