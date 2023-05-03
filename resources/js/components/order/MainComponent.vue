<template>
    <div class="row justify-content-center">
        <div v-if="showAllOrderList && permissions.has('orders-read')">
            <AllOrderComponent @hideAllOrders="hideAllOrders()" @editOrder="editOrder"></AllOrderComponent>
        </div>
        <div v-if="!showAllOrderList">
            <OrderComponent @showAllOrders="showAllOrders()" @updateOrder="updateOrder" @hideOtherDataPage="hideOtherDataPage()" @showOtherDataPage="showOtherDataPage()" :editMode="editMode" :orderData="orderData" :showOtherData="showOtherData"></OrderComponent>
        </div>
    </div>
</template>

<script>
import AllOrderComponent from './AllOrderComponent.vue'
import OrderComponent from './OrderComponent.vue'

export default {
    setup: () => ({
        title: "Расчеты"
    }),
    created() {
        this.current_user = window.user

        window.user_roles.forEach(r => {
            this.roles.add(r.name);
        })

        window.user_permissions.forEach(p => {
            this.permissions.add(p.name);
        })
    },
    data() {
        return {
            showAllOrderList: true,
            showOtherData: false,
            orderData: {
                name: '',
                crm_number: '',
                product_type_number: '',
                buildings_count: '',
                contract_number: '',
            },
            editMode: false,

            current_user: {},
            roles: new Set(),
            permissions: new Set(),
        }
    },
    components: {
        AllOrderComponent,
        OrderComponent,
    },
    methods: {
        hideAllOrders(){
            this.showAllOrderList = false;
            this.cleanOrderData();
            this.showOtherData = false;
        },
        showAllOrders() {
            this.showAllOrderList = true;
        },
        editOrder(orderData) {
            this.orderData = orderData;
            this.editMode = true;
            this.showAllOrderList = false;
            this.showOtherData = true;
        },
        cleanOrderData() {
            this.orderData = {
                name: '',
                crm_number: '',
                product_type_number: '',
                buildings_count: '',
                contract_number: '',
            };
            this.editMode = false;
        },
        updateOrder(id) {
            this.orderData.id = id;
            this.showOtherData = true;
            this.editMode = true;
        },
        hideOtherDataPage() {
            this.showOtherData = false;
        },
        showOtherDataPage() {
            this.showOtherData = true;
        },
    }
}
</script>

<style scoped>

</style>
