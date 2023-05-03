<template>
    <div class="row justify-content-center text-light bg-dark ">
        <div class="card-header ">
            <div class="row">
                <div class="col-md-12">
                    <button @click="showAllOrders()" class="btn btn-secondary btn-sm float-end">Вернуться к списку
                    </button>
                </div>
                <div class="col-md-12">
                    <h3
                        :class="`${!editMode == true ? 'text-light' : '' } text-center fw-bold py-3`"
                        :style="`${editMode == true ? 'color: #46810d' : '' }`">
                        Расчет № {{ orderData.id }} "{{ orderData.name }}"
                    </h3>
                </div>
            </div>
        </div>
            <div class="border card-body m-3" style="margin: 15px;">
                <div class="row m-4">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Наименование</label>
                            <input type="text" class="form-control" v-model="orderData.name">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="crm_number">Номер заявки CRM</label>
                            <input type="text" class="form-control" v-model="orderData.crm_number">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="contract_number">Номер договора</label>
                            <input type="text" class="form-control" v-model="orderData.contract_number">
                        </div>
                    </div>
                </div>
                <div class="row py-2 m-4">
                    <div class="col-md-4">
                        <div class="form-group py-2">
                            <label for="product_type_number">Номер вида продукции (номер позиции, номер вида здания)</label>
                            <input type="number" class="form-control" v-model="orderData.product_type_number">
                        </div>
                        <div class="form-group  py-2">
                            <label for="buildings_count">Количество единиц (штук зданий)</label>
                            <input type="number" class="form-control" v-model="orderData.buildings_count">
                        </div>
                        <div class="form-group  py-2">
                            <button type="button" @click="!editMode ? storeOrder() : updateOrder()" class="btn btn-success"
                            >{{ !editMode ? 'Создать' : 'Сохранить изменения' }}
                            </button>

                        </div>
                    </div>
                    <!--            <div class="col-md-8">-->
                    <!--            <button @click="showOtherDataPage()" class="btn btn-dark btn-sm float-end">Показать доп. данные</button>-->
                    <!--            </div>-->
                </div>
            </div>
        <div class="card-header py-3"></div>
        <div v-if="showOtherData">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-light text-center fw-bold">Сведения о заказе</h3>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" v-model="showOnlyRequiredParameters">
                            <label class="form-check-label" for="flexSwitchCheckDefault">Обязательные параметры</label>
                        </div>
                    </div>

                    <!--                    <div class="col-md-6">-->
                    <!--                        <button @click="hideOtherDataPage()" class="btn btn-dark btn-sm float-end">Скрыть</button>-->
                    <!--                    </div>-->
                </div>
            </div>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a @click="showLinkDataPage()"
                       :class="`nav-link   ${!linkDataEditMode == true ? 'text-light' : '' } ${showLinkData  == true ? 'active' : '' }`" aria-current="page"
                       :style="`cursor:pointer; ${linkDataEditMode == true ? 'color: lawngreen' : '' }`"
                       >Ссылки на связанные документы</a>
                </li>
                <li class="nav-item">
                    <a @click="showCommonDataPage()"
                       :class="`nav-link  ${!commonDataEditMode == true ? 'text-light' : '' }  ${showCommonData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${commonDataEditMode == true ? 'color: lawngreen' : '' }`">Общие данные</a>
                </li>
                <li class="nav-item">
                    <a @click="goToComplectationDataPage()"
                       :class="`nav-link  ${!complectationDataEditMode == true ? 'text-light' : '' }  ${showComplectationData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${complectationDataEditMode == true ? 'color: lawngreen' : '' }`">Комплектация</a>
                </li>
                <li class="nav-item">
                    <a @click="goToEngineeringSystemsDataPage()"
                       :class="`nav-link  ${!engineeringSystemsDataEditMode == true ? 'text-light' : '' }  ${showEngineeringSystemsData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${engineeringSystemsDataEditMode == true ? 'color: lawngreen' : '' }`">Инженерные системы</a>
                </li>
                <li class="nav-item">
                    <a @click="goToDeliveryDataPage()"
                       :class="`nav-link  ${!deliveryDataEditMode == true ? 'text-light' : '' }  ${showDeliveryData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${deliveryDataEditMode == true ? 'color: lawngreen' : '' }`">Доставка</a>
                </li>
                <li class="nav-item">
                    <a @click="goToMountingDataPage()"
                       :class="`nav-link  ${!mountingDataEditMode == true ? 'text-light' : '' }  ${showMountingData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${mountingDataEditMode == true ? 'color: lawngreen' : '' }`">Монтаж</a>
                </li>
                <li class="nav-item">
                    <a @click="goToDesigningDataPage()"
                       :class="`nav-link  ${!designingDataEditMode == true ? 'text-light' : '' }  ${showDesigningData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${designingDataEditMode == true ? 'color: lawngreen' : '' }`">Проектирование</a>
                </li>
                <li class="nav-item">
                    <a @click="goToTechnicalDetailsDataPage()"
                       :class="`nav-link  ${!technicalDetailsDataEditMode == true ? 'text-light' : '' }  ${showTechnicalDetailsData == true ? 'active text-light' : '' }`"
                       :style="`cursor:pointer; ${technicalDetailsDataEditMode == true ? 'color: lawngreen' : '' }`">Тех. детализация данных</a>
                </li>
            </ul>
            <div v-if="showLinkData">
                <LinkComponent
                    @linkDataEditModeTrue="linkDataEditModeTrue"
                    @goToCommonDataPage="goToCommonDataPage"
                    :linkData="linkData"
                    :order_id="orderData.id"
                    :linkDataEditMode="linkDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></LinkComponent>
            </div>
            <div v-if="showCommonData">
                <CommonDataComponent
                    @commonDataEditModeTrue="commonDataEditModeTrue"
                    @goToLinkPage="goToLinkPage"
                    @goToComplectationDataPage="goToComplectationDataPage"
                    :commonData="commonData"
                    :order_id="orderData.id"
                    :commonDataEditMode="commonDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></CommonDataComponent>
            </div>
            <div v-if="showComplectationData">
                <ComplectationComponent
                    @complectationDataEditModeTrue="complectationDataEditModeTrue"
                    @goToCommonDataPage="goToCommonDataPage"
                    @goToEngineeringSystemsDataPage="goToEngineeringSystemsDataPage"
                    :complectationExteriorData="complectationExteriorData"
                    :order_id="orderData.id"
                    :complectationDataEditMode="complectationDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></ComplectationComponent>
            </div>
            <div v-if="showEngineeringSystemsData">
                <EngineeringSystemsComponent
                    @engineeringSystemsDataEditModeTrue="engineeringSystemsDataEditModeTrue"
                    @goToDeliveryDataPage="goToDeliveryDataPage"
                    @goToComplectationDataPage="goToComplectationDataPage"
                    :engineeringSystemsDataEditMode="engineeringSystemsDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></EngineeringSystemsComponent>
            </div>
            <div v-if="showDeliveryData">
                <DeliveryComponent
                    @deliveryDataEditModeTrue="deliveryDataEditModeTrue"
                    @goToEngineeringSystemsDataPage="goToEngineeringSystemsDataPage"
                    @goToMountingDataPage="goToMountingDataPage"
                    :deliveryDataEditMode="deliveryDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></DeliveryComponent>
            </div>
            <div v-if="showMountingData">
                <MountingComponent
                    @mountingDataEditModeTrue="mountingDataEditModeTrue"
                    @goToDesigningDataPage="goToDesigningDataPage"
                    @goToDeliveryDataPage="goToDeliveryDataPage"
                    :mountingDataEditMode="mountingDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></MountingComponent>
            </div>

            <div v-if="showDesigningData">
                <DesigningComponent
                    @designingDataEditModeTrue="designingDataEditModeTrue"
                    @goToMountingDataPage="goToMountingDataPage"
                    @goToTechnicalDetailsDataPage="goToTechnicalDetailsDataPage"
                    :designingDataEditMode="designingDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></DesigningComponent>
            </div>

            <div v-if="showTechnicalDetailsData">
                <TechnicalDetailsComponent
                    @technicalDetailsDataEditModeTrue="technicalDetailsDataEditModeTrue"
                    @goToDesigningDataPage="goToDesigningDataPage"
                    @openСalculation="openСalculation"
                    :technicalDetailsDataEditMode="technicalDetailsDataEditMode"
                    :showOnlyRequiredParameters="showOnlyRequiredParameters"
                ></TechnicalDetailsComponent>
            </div>
        </div>

        <div v-if="showCalculationData">
            <CalculationComponent :order_id="orderData.id"></CalculationComponent>
        </div>
    </div>
