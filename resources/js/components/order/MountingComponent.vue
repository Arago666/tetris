<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Монтаж</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Расстояние в км от Москвы до объекта</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Погодные условия проведения работ</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Возврат инструмента и обеспечения возможен без существенных доп. затрат
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Фундамент</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Кран с машинистом крана</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Cтроительный мусор</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Площадка для материалов</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Подъездные пути</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Электроэнергия</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Техническая вода и туалет</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Питание обеспечивает заказчик</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Питание в шаговой доступности от места работ </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Проживание обеспечивает заказчик</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Проживание в шаговой доступности от места работ</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Банно-прачечное обеспечение</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="title">Лимитированный рабочий день (смена)</label>
                    <input type="text" class="form-control">
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="goToDeliveryDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!mountingDataEditMode ? storeMountingData() : updateMountingData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'mountingDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeMountingData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("mountingDataEditModeTrue");
                this.goToDesigningDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateMountingData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.goToDesigningDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToDesigningDataPage() {
            this.$emit("goToDesigningDataPage");
        },
        goToDeliveryDataPage() {
            this.$emit("goToDeliveryDataPage");
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
