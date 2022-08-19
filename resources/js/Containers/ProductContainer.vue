<script>
import ProductImageComponent from "../Components/ProductImageComponent";
import ProductDetailsComponent from "../Components/ProductDetailsComponent";

export default {
    name: "ProductContainer",
    components: {
        ProductDetailsComponent,
        ProductImageComponent
    }

}
</script>

<style scoped>

</style>


<template>
    <div class="product-container">
        <ProductImageComponent/>
        <ProductDetailsComponent/>
    </div>
</template>
