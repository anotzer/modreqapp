<template>
    <div>
    <div id="desc">Мониторинг</div>
        <div class="container">
            <div class="row ">
                <!-- start code main battery -->

                <div class="col-md-4" style="margin-left: 20px;">
                    <div class="row battery_info" style="border: 1px solid gray; border-radius: 5%; padding: 5px 0 0 3px;">
                        <div class="col-md-6 row">
                            <div class="">
                                <div v-if="items.status !== null" > Status: {{items.status}}</div>
                                <div v-if="items.SOC !== null" > SOC: {{items.SOC}}</div>
                                <div v-if="items.Current_current !== null" > Текущий ток: {{items.Current_current ? items.Current_current : 'Null'}}</div>
                            </div>
                            
                            
                        </div>
                        <div class="col-md-6 justify-content-right">
                            <div class="col-md-12" >
                                <div id="battery-level-pipe"></div>
                                <div id="battery">
                                    <div id="battery-level" class="battery-animation" :style="{height: items.SOC + '%',}"></div>
                                    <div id="battery-level-digit"></div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 titlebat2" style="padding-bottom: 50px;">
                    <div class="">
                        <div class="">
                            <img :src="'images/generator.jpg'" width="200px" alt="">
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
                items: '',
                info: null,
                interval: null
            }
        },
        created() {
            this.interval = setInterval(this.get_columns, 20000),
            console.log('dasdas '+__dirname)
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