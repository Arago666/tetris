<template>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="card-header " style="background-color: #14161e;">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-light float-start fw-bold">{{title}}</h5>
                            </div>
                            <div class="col-md-6">
                                <button @click="hideAllOrders()" class="btn btn-success btn-sm float-end">Создать</button>
                            </div>
                        </div>
                    </div>

                    <div class="card-body bg-dark" >
                        <div class="table-responsive">
                            <table class="table text-center table-dark table-hover">
                                <thead>
                                    <tr>
                                        <th>№</th>
                                        <th>Наименование</th>
                                        <th>Номер заявки CRM</th>
                                        <th>Номер договора</th>
                                        <th>Дата создания</th>
                                        <th>Промсотр</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(order, index) in orders" :key="index">
                                        <td>{{order.id}}</td>
                                        <td>{{order.name}}</td>
                                        <td>{{order.crm_number}}</td>

                                        <td>{{order.contract_number}}</td>
                                        <td> {{new Date(order.created_at).toLocaleDateString()}}</td>
                                        <td>
                                            <button @click="editOrder(order)" class="btn btn-primary btn-sm mx-1">Открыть</button>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    setup: () => ({
        title: "Расчеты"
    }),
    data() {
        return {
            orders: {},
        }
    },
    mounted() {
        this.getOrders()
    },
    methods: {
        getOrders() {
            axios.get('api/get-orders').then(response => {
                this.orders = response.data
            }).catch(errors => {
                console.log(errors)
            })
        },
        hideAllOrders() {
            this.$emit("hideAllOrders");
        },
        editOrder(order) {
            this.$emit("editOrder", order);
        },
    },
}
</script>

<style scoped>

</style>
