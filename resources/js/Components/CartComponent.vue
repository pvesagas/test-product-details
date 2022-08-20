
<script>
export default {
    name: "CartComponent",
    props: {
        toggleState: Boolean,
        cart: {}
    },
}
</script>

<template>
    <div class="cart-dropdown" v-if="toggleState === true">
        <div class="cart-dropdown-list h-[300px]">
            <div class="cart-dropdown-item" v-for="item in cart" :key="item.size">
                <div class="cart-dropdown-img">
                    <img :src="item.img" alt="">
                </div>
                <div class="cart-dropdown-item-details">
                    <h5 class="cart-dropdown-item-details__name" v-text="item.title"></h5>
                    <span class="cart-dropdown-item-details__count" v-text="item.count + 'x'"></span>
                    <span class="cart-dropdown-item-details__price" v-text="'$' + parseFloat(item.count * item.price).toFixed(2)"></span>
                    <p class="cart-dropdown-item-details__size" v-text="'Size: ' + item.size">Size: S</p>
                </div>
            </div>
        </div>
    </div>
</template>
