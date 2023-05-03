<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Мебель и аксессуары </h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Стул для посетителей (офис, переговорная)
                    </label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Стол руководителя (без приставки, приставка отдельно)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Приставка для стола руководителя</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стол офисный угловой</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Кресло офисное</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Шкаф для одежды (офисный)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Шкаф для документов полузакрытый</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стеллаж для документов, ДСП</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Кресло руководителя</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Тумба офисная</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стол для переговорной модульный (один модуль 200х110)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стол овальный для переговоров</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стол обеденный модульный (один модуль 80х80х75)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стул кухонный</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Диван офисный трёхместный экокожа</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="goToInteriorDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!furnitureAndAccessoriesDataEditMode ? storeFurnitureAndAccessoriesData() : updateFurnitureAndAccessoriesData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'furnitureAndAccessoriesDataEditMode'],
    methods: {
        storeFurnitureAndAccessoriesData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("furnitureAndAccessoriesDataEditModeTrue");
                this.goToColorSolutionsDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateFurnitureAndAccessoriesData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.goToColorSolutionsDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToColorSolutionsDataPage() {
            this.$emit("goToColorSolutionsDataPage");
        },
        goToInteriorDataPage() {
            this.$emit("goToInteriorDataPage");
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
