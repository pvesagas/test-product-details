<template>
    <div class="product-details">
        <h1 class="product-details__name">Classic Tee</h1>
        <h3 class="product-details__price">$75.00</h3>
        <p class="product-details__description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>

        <div class="product-details-sizes">
            <span class="product-details-sizes__label">
                Size
                <span class="product-details-sizes__input-required">*</span>
                <span class="product-details-sizes__input-selected">S</span>
            </span>
            <div class="product-details-sizes-buttons">
                <button class="product-details-sizes-buttons__select">S</button>
                <button class="product-details-sizes-buttons__select size-selected">M</button>
                <button class="product-details-sizes-buttons__select">L</button>
            </div>
        </div>

        <div class="product-details-add-to-cart-div">
            <button class="product-details-add-to-cart-btn">Add to cart</button>
        </div>
    </div>
</template>

<script>
export default {
    name: "ProductDetailsComponent"
}
</script>

<style scoped>

</style>
