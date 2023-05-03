<template>
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="col-md-12">
                <div class="card bg-dark">
                    <div class="card-header " style="background-color: #14161e;">
                        <div class="row">
                            <div class="col-md-6 text-center">
                                <h5 class="text-light float-start fw-bold align-items-center">{{title}}</h5>
                            </div>

                        </div>
                    </div>


                    <div class="card-body bg-dark" >
                        <div>
                            <div v-for="n in 16"  style="width: 100%; height: 30px;">
                                <div v-for="x in 15" >
                                    <div v-for="(tetris, index) in tetrisGrid" :key="index">
                                        <div v-if="tetris.x_coordinate == x-1">
                                            <div v-if="tetris.y_coordinate == n-1">
<!--                                                <button @mouseup="@mouseup" @mousedown="mousedown" @mouseover="mouseOver(tetris.id)" @click="editOrder(tetris)" type="button" style="width: 50px; height: 30px;float:left; color: red;">{{tetris.value}}</button>-->
                                                <button @mouseup="mouseup" @mousedown="mousedown(tetris.id)"  @mouseover="mouseOver(tetris.id)" type="button"
                                                        :style="`width: 50px; height: 30px;float:left; color: red; ${tetris.value == 1 ? 'background-color: #896b6b;' : '' }`"
                                                ></button>

                                            </div>
                                        </div>

                                    </div>



<!--                                    <button type="button" style="width: 50px; height: 30px;float:left; color: red;">-->
<!--                                        <div v-for"">-->
<!--                                            <div v-if="showOtherData">                                            -->
<!--                                        </div>-->
<!--                                    </button>-->
                                </div>
                            </div>
                        </div>
                    </div>
<!--                    <div v-for="(tetris, index) in tetrisGrid" :key="index" style="color:white;">-->
<!--                        {{ tetris.x_coordinate }}-->
<!--                    </div>-->

                    <div style="margin-top: 400px;color: white;">
                        <div class="col-md-6 text-center" style="margin: 25px;">
                            <h5 class="text-light float-start fw-bold align-items-center">Параметры</h5>
                        </div>
                        <div class="border card-body m-3" style="margin: 15px;">

                            <div class="row m-4">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Количество строк</label>
                                        <input type="text" class="form-control" v-model="coordinate.y">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Количество столбцов</label>
                                        <input type="text" class="form-control" v-model="coordinate.x">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Количество Блоков для добавления</label>
                                        <input type="text" class="form-control" v-model="coordinate.countBlockToAdd">
                                    </div>

                                    <div class="form-group" style="margin-top: 15px;">
                                        <button type="button" @click="storeTetris" class="btn btn-success"
                                        >Применить
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div >

                </div>
            </div>
        </div>
    </div>

</template>

<script>

export default {
    setup: () => ({
        title: "Тетрис"
    }),
    data() {
        return {
            editMode: false,
            tetrisGrid: {},
            coordinate: {
                x: 10,
                y: 10,
                countBlockToAdd: 1,
            },
            checkStatus: true,
        }
    },
    mounted() {
        this.getTetrisByGameId();
    },
    methods: {
        storeTetris() {
            axios.post('api/store-tetris', this.coordinate).then(response => {
                console.log(response.data);
                this.getTetrisByGameId();
            }).catch(errors => {
                console.log(errors)
            });
        },
        getTetrisByGameId() {
            axios.get('api/get-tetris').then(response => {
                console.log(response.data);
                this.tetrisGrid = response.data;
            }).catch(errors => {
                console.log(errors)
            });
        },
        mouseOver(id) {
            if (this.editMode == true) {
                axios.post('api/update-tetris/' + id).then(response => {
                    console.log(response.data);
                    this.getTetrisByGameId();
                }).catch(errors => {
                    console.log(errors)
                });
                console.log('mouseOverTrue');
            }
        },
        mouseup() {
            this.editMode = false;

            console.log(this.editMode);
            this.check();
            this.addBlock();

        },
        mousedown(id) {
            this.editMode = true;
            console.log(this.editMode);
            this.mouseOver(id);
        },
        check() {
            axios.post('api/check-tetris', this.coordinate).then(response => {
                console.log(response.data);
            }).catch(errors => {
                console.log(errors)
            });
            this.getTetrisByGameId();
        },
        addBlock() {
            axios.post('api/add-block-tetris', this.coordinate).then(response => {
                console.log(response.data);
            }).catch(errors => {
                console.log(errors)
            });
            this.getTetrisByGameId();
        },




    },
}
</script>

<style scoped>

</style>
