<script>
import ProductImageComponent from "../Components/ProductImageComponent";
import ProductDetailsComponent from "../Components/ProductDetailsComponent";

export default {
    name: "ProductContainer",
    components: {
        ProductDetailsComponent,
        ProductImageComponent
    },
    data() {
       return {
           img: '',
           sizeOptions: [],
           title: '',
           price: 0,
           id: 0,
           description: '',
       }
    },
    methods: {
        getProduct() {
            axios.get('https://3sb655pz3a.execute-api.ap-southeast-2.amazonaws.com/live/product')
                .then(oResponse => {
                   this.title = oResponse.data.title;
                   this.sizeOptions = oResponse.data.sizeOptions;
                   this.price = oResponse.data.price;
                   this.description = oResponse.data.description;
                   this.img = oResponse.data.imageURL;
                   this.id = oResponse.data.id;
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
    <div class="product-container">
        <ProductImageComponent :img="img"/>
        <ProductDetailsComponent @addToCart="triggerParent"
            :id="id"
            :title="title"
            :size-options="sizeOptions"
            :price="price"
            :description="description"
            :img="img"
        />
    </div>
</template>
