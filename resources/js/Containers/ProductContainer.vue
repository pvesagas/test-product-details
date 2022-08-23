<script>
import ProductDetailsComponent from "../Components/ProductDetailsComponent";

export default {
    name: "ProductContainer",
    components: {
        ProductDetailsComponent
    },
    data() {
       return {
           product: {
               img: '',
               sizeOptions: [],
               title: '',
               price: 0,
               id: 0,
               description: '',
           }
       }
    },
    methods: {
        async getProduct() {
            await axios.get('https://3sb655pz3a.execute-api.ap-southeast-2.amazonaws.com/live/product')
                .then(oResponse => {
                   this.product.title = oResponse.data.title;
                   this.product.sizeOptions = oResponse.data.sizeOptions;
                   this.product.price = oResponse.data.price;
                   this.product.description = oResponse.data.description;
                   this.product.img = oResponse.data.imageURL;
                   this.product.id = oResponse.data.id;
                })
                .catch(oError => {
                    console.log(oError);
                });
        },
        triggerParent() {
            this.$emit('addToCart');
        }
    },
    mounted() {
        this.getProduct();
    }
}
</script>

<template>
    <div>
        <ProductDetailsComponent @addToCart="triggerParent"
            :product="product"
        />
    </div>
</template>
