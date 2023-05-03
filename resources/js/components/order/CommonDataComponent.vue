<template>
    <div class="row justify-content-center text-light py-2 border  m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Общие данные</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2">
                    <label for="data_sheet">Назначение здания</label>
                    <select class="form-control" v-model="commonData.building_purpose">
                        <option>АБК</option>
                        <option>Банно-прачечный комбинат</option>
                        <option>Общежитие для рабочих</option>
                        <option>Общежитие ИТР</option>
                        <option>Офис (Штаб)</option>
                        <option>Столовая</option>
                        <option>Другое</option>
                    </select>
                </div>

                <div class="form-group py-2">
                    <label for="data_sheet">Размер блока</label>
                    <select class="form-control" v-model="commonData.block_size">
                        <option>6 х 2,45</option>
                        <option>6 х 3</option>
                    </select>
                </div>

                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="data_sheet" >Конфигурация здания</label>
                    <select class="form-control" v-model="commonData.building_configuration">
                        <option>блок-коридор-блок</option>
                        <option>блок-блок-блок</option>
                        <option>блок-блок</option>
                        <option>1 блок</option>
                    </select>
                </div>

                <div class="form-group py-2">
                    <label for="data_sheet">Кол-во этажей</label>
                    <select class="form-control" v-model="commonData.floor_count">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>

                <div class="form-group py-2" >
                    <label for="crm_number">Кол-во блоков в одном ряду</label>
                    <input type="text" class="form-control" v-model="commonData.block_in_one_row_count">
                </div>

                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="data_sheet">Тип перекрытия</label>
                    <select class="form-control" v-model="commonData.overlap_type">
                        <option>одна панель</option>
                        <option>две панели</option>
                    </select>
                </div>

                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="data_sheet">Ширина коридора</label>
                    <select class="form-control" v-model="commonData.corridor_width">
                        <option>Стандартная (2 м)</option>
                        <option>Увеличенная (2.4 м)</option>
                    </select>
                </div>

                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="data_sheet">Высота потолка в чистоте</label>
                    <select class="form-control" v-model="commonData.clear_ceiling_height">
                        <option>2,3 метра</option>
                        <option>2,4 метра</option>
                        <option>2,5 метра</option>
                        <option>2,7 метра</option>
                        <option>2,9 метра</option>
                    </select>
                </div>
            </div>

            <div class="col-md-6 ">
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="data_sheet">Климатич. регион</label>
                    <select class="form-control" v-model="commonData.climatic_region">
                        <option>центр и юж. регион</option>
                        <option>северный регион</option>
                    </select>
                </div>
                <div class="form-group py-2">
                    <label for="data_sheet">Сейсмичность района строительства, баллов</label>
                    <select class="form-control" v-model="commonData.region_seismicity">
                        <option>меньше 6</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>больше 9</option>
                    </select>
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Климатическая зона особая или 4-я (сталь 09Г2С)</label>
                    <input type="text" class="form-control" v-model="commonData.climatic_zone">
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="data_sheet">Степень огнестойкости</label>
                    <select class="form-control" v-model="commonData.fire_resistance_degree">
                        <option>V</option>
                        <option>IV</option>
                        <option>III</option>
                    </select>
                </div>
                <div class="form-group py-2" >
                    <label for="data_sheet">Степень огнестойкости</label>
                    <select class="form-control" v-model="commonData.constructive_fire_hazard_class">
                        <option>С0</option>
                        <option>С1</option>
                        <option>С3</option>
                    </select>
                </div>
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="contract_number">Класс функциональной пожарной опасности</label>
                    <input type="text" class="form-control" v-model="commonData.functional_fire_hazard_class">
                </div>
                <div class="form-group py-2">
                    <label for="data_sheet">Уровень ответственности здания (по ФЗ 384)</label>
                    <select class="form-control" v-model="commonData.building_responsibility_level">
                        <option>Пониженный</option>
                        <option>Нормальный</option>
                        <option>Повышенный</option>
                    </select>
                </div>

            </div>
            <div class="py-2">
            </div>
            <div class="py-2">
                <button type="button" @click="goToLinkPage()" class="btn btn-success float-start зн-2">Назад</button>
                <button type="button" @click="!commonDataEditMode ? storeCommonData() : updateCommonData()" class="btn btn-success float-end mr-2">Далее</button>
                <button type="button" @click="updateCommonDataWithoutMove()" class="btn btn-success float-end mr-2" v-if="commonDataEditMode" style="margin-right: 10px;">Сохранить</button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['commonData', 'order_id', 'commonDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeCommonData() {
            this.commonData.order_id = this.order_id;
            axios.post('api/store-common-data', this.commonData).then(response => {
                console.log(response.data);
                this.$emit("commonDataEditModeTrue", response.data);
                this.goToComplectationDataPage();
            }).catch(errors => {
                console.log(errors)
            });
        },
        updateCommonData() {
            axios.post('api/update-common-data/' + this.commonData.id, this.commonData).then(response => {
                console.log(response.data)
                this.goToComplectationDataPage();
            }).catch(errors => {
                console.log(errors)
            });
        },
        updateCommonDataWithoutMove() {
            axios.post('api/update-common-data/' + this.commonData.id, this.commonData).then(response => {
                console.log(response.data)
            }).catch(errors => {
                console.log(errors)
            });
        },
        goToLinkPage() {
            this.$emit("goToLinkPage");
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
