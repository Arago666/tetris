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
                    <div v-for="(tetris, row) in tetrisGrid"  style="width: 100%; height: 30px; color: white;">

                        <div v-for="(tetris1, cell) in tetris" style="color: white;float: left;">
                            <button @mouseup="mouseup" @mousedown="mousedown(row,cell)" @mouseover="mouseOver(row,cell)" type="button"
                                    :style="`width: 50px; height: 30px;float:left; color: red; ${tetris1 == 1 ? 'background-color: #896b6b;' : '' }`"
                            ></button>
                        </div>
                    </div>

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
            tetrisGrid: [
                [0, 1, 0],
                [0, 0, 0],
                [0, 0, 0],

            ],
            coordinate: {
                x: 4,
                y: 4,
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
            this.tetrisGrid = [];

            for (let i = 0; i < this.coordinate.y; i++) {
                let arr = [];
                for (let j = 0; j < this.coordinate.x; j++) {
                    arr.push(0);
                    // this.tetrisGrid[i][j] = 0;
                    // this.tetrisGrid.push([0,0,0,0]);
                }
                this.tetrisGrid.push(arr);
            }
        },
        mouseClick(row,cell) {
            let arr = this.tetrisGrid[row];
            arr[cell] = 1;
            this.tetrisGrid[row] = arr;
        },
        getTetrisByGameId() {
            axios.get('api/get-tetris').then(response => {
                console.log(response.data);
                this.tetrisGrid = response.data;
            }).catch(errors => {
                console.log(errors)
            });
        },
        mouseOver(row,cell) {
            if (this.editMode == true) {
                this.mouseClick(row,cell);
            }
        },
        mouseup() {
            this.editMode = false;
            this.check();
            this.addBlock();
            // console.log(this.editMode);
            // this.check();
            // this.addBlock();

        },
        mousedown(row,cell) {
            this.editMode = true;
            this.mouseClick(row,cell);
            // console.log(this.editMode);
            // this.mouseOver(id);
        },
        check() {
            let oldArr = [];
            for (let i = 0; i < this.coordinate.y; i++) {
                let arr = [];
                for (let j = 0; j < this.coordinate.x; j++) {
                    arr.push(this.tetrisGrid[i][j]);
                }
                oldArr.push(arr);
            }

            this.checkRow(oldArr);
            this.checkCell(oldArr);
        },
        checkRow(oldArr) {
            for (let i = 0; i < this.coordinate.y; i++) {
                let count = 0;
                for (let j = 0; j < this.coordinate.x; j++) {
                    if(oldArr[i][j] ==  1) {
                        count++;
                    }
                }
                if (count == this.coordinate.x) {
                    let arr = [];
                    for (let k = 0; k < this.coordinate.x; k++) {
                        arr.push(0);
                        // this.tetrisGrid[i][j] = 0;
                        // this.tetrisGrid.push([0,0,0,0]);
                    }

                    this.tetrisGrid[i] = arr;
                }
            }
        },
        checkCell(oldArr) {
            console.log(oldArr);
            for (let j = 0; j < this.coordinate.x; j++) {
                let count = 0;
                for (let i = 0; i < this.coordinate.y; i++) {
                    if(oldArr[i][j] ==  1) {
                        count++;
                    }
                }
                if (count == this.coordinate.y) {
                    for (let row = 0; row < this.coordinate.x; row++) {
                        let arr = this.tetrisGrid[row];
                        arr[j] = 0;
                        this.tetrisGrid[row] = arr;
                    }
                }
            }
        },
        addBlock() {
            for (let j = 0; j < this.coordinate.countBlockToAdd; j++) {
                let checkParam = true;
                let count = 0;
                while (checkParam) {
                    let rowNumber = Math.floor(Math.random() * this.coordinate.y);
                    let cellNumber = Math.floor(Math.random() * this.coordinate.x);
                    if (this.checkToAddBlock(rowNumber, cellNumber)) {
                        count++;
                        if (count == 100) {
                            alert("Вы проиграли");
                            this.storeTetris();
                            checkParam = false;
                            j = this.coordinate.countBlockToAdd;
                        }
                        continue;
                    }
                    if (this.tetrisGrid[rowNumber][cellNumber] == 0) {
                        checkParam = false;

                        let arr = this.tetrisGrid[rowNumber];
                        arr[cellNumber] = 1;
                        this.tetrisGrid[rowNumber] = arr;
                    }
                }
            }
        },
        checkToAddBlock(row, cell) {
            let count = 0;
            for (let j = 0; j < this.coordinate.x; j++) {
                if(this.tetrisGrid[row][j] ==  1) {
                    count++;
                }
            }
            if (count+1 == this.coordinate.x) {
                return true;
            }

            count = 0;
            for (let i = 0; i < this.coordinate.y; i++) {
                if(this.tetrisGrid[i][cell] ==  1) {
                    count++;
                }
            }
            if (count+1 == this.coordinate.y) {
                return true;
            }

            return false;
        }
    },
}
</script>

<style scoped>

</style>
