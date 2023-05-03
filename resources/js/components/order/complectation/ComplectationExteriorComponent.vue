<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Экстерьер</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Способ крепления наружных стен</label>
                    <input type="text" class="form-control"
                           v-model="complectationExteriorData.external_wall_mounting_method">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Толщина наружных стен</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.external_wall_thickness">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Лестница пожарная, шт</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.fire_stair_count">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Входных групп</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.input_groups_count">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Цоколь</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.plinth">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Водосток</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.drain">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Снегозадержание</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.snow_retention">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Дверь металлическая однопольная</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.single_floor_metal_door">
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="title">Дверь металлическая двупольная</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.double_floor_metal_door">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Окно основное двухстворчатое, шт</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.main_double_leaf_window">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Окно основное одностворчатое, шт</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.main_single_leaf_window">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Окно основное - стеклопакет и профиль</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.main_window">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Окно для санузла, шт</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.bathroom_window">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Витраж ПВХ (длина), м</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.pvc_stained_glass">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Витраж алюминевый, м2 (площадь витража)</label>
                    <input type="text" class="form-control" v-model="complectationExteriorData.aluminum_stained_glass">
                </div>
            </div>
            <div class="py-2">
                <button type="button" @click="!exteriorDataEditMode ? storeExteriorData() : updateExteriorData()"
                        class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: [
        'exteriorDataEditMode',
        'order_id',
        'complectationDataEditMode',
        'complectationExteriorData'
    ],
    methods: {
        storeExteriorData() {
            this.complectationExteriorData.order_id = this.order_id;

            axios.post('api/storeComplectationExterior', this.complectationExteriorData).then(() => {
                this.$emit("exteriorDataEditModeTrue");
                this.goToInteriorDataPage();
            }).catch(errors => {
                console.log(errors)
            });
        },
        updateExteriorData() {
            axios.post('api/updateComplectationExterior/' + this.complectationExteriorData.id, this.complectationExteriorData).then(() => {
                this.goToInteriorDataPage();
            }).catch(errors => {
                console.log(errors)
            });
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
