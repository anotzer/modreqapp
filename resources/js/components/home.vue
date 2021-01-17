<template>
    <div>
    <div id="desc">Мониторинг</div>
        <div class="desc__container">
            <div class="row">
                <!-- start code main battery -->

                <div class="col-md-5" style="padding-bottom: 50px;">
                    <div class="card">
                        <div class="">
                            <a class="titlebat" style="margin-left: 30px;"> SOC </a>
                        </div>
                        <br>
                        <div class="">
                            <div class="col-md-12 d-flex justify-content-center" >
                                <div id="battery-level-pipe"></div>
                                <div id="battery">
                                    <div id="battery-level" class="battery-animation" :style="{height: items.SOC + '%',}"></div>
                                    <div id="battery-level-digit"></div>
                                </div>
                            </div>    
                            <br>                        
                            <div :style="{text: center}" v-if="items.SOC !== null" style="margin-left: 37px;">{{items.SOC}}</div>
                            <div v-else >Undefined</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 titlebat2" style="padding-bottom: 50px;">
                    <div class="card">
                        <div class="card-header">
                            <a v-on:click="counts++"> Current </a>
                        </div>
                        <div class="card-body">
                            <div v-if="items.Current !== null">{{items.Current}}</div>
                            <div v-else >Undefined</div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 titlebat3" style="">
                    <div class="card">
                        <div class="card-body row">
                            <div class="col-md-4 row" v-for="(value, k) in items" :key="k">
                                <div class="text-left col-md-8">{{'| ' + k + ' : '}}</div><div class="text-right col-md-3">{{'' + value + ' |'}}</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- End of main battery -->                
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data: function () {
            return {
                counts: 0,
                items: null,
                info: null,
                interval: null
            }
        },
        created() {
            this.interval = setInterval(this.get_columns, 200)
        },
        beforeDestroy () {
            clearInterval(this.interval)
        },
        mounted() {
            this.get_columns ()
        },
        sockets() {
            console.log('dasdasd');
        },
        methods: {
            get_columns () {
                axios.get("/info")
                .then(response => {
                    this.items = response.data
                })
            }
        }

        // Посмотреть как работают запросы в пхп и как настраивать api роуты
    }
</script>