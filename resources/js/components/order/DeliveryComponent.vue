<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Доставка</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Доставка панелей перекрытий в контейнерах</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="crm_number">Невозвратные 20 фут. контейнеры (тара), кол-во шт.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Невозвратные 40 фут. контейнеры (тара), кол-во шт.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Спец. упаковка</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Расстояние в км от Калуги</label>
                    <input type="text" class="form-control" >
                </div>

            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Расстояние в км от Пензы</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">От какого завода доставлять?</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Кол-во перевалочных пунктов</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Зависимость от сезонности</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="goToEngineeringSystemsDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!deliveryDataEditMode ? storeDeliveryData() : updateDeliveryData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'deliveryDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeDeliveryData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("deliveryDataEditModeTrue");
                this.goToMountingDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateDeliveryData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.goToMountingDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToMountingDataPage() {
            this.$emit("goToMountingDataPage");
        },
        goToEngineeringSystemsDataPage() {
            this.$emit("goToEngineeringSystemsDataPage");
        }
    },
}
</script>

<style scoped>

input, select {
    background-color: #2b2b2c;
    color: #ffffff;
}
</style>
