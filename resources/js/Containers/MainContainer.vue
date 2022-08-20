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
        refetchCart() {
            this.reloadCartTrigger = new Date().valueOf();
        }
    }
}
</script>

<template>
    <div>
        <NavbarComponent :key="reloadCartTrigger"/>
        <ProductContainer @addToCart="refetchCart"/>
    </div>
</template>
