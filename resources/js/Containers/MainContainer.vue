<script>
import NavbarComponent from "../Components/NavbarComponent";
import ProductContainer from "./ProductContainer";

export default {
    name: "MainContainer",
    components: {
        NavbarComponent,
        ProductContainer
    },
    data() {
        return {
            reloadCartTrigger: false,
        }
    },
    methods: {
        fetchCart() {
            this.reloadCartTrigger = new Date().valueOf();
        }
    }
}
</script>

<template>
    <div>
        <NavbarComponent :key="reloadCartTrigger"/>
        <ProductContainer @addToCart="fetchCart"/>
    </div>
</template>
