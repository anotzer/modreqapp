<template>
    <div class="">
            <!-- Page Container START -->
            <div class="page-container">
                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="row">
                        <!-- BATTERY  -->
                        <div class="col-md-6 col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="col-md-6">
                                            <div class="col-md-12">                               
                                                <div id="battery-level-pipe"></div>
                                                <div id="battery">                                                    
                                                    <div id="battery-level-hi" class="battery-animation" :style="{height: (items.SOC) + '%',}">
                                                        <div :style="{transform: 'rotate(180deg)', position: 'absolute', top: 85+'%', left: '100px'}">
                                                            {{(items.SOC)}} HI
                                                        </div>
                                                    </div>
                                                    
                                                    <div id="battery-level-lo" class="battery-animation" :style="{height: check_info(items.SOH) + '%',}">
                                                        <div :style="{transform: 'rotate(180deg)', position: 'absolute', top: 35+'%', left: '100px'}">
                                                            {{check_info(items.SOH)}} LO
                                                        </div>
                                                    </div>                                                  
                                                    <div id="battery-level" class="battery-animation" :style="{height: items.SOC + '%',}"></div>
                                                    
                                                    <div id="battery-level-digit"></div>                                                    
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">{{items.SOC}}%</h2>
                                            <p class="m-b-0 text-muted">Заряд Батареи</p>
                                            <h2 class="m-b-0">{{items.SOH ? items.SOH : '0'}}%</h2>
                                            <p class="m-b-0 text-muted">Здоровье аккумулятора</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END BATTERY  -->

                        <div class="col-md-6 col-lg-3">
                            <div class="card" style="height: 260px; padding: bottom: 20px;">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="">
                                            <img width="100" height="200" src="https://pngimg.com/uploads/lightning/lightning_PNG24.png" alt="">
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">{{items.Current ? items.Current : '0'}} A</h2>
                                            <p class="m-b-0 text-muted">Ток (0.1/bit )</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="card" style="height: 260px; padding: bottom: 20px;">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="" >
                                            <img width="100" height="200" src="https://img.icons8.com/emoji/452/high-voltage.png" alt="">
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">{{items.Total_voltage_of_pack ? items.Total_voltage_of_pack : '0'}} V</h2>
                                            <p class="m-b-0 text-muted">Общее напряжение блока (1/bit)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3">
                            <div class="card" style="height: 260px; padding: bottom: 20px;">
                                <div class="card-body">
                                    <div class="media align-items-center">
                                        <div class="">
                                            <img width="100" height="200" src="https://img.icons8.com/emoji/452/high-voltage.png" alt="">
                                        </div>
                                        <div class="m-l-15">
                                            <h2 class="m-b-0">{{items.Average_cell_voltage ? items.Average_cell_voltage : '0'}} mV</h2>
                                            <p class="m-b-0 text-muted">Среднее напряжение ячейки (0.1/bit )</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5>Статистика заряда аккумулятора</h5>
                                        <div>
                                            <div class="btn-group">
                                                <button class="btn btn-default active">
                                                    <span>Текущий день</span>
                                                </button>
                                                <!-- <button class="btn btn-default">
                                                    <span>Year</span>
                                                </button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-t-50 col-md-8" style="height: 330px;" v-if="loaded">
                                        <canvas ref="canvas" class="chart">

                                        </canvas>
                                        <!-- <canvas class="chart" id="revenue-chart"></canvas> -->
                                    </div>
                                    <div class="m-t-50 col-md-8" style="height: 330px;" v-else-if="errored">
                                        Error...
                                    </div>
                                    <div class="m-t-50 col-md-8" style="height: 330px;" v-else>
                                        Loading...
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="m-b-0">Дополнительная информация</h5>
                                    <div class="m-v-60 text-center" style="height: 200px">
                                        <!-- <canvas class="chart" id="customers-chart"></canvas> -->
                                        Какая то информация
                                    </div>
                                    <div class="row border-top p-t-25">
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">{{items.battery_voltage ? items.battery_voltage : '0'}}</h4>
                                                        <p class="m-b-0 muted">Вольтаж батареи</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">{{items.battery_voltage ? items.battery_voltage : '0'}}</h4>
                                                        <p class="m-b-0 muted">Вольтаж батареи</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="d-flex justify-content-center">
                                                <div class="media align-items-center">
                                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                                    <div class="m-l-5">
                                                        <h4 class="m-b-0">{{items.battery_voltage ? items.battery_voltage : '0'}}</h4>
                                                        <p class="m-b-0 muted">Вольтаж батареи</p>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="m-b-0">Latest Upload</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-word text-primary"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Documentation.doc</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">1.2MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-excel text-success"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Expensess.xls</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">518KB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-text text-secondary"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Receipt.txt</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">355KB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-word text-primary"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Project Requirement.doc</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">1.6MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-b-25">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-pdf text-danger"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">App Flow.pdf</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">19.8MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div class="media align-items-center">
                                                    <div class="font-size-35">
                                                        <i class="anticon anticon-file-ppt text-warning"></i>
                                                    </div>
                                                    <div class="m-l-15">
                                                        <h6 class="m-b-0">
                                                            <a class="text-dark" href="javascript:void(0);">Presentation.ppt</a>
                                                        </h6>
                                                        <p class="text-muted m-b-0">2.7MB</p>
                                                    </div>
                                                </div>
                                                <div class="dropdown dropdown-animated scale-left">
                                                    <a class="text-gray font-size-18" href="javascript:void(0);" data-toggle="dropdown">
                                                        <i class="anticon anticon-ellipsis"></i>
                                                    </a>
                                                    <div class="dropdown-menu">
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-eye"></i>
                                                            <span class="m-l-10">View</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-download"></i>
                                                            <span class="m-l-10">Download</span>
                                                        </button>
                                                        <button class="dropdown-item" type="button">
                                                            <i class="anticon anticon-delete"></i>
                                                            <span class="m-l-10">Remove</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <div class="card">
                                <div class="card-body">
                                   <div class="d-flex justify-content-between align-items-center">
                                        <h5>Еще Инфа</h5>
                                        <div>
                                            <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                                        </div>
                                    </div>
                                    <div class="m-t-30">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Sales</th>
                                                        <th>Earning</th>
                                                        <th style="max-width: 70px">Stock Left</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="assets/images/others/thumb-9.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Gray Sofa</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>81</td>
                                                        <td>$1,912.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-success" style="width: 82%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    82
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="assets/images/others/thumb-10.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Gray Sofa</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>26</td>
                                                        <td>$1,377.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-success" style="width: 61%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    61
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="assets/images/others/thumb-11.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Wooden Rhino</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>71</td>
                                                        <td>$9,212.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-danger" style="width: 23%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    23
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="assets/images/others/thumb-12.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Red Chair</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>79</td>
                                                        <td>$1,298.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-warning" style="width: 54%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    54
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <div class="media align-items-center">
                                                                <div class="avatar avatar-image rounded">
                                                                    <img src="assets/images/others/thumb-13.jpg" alt="">
                                                                </div>
                                                                <div class="m-l-10">
                                                                    <span>Wristband</span>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>60</td>
                                                        <td>$7,376.00</td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <div class="progress progress-sm w-100 m-b-0">
                                                                    <div class="progress-bar bg-success" style="width: 76%"></div>
                                                                </div>
                                                                <div class="m-l-10">
                                                                    76
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        
                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="footer">
                    <div class="footer-content">
                        <p class="m-b-0"></p>
                        <span>
                            <a href="" class="text-gray m-r-15"></a>
                            <a href="" class="text-gray"></a>
                        </span>
                    </div>
                </footer>
                <!-- Footer END -->

            </div>
            <!-- Page Container END -->
    </div>
