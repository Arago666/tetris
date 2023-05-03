<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Рассчеты</h4>
        </div>
            <div class="py-2 text-center">
                <button @click="calculation()" type="button" class="btn btn-success float-lg-none">Рассчитать</button>
            </div>

        Общая стоимость = {{ totalPrice }}

    </div>
</template>

<script>

export default {
    data() {
        return {
            totalPrice: '',
        }
    },
    mounted() {
        this.getTotalPrice();
    },
    props: ['order_id'],
    methods: {
        calculation() {
            axios.get('api/calculation/' + this.order_id).then(response => {
                console.log(this.order_id)
            }).catch(errors => {
                console.log(errors)
            });
            this.getTotalPrice();
        },
        getTotalPrice() {
            axios.get('api/get-total-price/' + this.order_id).then(response => {
                console.log(this.order_id)
                console.log(response.data);
                this.totalPrice = response.data;

            }).catch(errors => {
                console.log(errors)
            });
        },
    },
}
</script>

<style scoped>

</style>
