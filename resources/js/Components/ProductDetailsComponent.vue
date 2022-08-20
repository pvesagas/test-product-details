<script>
const BUTTON_CHECKED_CLASS = 'buttons__select--checked';
const BUTTON_CHECKED_CLASS_SELECTOR = '.buttons__select--checked';

export default {
    name: "ProductDetailsComponent",
    props: {
        id: Number,
        price: Number,
        sizeOptions: {},
        description: String,
        title: String,
        img: String,
    },
    data() {
        return {
            size: '',
        }
    },
    methods: {
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
           document.querySelector('.product-details-sizes__input-selected').textContent = '';
        },
        addToCart() {
            if (this.size === '') {
                alert('Please select size first!')
                return;
            }

            const oData = {
                id: this.id,
                price: this.price,
                size: this.size,
                description: this.description,
                title: this.title,
                img: this.img,
            }

            axios.post('/add', oData)
                .then((oResponse) => {
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
    <div class="product-details">
        <h1 class="product-details__name" v-text="title"></h1>
        <h3 class="product-details__price" >$ <span v-text="parseFloat(price.toString()).toFixed(2)"></span></h3>
        <p class="product-details__description" v-text="description"></p>

        <div class="product-details-sizes">
            <span class="product-details-sizes__label">
                Size
                <span class="product-details-sizes__input-required">*</span>
                <span class="product-details-sizes__input-selected" v-text="size"></span>
            </span>
            <div class="product-details-sizes-buttons">
                <button class="product-details-sizes-buttons__select"
                        v-for="size in sizeOptions" :key="size.id" v-text="size.label" @click="selectSize(size.label, $event)">
                </button>
            </div>
        </div>

        <div class="product-details-add-to-cart-div" @click="addToCart">
            <button class="product-details-add-to-cart-btn" >Add to cart</button>
        </div>
    </div>
</template>
