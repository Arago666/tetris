<template>
    <div class="row justify-content-center text-light py-2 border m-2">
        <div class="row py-3 text-center col-md-12 ">
            <h4 class="text-center">Комплектация</h4>
        </div>
        <ul class="nav nav-pills  justify-content-center">
            <li class="nav-item">
                <a @click="goToExteriorDataPage()"
                   :class="`nav-link   ${!exteriorDataEditMode == true ? 'text-light' : '' } ${showExteriorData  == true ? 'active' : '' }`"
                   aria-current="page"
                   :style="`cursor:pointer; ${exteriorDataEditMode == true ? 'color: lawngreen' : '' }`"
                >Экстерьер</a>
            </li>
            <li class="nav-item">
                <a @click="goToInteriorDataPage()"
                   :class="`nav-link  ${!interiorDataEditMode == true ? 'text-light' : '' }  ${showInteriorData == true ? 'active text-light' : '' }`"
                   :style="`cursor:pointer; ${interiorDataEditMode == true ? 'color: lawngreen' : '' }`"
                >Интерьер</a>
            </li>
            <li class="nav-item">
                <a @click="goToFurnitureAndAccessoriesDataPage()"
                   :class="`nav-link  ${!furnitureAndAccessoriesDataEditMode == true ? 'text-light' : '' }  ${showFurnitureAndAccessoriesData == true ? 'active text-light' : '' }`"
                   :style="`cursor:pointer; ${furnitureAndAccessoriesDataEditMode == true ? 'color: lawngreen' : '' }`"
                >Мебель и аксессуары</a>
            </li>
            <li class="nav-item">
                <a @click="goToColorSolutionsDataPage()"
                   :class="`nav-link  ${!colorSolutionsDataEditMode == true ? 'text-light' : '' }  ${showColorSolutionsData == true ? 'active text-light' : '' }`"
                   :style="`cursor:pointer; ${colorSolutionsDataEditMode == true ? 'color: lawngreen' : '' }`"
                >Цветовые решения</a>
            </li>
        </ul>
        <div v-if="showExteriorData">
            <ComplectationExteriorComponent
                @exteriorDataEditModeTrue="exteriorDataEditModeTrue"
                @goToInteriorDataPage="goToInteriorDataPage"
                :order_id="order_id"
                :exteriorDataEditMode="exteriorDataEditMode"
                :complectationExteriorData="complectationExteriorData"
            ></ComplectationExteriorComponent>
        </div>
        <div v-if="showInteriorData">
            <ComplectationInteriorComponent
                @interiorDataEditModeTrue="interiorDataEditModeTrue"
                @goToExteriorDataPage="goToExteriorDataPage"
                @goToFurnitureAndAccessoriesDataPage="goToFurnitureAndAccessoriesDataPage"
                :interiorDataEditMode="interiorDataEditMode"
            ></ComplectationInteriorComponent>
        </div>
        <div v-if="showFurnitureAndAccessoriesData">
            <ComplectationFurnitureAndAccessoriesComponent
                @furnitureAndAccessoriesDataEditModeTrue="furnitureAndAccessoriesDataEditModeTrue"
                @goToInteriorDataPage="goToInteriorDataPage"
                @goToColorSolutionsDataPage="goToColorSolutionsDataPage"
                :furnitureAndAccessoriesDataEditMode="furnitureAndAccessoriesDataEditMode"
            ></ComplectationFurnitureAndAccessoriesComponent>
        </div>
        <div v-if="showColorSolutionsData">
            <ComplectationColorSolutionsComponent
                @colorSolutionsDataEditModeTrue="colorSolutionsDataEditModeTrue"
                @goToFurnitureAndAccessoriesDataPage="goToFurnitureAndAccessoriesDataPage"
                :colorSolutionsDataEditMode="colorSolutionsDataEditMode"
            ></ComplectationColorSolutionsComponent>
        </div>
        <div class="row py-3 float-">
            <div class="col-md-6 ">


            </div>
            <div class="py-2">
                <button type="button" @click="goToCommonDataPage()" class="btn btn-success float-start зн-2">Назад
                </button>
                <button type="button"
                        @click="!complectationDataEditMode ? storeComplectationData() : updateComplectationData()"
                        class="btn btn-success float-end py-2"
                >Далее
                </button>
            </div>
        </div>
    </div>
</template>

<script>

import ComplectationInteriorComponent from "./ComplectationInteriorComponent.vue";
import ComplectationFurnitureAndAccessoriesComponent from "./ComplectationFurnitureAndAccessoriesComponent.vue";
import ComplectationExteriorComponent from "./ComplectationExteriorComponent.vue";
import ComplectationColorSolutionsComponent from "./ComplectationColorSolutionsComponent.vue";

export default {
    props: ['complectationDataEditMode', 'showOnlyRequiredParameters', 'order_id', 'complectationExteriorData'],
    components: {
        ComplectationInteriorComponent,
        ComplectationFurnitureAndAccessoriesComponent,
        ComplectationExteriorComponent,
        ComplectationColorSolutionsComponent
    },
    data() {
        return {
            showExteriorData: true,
            showInteriorData: false,
            showFurnitureAndAccessoriesData: false,
            showColorSolutionsData: false,

            exteriorDataEditMode: false,
            interiorDataEditMode: false,
            furnitureAndAccessoriesDataEditMode: false,
            colorSolutionsDataEditMode: false,
        }
    },
    mounted() {
        this.getExteriorDataEditMode();
    },
    methods: {
        storeComplectationData() {
            // this.linkData.order_id = this.order_id;
            // axios.post('api/storeLink', this.linkData).then(response => {
            //     console.log(response.data);
            //     this.$emit("linkDataEditModeTrue", response.data);
            this.$emit("complectationDataEditModeTrue");
            this.goToEngineeringSystemsDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        updateComplectationData() {
            // axios.post('api/updateLink/' + this.linkData.id, this.linkData).then(response => {
            //     console.log(response.data)
            this.goToEngineeringSystemsDataPage();
            // }).catch(errors => {
            //     console.log(errors)
            // });
        },
        goToEngineeringSystemsDataPage() {
            this.$emit("goToEngineeringSystemsDataPage");
        },
        goToCommonDataPage() {
            this.$emit("goToCommonDataPage");
        },


        exteriorDataEditModeTrue() {
            this.exteriorDataEditMode = true;
        },
        interiorDataEditModeTrue() {
            this.interiorDataEditMode = true;
        },
        furnitureAndAccessoriesDataEditModeTrue() {
            this.furnitureAndAccessoriesDataEditMode = true;
        },
        colorSolutionsDataEditModeTrue() {
            this.colorSolutionsDataEditMode = true;
        },

        hideDataPages() {
            this.showExteriorData = false;
            this.showInteriorData = false;
            this.showFurnitureAndAccessoriesData = false;
            this.showColorSolutionsData = false;
        },
        goToExteriorDataPage() {
            this.hideDataPages();
            this.showExteriorData = true;
        },
        goToInteriorDataPage() {
            this.hideDataPages();
            this.showInteriorData = true;
        },
        goToFurnitureAndAccessoriesDataPage() {
            this.hideDataPages();
            this.showFurnitureAndAccessoriesData = true;
        },
        goToColorSolutionsDataPage() {
            this.hideDataPages();
            this.showColorSolutionsData = true;
        },

        getExteriorDataEditMode() {
            if (this.complectationExteriorData.id) {
                this.exteriorDataEditModeTrue();
            }
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