</template>

<script>
import { Line } from 'vue-chartjs'
export default {
    extends: Line,
    data: function () {
        return {
            items: '',
            interval: null,
            chartData: [],
            loaded: false,
            errored: false,
        }
    },
    beforeCreate() {
        
    },
    created() {
        this.get_columns(),
        this.interval = setInterval(this.get_columns, 2000)
    },
    beforeDestroy () {
        clearInterval(this.interval)
    },
    beforeMount() {     
    },
    mounted() {
        axios.get("/chartData")
        .then(response => {
            response.data.forEach((element) => this.chartData.push(element.SOC))
            this.loaded = true;
        })
        .catch(error => {
            console.log(error)
            this.errored = true
        })
        .finally(() => {this.data_render(), this.loaded = true});
    },
    computed: {

    },
    watch: {
        
    },
    methods: {
        data_render() {
            this.renderChart({
            labels: ['1h', '2h', '3h', '4h', '1h', '2h', '3h', '4h'],
            datasets: [{
                label: '# Click 2 times',
                data: this.chartData, // this.chartData [1,2,3,4]
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 2
                }]
            })
        },
        get_columns () {
            axios.get("/info")
            .then(response => {
                this.items = response.data
            })
        },
        check_info (item) {
            if (item === null) {
                return 0;
            }else {
                return item;
            }
        },
        get_chartData() {
            axios.get("/chartData")
            .then(response => {
                this.chartData = response.data
            })
        }
    }

        // Configure API routes
}
</script>