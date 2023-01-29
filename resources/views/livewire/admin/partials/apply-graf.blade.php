<div class="card mb-10">
    <!--begin::Header-->
    <div class="card-header border-0 bg-success py-5">
        <h3 class="card-title fw-bold text-white">Job Applied</h3>
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body p-0">
        <!--begin::Chart-->
        <div class="applied-jobs card-rounded-bottom bg-success" data-kt-color="success"
            style="height: 250px"></div>
        <!--end::Chart-->
        <!--begin::Stats-->
        <div class="card-rounded bg-body mt-n10 position-relative card-px py-15">
            <!--begin::Row-->
            <div class="row g-0 mb-7">
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-400">Total Job Created</div>
                    <div class="fs-2 fw-bold text-gray-800">{{ $total_job }} Jobs</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-400">Total Job Applied</div>
                    <div class="fs-2 fw-bold text-gray-800">{{ $total_applied }} Jobs</div>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
            <!--begin::Row-->
            {{-- <div class="row g-0">
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-400">Revenue</div>
                    <div class="fs-2 fw-bold text-gray-800">$55,000</div>
                </div>
                <!--end::Col-->
                <!--begin::Col-->
                <div class="col mx-5">
                    <div class="fs-6 text-gray-400">Expenses</div>
                    <div class="fs-2 fw-bold text-gray-800">$1,130,600</div>
                </div>
                <!--end::Col-->
            </div> --}}
            <!--end::Row-->
        </div>
        <!--end::Stats-->
    </div>
    <!--end::Body-->
</div>
@push('script')
    <script>
        $(document).ready(function(){
            initMixedWidget12();
            console.log('a',@this.get('job'), @this.get('applied'), [35, 65, 75, 55, 45, 60, 55, 10, 10, 20, 30, 40])
        })
        var initMixedWidget12 = function() {
        var charts = document.querySelectorAll('.applied-jobs');

        var color;
        var strokeColor;
        var height;
        var labelColor = KTUtil.getCssVariableValue('--kt-gray-500');
        var borderColor = KTUtil.getCssVariableValue('--kt-gray-200');
        var options;
        var chart;

        [].slice.call(charts).map(function(element) {
            height = parseInt(KTUtil.css(element, 'height'));

            var options = {
                series: [{
                    name: 'Job Created',
                    data: @this.get('job')
                }, {
                    name: 'Job Applied',
                    data: @this.get('applied')
                }],
                chart: {
                    fontFamily: 'inherit',
                    type: 'bar',
                    height: height,
                    toolbar: {
                        show: false
                    },
                    sparkline: {
                        enabled: true
                    },
                },
                plotOptions: {
                    bar: {
                        horizontal: false,
                        columnWidth: ['30%'],
                        borderRadius: 2
                    }
                },
                legend: {
                    show: true
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    show: true,
                    width: 1,
                    colors: ['transparent']
                },
                xaxis: {
                    categories: ['Jan','Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Des'],
                    axisBorder: {
                        show: false,
                    },
                    axisTicks: {
                        show: false
                    },
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '12px'
                        }
                    }
                },
                yaxis: {
                    min: 0,
                    max: 100,
                    labels: {
                        style: {
                            colors: labelColor,
                            fontSize: '12px'
                        }
                    }
                },
                fill: {
                    type: ['solid', 'solid'],
                    opacity: [0.25, 1]
                },
                states: {
                    normal: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    hover: {
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    },
                    active: {
                        allowMultipleDataPointsSelection: false,
                        filter: {
                            type: 'none',
                            value: 0
                        }
                    }
                },
                tooltip: {
                    style: {
                        fontSize: '12px'
                    },
                    y: {
                        formatter: function (val) {
                            return val + " %"
                        }
                    },
                    marker: {
                        show: false
                    }
                },
                colors: ['#ffffff', '#ffffff'],
                grid: {
                    borderColor: borderColor,
                    strokeDashArray: 4,
                    yaxis: {
                        lines: {
                            show: true
                        }
                    },
                    padding: {
                        left: 20,
                        right: 20
                    }
                }
            };

            var chart = new ApexCharts(element, options);
            chart.render()
        });
    }
    </script>
@endpush
