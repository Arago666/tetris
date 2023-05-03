<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Инженерные системы</h4>
        </div>
        <div class="row py-3 text-center col-md-12 ">
            <h5 class="text-center">Сантехника</h5>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Горячее водоснабжение (ГВС)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Водонагреватель индивидуальный, типа 50 л.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Водонагреватель общий, типа 200-300 л.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Душевые собственной сборки, шт</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Душевые кабины покупные в сборе, шт
                    </label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Умывальники, шт</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Унитазы, шт</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Писсуары, шт</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Обвязка выпусков под зданием</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Утепление труб под зданием</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
        </div>

        <div class="row py-3 text-center col-md-12 " v-if="!showOnlyRequiredParameters">
            <h5 class="text-center">Электрика</h5>
        </div>
        <div class="row py-3 float-" v-if="!showOnlyRequiredParameters">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Категория надежности электроснабжения здания</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Розетки</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Выключатели</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Светильники</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
        </div>

        <div class="row py-3 text-center col-md-12 " v-if="!showOnlyRequiredParameters">
            <h5 class="text-center">Отопление</h5>
        </div>
        <div class="row py-3 float-" v-if="!showOnlyRequiredParameters">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Вид отопления</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Тепловая завеса</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Количество отопительных приборов (конвектора электрические или радиаторы водяного отопления)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row py-3 text-center col-md-12 " v-if="!showOnlyRequiredParameters">
            <h5 class="text-center">Вентиляция</h5>
        </div>
        <div class="row py-3 float-" v-if="!showOnlyRequiredParameters">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Кондиционеры</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Вентиляция общих санузлов (вид)</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Вентиляция индивидуальных санузлов (вид)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>

        <div class="row py-3 text-center col-md-12 ">
            <h5 class="text-center">Пожарные системы</h5>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Сигнализация</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Внутренний водопровод со шкафами и гидрантами</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="goToComplectationDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!engineeringSystemsDataEditMode ? storeEngineeringSystemsData() : updateEngineeringSystemsData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'engineeringSystemsDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeEngineeringSystemsData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("engineeringSystemsDataEditModeTrue");
                this.goToDeliveryDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateEngineeringSystemsData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.goToDeliveryDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToDeliveryDataPage() {
            this.$emit("goToDeliveryDataPage");
        },
        goToComplectationDataPage() {
            this.$emit("goToComplectationDataPage");
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
