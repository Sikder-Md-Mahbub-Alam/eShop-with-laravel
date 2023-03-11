<template>
    <div>
        <hr>
        <button class="btn btn-info text-center" v-on:click.prevent="addProductToCart()">
            Add to Cart
        </button>
    </div>
</template>

<script>
    export default {
        data() {
            return {
            
            }
        },

        props:['productId', 'userId'],

        methods: {
           async addProductToCart() {
                //Checking if user logged in
               if(this.userId == 0){
                   this.$toastr.e('You Need to login,To add this product in cart');
                   return;
               }

                 //If user logged in then add item to cart
               let response= await axios.post('/cart',{
                   'product_id': this.productId
               });

                 this.$root.$emit('changeInCart', response.data.items)
                   //this.$toastr.e('Product has been Added to cart');
                
            }
        },
       
    }
</script>
