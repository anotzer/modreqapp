<template>
    <div>
        <div class="page-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                Загрузка по месяцам
                            </div>
                            <div class="card-body">
                                <form action="">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="">Минимальный зарядный ток</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="enter value...">                                            
                                        </div>
                                        <input type="submit" class="btn btn-primary" value="Загрузить">                                     
                                    </div>
                                </form>
                                <br>
                                <form action="" >
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Январь</span>
                                            </div>
                                            <input v-model="JanHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="JanLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" v-on:click="Jan_send('Jan')" class="btn btn-primary" value="Загрузить">                        
                                    </div>
                                </form>
                                <br>
                                <form>
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Февраль</span>
                                            </div>
                                            <input v-model="FebHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="FebLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Feb_send('Feb')" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Март</span>
                                            </div>
                                            <input v-model="MarHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="MarLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Mar_send('Mar')" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Апрель</span>
                                            </div>
                                            <input v-model="AprHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="AprLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Apr_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Май</span>
                                            </div>
                                            <input v-model="MayHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="MayLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="May_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Июнь</span>
                                            </div>
                                            <input v-model="JunHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="JunLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Jun_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Июль</span>
                                            </div>
                                            <input v-model="JulHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="JulLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Jul_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Август</span>
                                            </div>
                                            <input v-model="AugHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="AugLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Aug_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Сентябрь</span>
                                            </div>
                                            <input v-model="SepHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="SepLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Sep_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Октябрь</span>
                                            </div>
                                            <input v-model="OctHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="OctLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Oct_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form action="/monthsend" method="post">
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Ноябрь</span>
                                            </div>
                                            <input v-model="NovHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="NovLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Nov_send()" class="btn btn-primary" value="Загрузить">                            
                                    </div>
                                </form>
                                <br>
                                <form>
                                    <div class="row">
                                        <div class="input-group col-md-8">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text label-width" id="">Декабрь</span>
                                            </div>
                                            <input v-model="DecHi" type="text" class="form-control" placeholder="Hi">
                                            <input v-model="DecLo" type="text" class="form-control" placeholder="Lo">
                                        </div>
                                        <input type="button" @click="Dec_send()" class="btn btn-primary" value="Загрузить">                         
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>

// I hope, the coders will forgive me
export default {
    data: function () {
        return {
            Month: null,
            JanHi: null,
            JanLo: null,
            FebHi: null,
            FebLo: null,
            MarHi: null,
            MarLo: null,
            AprHi: null,
            AprLo: null,
            MayHi: null,
            MayLo: null,
            JunHi: null,
            JunLo: null,
            JulHi: null,
            JulLo: null,
            AugHi: null,
            AugLo: null,
            SepHi: null,
            SepLo: null,
            OctHi: null,
            OctLo: null,
            NovHi: null,
            NovLo: null,
            OctHi: null,
            OctLo: null,
            NovHi: null,
            NovLo: null,
            DecHi: null,
            DecLo: null
        }
    },
    methods: {
        Jan_send () {
            this.Month = 'Jan';
            axios.post("/monthsend", { Month: this.Month, Hi: this.JanHi, Lo: this.JanLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Feb_send () {
            this.Month = 'Feb';
            axios.post("/monthsend", { Month: this.Month, Hi: this.FebHi, Lo: this.FebLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Mar_send () {
            this.Month = 'Mar';
            axios.post("/monthsend", { Month: this.Month, Hi: this.MarHi, Lo: this.MarLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Apr_send () {
            this.Month = 'Apr';
            axios.post("/monthsend", { Month: this.Month, Hi: this.AprHi, Lo: this.AprLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        May_send () {
            this.Month = 'May';
            axios.post("/monthsend", { Month: this.Month, Hi: this.MayHi, Lo: this.MayLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Jun_send () {
            this.Month = 'Jun';
            axios.post("/monthsend", { Month: this.Month, Hi: this.JunHi, Lo: this.JunLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Jul_send () {
            this.Month = 'Jul';
            axios.post("/monthsend", { Month: this.Month, Hi: this.JulHi, Lo: this.JulLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Aug_send () {
            this.Month = 'Aug';
            axios.post("/monthsend", { Month: this.Month, Hi: this.AugHi, Lo: this.AugLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Sep_send () {
            this.Month = 'Sep';
            axios.post("/monthsend", { Month: this.Month, Hi: this.SepHi, Lo: this.SepLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Oct_send () {
            this.Month = 'Oct';
            axios.post("/monthsend", { Month: this.Month, Hi: this.OctHi, Lo: this.OctLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Nov_send () {
            this.Month = 'Nov';
            axios.post("/monthsend", { Month: this.Month, Hi: this.NovHi, Lo: this.NovLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        },
        Dec_send () {
            this.Month = 'Dec';
            axios.post("/monthsend", { Month: this.Month, Hi: this.DecHi, Lo: this.DecLo })
            .then((re) => {
                console.log('(re) => {successful}')
            })
        }
    }
}
</script>