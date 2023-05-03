<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Тех. детализация данных</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Периметр здания, м</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Периметр под отделку (вкл. наруж. стены), м.п.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Пл. влажных помещений без разуклонки, м2</label>
                    <input type="text" class="form-control" >
                </div>

                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Пл. влажных помещений с разуклонкой, м2</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="crm_number">Периметр влажных помещений, м.п.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Душевой поддон без перегородок</label>
                    <input type="text" class="form-control" >
                </div>

            </div>

            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Душевой поддон с одной перегородкой</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Душевой поддон с двумя перегородками</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Душевой поддон с тремя перегородками</label>
                    <input type="text" class="form-control" >
                </div>

                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Доставка. Кол-во рейсов (1 ТС 20 тонн или контейнер 40')</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="crm_number">Расстояние в км от поставщика СП до объекта</label>
                    <input type="text" class="form-control" >
                </div>

            </div>
            <div class="py-2">
                <button type="button" @click="goToDesigningDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!technicalDetailsDataEditMode ? storeTechnicalDetailsData() : updateTechnicalDetailsData()" class="btn btn-success float-end зн-2"
                >Готово
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'technicalDetailsDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeTechnicalDetailsData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("technicalDetailsDataEditModeTrue");
                this.openCalculation();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateTechnicalDetailsData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.openCalculation();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        openCalculation() {
            this.$emit("openСalculation");
        },
        goToDesigningDataPage() {
            this.$emit("goToDesigningDataPage");
        },
    },
}
</script>

<style scoped>

input, select {
    background-color: #2b2b2c;
    color: #ffffff;
}
</style>
