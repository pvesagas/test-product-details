<script>
const BUTTON_CHECKED_CLASS = 'buttons__select--checked';
const BUTTON_CHECKED_CLASS_SELECTOR = '.buttons__select--checked';

export default {
    name: "ProductDetailsComponent",
    props: {
        product: {
            id: Number,
            price: Number,
            sizeOptions: {},
            description: String,
            title: String,
            img: String,
        }
    },
    data() {
        return {
            size: '',
        }
    },
    methods: {
        applyLoadingClass() {
            return {
                'productImage' : this.product.img === '' ? 'product-image--loading' : '',
                'productTitle' : this.product.title === '' ? 'product-details-name--loading' : '',
                'productPrice' : this.product.price === '' ? 'product-details-price--loading' : '',
            }
        },
        selectSize(selectedSize, oEvent) {
            this.size = selectedSize;
            this.removeActiveButton();

            oEvent.target.classList.add(BUTTON_CHECKED_CLASS);
        },
        removeActiveButton() {
            let selectedBtn = document.querySelector(BUTTON_CHECKED_CLASS_SELECTOR);
            if (selectedBtn) {
                selectedBtn.classList.remove(BUTTON_CHECKED_CLASS);
            }
        },
        removeSelectedSize() {
            this.size = '';
        },
        addToCart() {
            if (this.size === '') {
                alert('Please select size first!')
                return;
            }

            const oData = {
                id: this.product.id,
                price: this.product.price,
                size: this.size,
                description: this.product.description,
                title: this.product.title,
                img: this.product.img,
            }

            axios.post('/add', oData)
                .then((oResponse) => {
                    alert(this.product.title + ' is added to cart');
                    this.$emit('addToCart', (new Date().valueOf()));
                    this.removeActiveButton();
                    this.removeSelectedSize();
                })
                .catch((oError) => {
                    console.log(oError);
                });
        }
    }
}
</script>

<template>
    <div class="product-container">
        <div class="product-image" :class="[product.img === '' ? 'loading' : '']">
            <img v-if="product.img !== ''" id="img" v-bind:src="product.img" alt="">
        </div>
        <div class="product-details">
            <h1 class="product-details-name"
                :class="[product.title === '' ? 'loading' : '']"
                v-text="product.title"
            >
            </h1>

            <div class="product-details-price" :class="[product.price === 0 ? 'loading' : '']">
                <span v-if="product.price !== 0" v-text="'$ ' + parseFloat(product.price.toString()).toFixed(2)"></span>
            </div>

            <p class="product-details-description" v-if="product.description !== ''" v-text="product.description"></p>
            <div v-else class="product-details-description--loading">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
            </div>

            <div class="product-details-sizes">
                <span class="product-details-sizes__label">
                    Size
                    <span class="product-details-sizes__input-required">*</span>
                    <span class="product-details-sizes__input-selected" v-text="size"></span>
                </span>
                <div class="product-details-sizes-buttons"  v-if="Object.keys(product.sizeOptions).length !== 0">
                    <button class="product-details-sizes-buttons-select"
                            v-for="size in product.sizeOptions" :key="size.id" v-text="size.label" @click="selectSize(size.label, $event)">
                    </button>
                </div>
                <div v-else>
                    <button class="product-details-sizes-buttons-select loading"></button>
                    <button class="product-details-sizes-buttons-select loading"></button>
                    <button class="product-details-sizes-buttons-select loading"></button>
                </div>
            </div>

            <div class="product-details-add-to-cart-div" @click="addToCart">
                <button class="product-details-add-to-cart-btn" >Add to cart</button>
            </div>
        </div>
    </div>

</template>
