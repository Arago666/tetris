import './bootstrap';

import '../sass/app.scss'


import {createApp} from "vue/dist/vue.esm-bundler";

import MainComponent from "./components/order/MainComponent.vue";
import AllOrderComponent from "./components/order/AllOrderComponent.vue";
import OrderComponent from "./components/order/OrderComponent.vue";
import LinkComponent from "./components/order/LinkComponent.vue";
import CommonDataComponent from "./components/order/CommonDataComponent.vue";
import ComplectationComponent from "./components/order/complectation/ComplectationComponent.vue";
import EngineeringSystemsComponent from "./components/order/EngineeringSystemsComponent.vue";
import DeliveryComponent from "./components/order/DeliveryComponent.vue";
import MountingComponent from "./components/order/MountingComponent.vue";
import DesigningComponent from "./components/order/DesigningComponent.vue";
import TechnicalDetailsComponent from "./components/order/TechnicalDetailsComponent.vue";
import ComplectationInteriorComponent from "./components/order/complectation/ComplectationInteriorComponent.vue";
import ComplectationFurnitureAndAccessoriesComponent from "./components/order/complectation/ComplectationFurnitureAndAccessoriesComponent.vue";
import ComplectationExteriorComponent from "./components/order/complectation/ComplectationExteriorComponent.vue";
import ComplectationColorSolutionsComponent from "./components/order/complectation/ComplectationColorSolutionsComponent.vue";
import CalculationComponent from "./components/order/CalculationComponent.vue";

import ExampleComponent from "./components/ExampleComponent.vue";

import TetrisComponent from "./components/TetrisComponent.vue";

const app = createApp({
    components: {
        MainComponent,
        ExampleComponent,
        AllOrderComponent,
        OrderComponent,
        LinkComponent,
        CommonDataComponent,
        ComplectationComponent,
        EngineeringSystemsComponent,
        DeliveryComponent,
        MountingComponent,
        DesigningComponent,
        TechnicalDetailsComponent,
        ComplectationInteriorComponent,
        ComplectationFurnitureAndAccessoriesComponent,
        ComplectationExteriorComponent,
        ComplectationColorSolutionsComponent,
        CalculationComponent,
        TetrisComponent
    }
});



import * as VueRouter from 'vue-router'
const routes = [
    // {path: '/', component: ExampleComponent},
    {path: '/order', component: MainComponent},
    {path: '/tetris', component: TetrisComponent}
]


const router = VueRouter.createRouter({
    history: VueRouter.createWebHistory('/'),
    routes,
})
app.use(router)



app.mount('#app')