</template>

<script>

import CommonDataComponent from "./CommonDataComponent.vue";
import LinkComponent from "./LinkComponent.vue";
import ComplectationComponent from "./complectation/ComplectationComponent.vue";
import EngineeringSystemsComponent from "./EngineeringSystemsComponent.vue";
import DeliveryComponent from "./DeliveryComponent.vue";
import MountingComponent from "./MountingComponent.vue";
import DesigningComponent from "./DesigningComponent.vue";
import TechnicalDetailsComponent from "./TechnicalDetailsComponent.vue";
import CalculationComponent from "./CalculationComponent.vue";

export default {
    props: ['orderData', 'editMode', 'showOtherData'],
    components: {
        LinkComponent,
        CommonDataComponent,
        ComplectationComponent,
        EngineeringSystemsComponent,
        DeliveryComponent,
        MountingComponent,
        DesigningComponent,
        TechnicalDetailsComponent,
        CalculationComponent,
    },
    data() {
        return {
            showLinkData: true,
            showCommonData: false,
            showComplectationData: false,
            showEngineeringSystemsData: false,
            showDeliveryData: false,
            showMountingData: false,
            showDesigningData: false,
            showTechnicalDetailsData: false,

            showCalculationData: false,

            linkDataEditMode: false,
            commonDataEditMode: false,
            complectationDataEditMode: false,
            engineeringSystemsDataEditMode: false,
            deliveryDataEditMode: false,
            mountingDataEditMode: false,
            designingDataEditMode: false,
            technicalDetailsDataEditMode: false,
            showOnlyRequiredParameters: false,

            linkData: {
                plan: '',
                data_sheet: '',
                risk_assessment_table: '',
            },
            commonData: {
                order_id: '',
                building_purpose: '',
                block_size: '',
                building_configuration: '',
                floor_count: '',
                block_in_one_row_count: '',
                overlap_type: '',
                corridor_width: '',
                clear_ceiling_height: '',
                climatic_region: '',
                region_seismicity: '',
                climatic_zone: '',
                fire_resistance_degree: '',
                constructive_fire_hazard_class: '',
                functional_fire_hazard_class: '',
                building_responsibility_level: '',
            },

            complectationExteriorData: {},
        }
    },
    mounted() {
        this.getCommonData();
        this.getLinkData();
        this.getTotalPrice();

        this.getComplectationExteriorData();
    },
    methods: {
        showAllOrders() {
            this.$emit("showAllOrders");
        },
        storeOrder() {
            axios.post('api/store-order', this.orderData).then(response => {
                console.log(response.data);
                this.$emit("updateOrder", response.data);
            }).catch(errors => {
                console.log(errors)
            });
        },
        updateOrder() {
            axios.post('api/update-order/' + this.orderData.id, this.orderData).then(response => {
                console.log(response.data);
                this.$emit("updateOrder", response.data);
            }).catch(errors => {
                console.log(errors)
            });
        },
        getCommonData() {
            if (this.orderData.id) {
                axios.post('api/get-common-data/' + this.orderData.id).then(response => {
                    this.commonData = response.data;
                    this.commonDataEditMode = true;
                }).catch(errors => {
                    console.log(errors);
                    this.commonDataEditMode = false;
                });
            }
        },
        getLinkData() {
            if (this.orderData.id) {
                axios.post('api/get-link/' + this.orderData.id).then(response => {
                    this.linkData = response.data;
                    this.linkDataEditMode = true;
                }).catch(errors => {
                    console.log(errors);
                    this.linkDataEditMode = false;
                });
            }
        },
        showLinkDataPage() {
            this.hideDataPages();
            this.showLinkData = true;
        },
        showCommonDataPage() {
            this.hideDataPages();
            this.showCommonData = true;
        },
        hideDataPages() {
            this.showCommonData = false;
            this.showLinkData = false;
            this.showComplectationData = false;
            this.showEngineeringSystemsData = false;
            this.showDeliveryData = false;
            this.showMountingData = false;
            this.showDesigningData = false;
            this.showTechnicalDetailsData = false;
        },
        hideOtherDataPage() {
            this.$emit("hideOtherDataPage");
        },
        showOtherDataPage() {
            this.$emit("showOtherDataPage");
        },

        commonDataEditModeTrue(commonData) {
            this.commonDataEditMode = true;
            this.commonData = commonData;
        },
        linkDataEditModeTrue(linkData) {
            this.linkDataEditMode = true;
            this.linkData = linkData;
        },
        complectationDataEditModeTrue() {
            this.complectationDataEditMode = true;
        },
        engineeringSystemsDataEditModeTrue() {
            this.engineeringSystemsDataEditMode = true;
        },
        deliveryDataEditModeTrue() {
            this.deliveryDataEditMode = true;
        },
        mountingDataEditModeTrue() {
            this.mountingDataEditMode = true;
        },
        designingDataEditModeTrue() {
            this.designingDataEditMode = true;
        },
        technicalDetailsDataEditModeTrue() {
            this.technicalDetailsDataEditMode = true;
        },

        goToLinkPage() {
            this.showLinkDataPage();
        },
        goToCommonDataPage() {
            this.showCommonDataPage();
        },
        goToComplectationDataPage() {
            this.hideDataPages();
            this.showComplectationData = true;
        },
        goToEngineeringSystemsDataPage() {
            this.hideDataPages();
            this.showEngineeringSystemsData = true;
        },
        goToDeliveryDataPage() {
            this.hideDataPages();
            this.showDeliveryData = true;
        },
        goToMountingDataPage() {
            this.hideDataPages();
            this.showMountingData = true;
        },
        goToDesigningDataPage() {
            this.hideDataPages();
            this.showDesigningData = true;
        },
        goToTechnicalDetailsDataPage() {
            this.hideDataPages();
            this.showTechnicalDetailsData = true;
        },
        openСalculation() {
            this.showCalculationData = true;
        },
        getTotalPrice() {
            axios.get('api/get-total-price/' + this.orderData.id).then(response => {
                this.showCalculationData = true
            }).catch(errors => {
                console.log(errors);
            });
        },

        getComplectationExteriorData() {
            axios.post('api/get-complectation-exterior/' + this.orderData.id).then(response => {
                this.complectationExteriorData = response.data;
            }).catch(errors => {
                console.log(errors);
            });
        },
    },
}
</script>

<style scoped>

input {
    background-color: #2b2b2c;
    color: #ffffff;
}
</style>
