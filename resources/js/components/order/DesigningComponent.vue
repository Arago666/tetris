<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Проектирование</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Архитектурные решения (АР)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="crm_number">Конструктивные решения (КР)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Внутренние силовое электрооборудование и освещение (ЭОМ)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Внутренние системы водоснабжения и канализации (ВК)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Внутренние системы отопления (ОВ)</label>
                    <input type="text" class="form-control" >
                </div>

            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Внутренние системы вентиляции и кондиционирования (ОВиК)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="crm_number">Пожарная сигнализация (ПС)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Структурированная кабельная система (СКС)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">ЛВС и IP-телефония</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">IPTV и видеонаблюдение</label>
                    <input type="text" class="form-control" >
                </div>

            </div>
            <div class="py-2">
                <button type="button" @click="goToMountingDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!designingDataEditMode ? storeDesigningData() : updateDesigningData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'designingDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeDesigningData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("designingDataEditModeTrue");
                this.goToTechnicalDetailsDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateDesigningData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.goToTechnicalDetailsDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToTechnicalDetailsDataPage() {
            this.$emit("goToTechnicalDetailsDataPage");
        },
        goToMountingDataPage() {
            this.$emit("goToMountingDataPage");
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
