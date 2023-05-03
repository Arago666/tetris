<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Ссылки на связанные документы</h4>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">
                <div class="form-group py-2" v-if="!showOnlyRequiredParameters">
                    <label for="title">Ссылка на планировку (прямая ссылка на файл в PDF)</label>
                    <input type="text" class="form-control" v-model="linkData.plan">
                </div>
                <div class="form-group py-2">
                    <label for="crm_number">Ссылка на тех. описание (прямая ссылка на файл в Гугл документе по шаблону)</label>
                    <input type="text" class="form-control" v-model="linkData.data_sheet">
                </div>
                <div class="form-group py-2">
                    <label for="contract_number">Ссылка на таблицу оценки рисков</label>
                    <input type="text" class="form-control" v-model="linkData.risk_assessment_table">
                </div>

            </div>
            <div class="py-2">
                <button type="button" @click="!linkDataEditMode ? storeLinkData() : updateLinkData()" class="btn btn-success float-end зн-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['linkData', 'order_id', 'linkDataEditMode', 'showOnlyRequiredParameters'],
    methods: {
        storeLinkData() {
            this.linkData.order_id = this.order_id;
            axios.post('api/store-link', this.linkData).then(response => {
                console.log(response.data);
                this.$emit("linkDataEditModeTrue", response.data);
                this.goToCommonDataPage();
            }).catch(errors => {
                console.log(errors)
            });
        },
        updateLinkData() {
            axios.post('api/update-link/' + this.linkData.id, this.linkData).then(response => {
                console.log(response.data)
                this.goToCommonDataPage();
            }).catch(errors => {
                console.log(errors)
            });
        },
        goToCommonDataPage() {
            this.$emit("goToCommonDataPage");
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
