<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Цветовые решения</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Металлокаркас / Панели перекрытий</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Металлокаркас / Стойки</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Лестницы наружные</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Входные группы / Лестница, опоры, перила</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Входные группы / Козырьки</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Кровля / Обшивка фронтонов</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Кровельное покрытие (в т.ч. конёк и подшивы). Водосток. Снегозадержание.</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Экстерьер / Двери мет. (с обналичкой)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Экстерьер / Окна</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Экстерьер / Цоколь</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Экстерьер / Стены (СП) - с улицы. Нащельники.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Интерьер / Стены (СП), в т.ч. внутр. сторона стен здания. Нащельники.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Интерьер / Внутренние двери (с обналичкой)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Интерьер / Сантехнические перегородки</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="goToFurnitureAndAccessoriesDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!colorSolutionsDataEditMode ? storeColorSolutionsData() : updateColorSolutionsData()" class="btn btn-success float-end зн-2"
                >Сохранить
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'colorSolutionsDataEditMode'],
    methods: {
        storeColorSolutionsData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("colorSolutionsDataEditModeTrue");
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateColorSolutionsData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToEngineeringSystemsDataPage() {
            this.$emit("goToEngineeringSystemsDataPage");
        },
        goToFurnitureAndAccessoriesDataPage() {
            this.$emit("goToFurnitureAndAccessoriesDataPage");
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
