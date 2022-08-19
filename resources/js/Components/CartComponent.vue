
<script>
export default {
    props: {
        toggleState: {
            type: Boolean
        }
    },
    name: "CartComponent"
}
</script>

<style scoped>

</style>

<template>
    <div class="cart-dropdown" v-if="toggleState === true">
        <div class="cart-dropdown-list h-[300px]">
            <div class="cart-dropdown-item">
                <div class="cart-dropdown-img">
                    <img class=""
                         src="https://mrdevelopertestassets.s3.ap-southeast-2.amazonaws.com/classic-tee.jpg" alt="">
                </div>
                <div>
                    <div class="cart-dropdown-item-details">
                        <h5 class="cart-dropdown-item-details__name">Card title</h5>
                        <p class="cart-dropdown-item-details__count">3x <span class="cart-dropdown-item-details__price">$75.00</span></p>
                        <p class="cart-dropdown-item-details__size">Size: S</p>
                    </div>
                </div>
            </div>
            <div class="cart-dropdown-item">
                <div class="cart-dropdown-img">
                    <img class=""
                         src="https://mrdevelopertestassets.s3.ap-southeast-2.amazonaws.com/classic-tee.jpg" alt="">
                </div>
                <div>
                    <div class="cart-dropdown-item-details">
                        <h5 class="cart-dropdown-item-details__name">Card title</h5>
                        <p class="cart-dropdown-item-details__count">3x <span class="cart-dropdown-item-details__price">$75.00</span></p>
                        <p class="cart-dropdown-item-details__size">Size: S</p>
                    </div>
                </div>
            </div>
            <div class="cart-dropdown-item">
                <div class="cart-dropdown-img">
                    <img class=""
                         src="https://mrdevelopertestassets.s3.ap-southeast-2.amazonaws.com/classic-tee.jpg" alt="">
                </div>
                <div>
                    <div class="cart-dropdown-item-details">
                        <h5 class="cart-dropdown-item-details__name">Card title</h5>
                        <p class="cart-dropdown-item-details__count">3x <span class="cart-dropdown-item-details__price">$75.00</span></p>
                        <p class="cart-dropdown-item-details__size">Size: S</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
