<script>
import NavbarComponent from "../Components/NavbarComponent";
import ProductContainer from "./ProductContainer";
export default {
    name: "MainContainer",
    components: {
        NavbarComponent,
        ProductContainer
    }
}
</script>

<template>
    <div>
        <NavbarComponent/>
        <ProductContainer/>
    </div>
</template>

<style scoped>

</style>
