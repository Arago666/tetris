<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Интерьер</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Кол-во помещений в здании</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Лестница внутр, шт</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Перила для лестниц из нержавеющей стали</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Чистовое покрытие потолка основных помещений</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Чистовое покрытие потолка коридора</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Чистовое покрытие потолка влажных и мокрых зон</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Внутр. перегородки (СП), длина м.п.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Внутр. перегородки (СП) двойные</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Внутр. перегородки (СП) толщина</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Дверь МДФ однопольная</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Дверь МДФ двупольная</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Дверь металлическая однопольная (интерьер)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Дверь металлическая двупольная (интерьер)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Двери влагостойкие</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Двери типа "ПВХ-окна" двупольная 21-13 (рабочее полотно 90, остекление 2/3)</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Окна в интерьере, шт</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Стены. Отделка.</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Ламинат, площадь, м2</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
        </div>
        <div class="row py-3 text-center col-md-12 ">
            <h5 class="text-center">Влажные и мокрые помещения</h5>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Кол-во БК с влажными общими помещениями (типа санузел, умывальная)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Кол-во БК с мокрыми помещениями (типа душевая или мойка в столовой)</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Кол-во влажных индивидуальных помещений (типа индивид. санузел)</label>
                    <input type="text" class="form-control">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Покрытие пола влажных помещений</label>
                    <input type="text" class="form-control" >
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="goToExteriorDataPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!interiorDataEditMode ? storeInteriorData() : updateInteriorData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [ 'interiorDataEditMode'],
    methods: {
        storeInteriorData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("interiorDataEditModeTrue");
                this.goToFurnitureAndAccessoriesDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateInteriorData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
                this.goToFurnitureAndAccessoriesDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToFurnitureAndAccessoriesDataPage() {
            this.$emit("goToFurnitureAndAccessoriesDataPage");
        },
        goToExteriorDataPage() {
            this.$emit("goToExteriorDataPage");
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
