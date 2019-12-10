@extends('admin::layouts.master')
@section('content')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/drilldown.js"></script>
    <h1 class="page-header">Tổng quan</h1>
    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder" style="position: relative;">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); margin-top: 0; color: whitesmoke; font-weight: bold">140 Thành viên</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder" style="position: relative;">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); margin-top: 0; color: whitesmoke; font-weight: bold">100 Sản phẩm</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder" style="position: relative;">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); margin-top: 0; color: whitesmoke; font-weight: bold">100 Bài viết</h4>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder" style="position: relative;">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4 style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); margin-top: 0; color: whitesmoke; font-weight: bold">30 Đánh giá</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">
            <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <div class="col-sm-8">
            <h2>Danh sách đơn hàng mới</h2>
            <table class="table table-striped">
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <h2 class="sub-header">Danh sách liên hệ mới nhất</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                </table>
            </div>
        </div>
        <div class="col-sm-6">
            <h2 class="sub-header">Danh sách đánh giá mới nhất</h2>
            <table class="table table-striped">
            </table>
        </div>
    </div>
@endsection
@section('script')
{{--    <script>--}}
{{--        --}}{{--let data = "{{ $dataMoney }}";--}}
{{--        dataChart = JSON.parse(data.replace(/&quot;/g, '"'));--}}

{{--        // console.log(dataChart);--}}

{{--        Highcharts.chart('container', {--}}
{{--            chart: {--}}
{{--                type: 'column'--}}
{{--            },--}}
{{--            title: {--}}
{{--                text: 'Biểu đồ doanh thu ngày và tháng'--}}
{{--            },--}}
{{--            xAxis: {--}}
{{--                type: 'category'--}}
{{--            },--}}
{{--            yAxis: {--}}
{{--                title: {--}}
{{--                    text: 'Mức độ'--}}
{{--                }--}}

{{--            },--}}
{{--            legend: {--}}
{{--                enabled: false--}}
{{--            },--}}
{{--            plotOptions: {--}}
{{--                series: {--}}
{{--                    borderWidth: 0,--}}
{{--                    dataLabels: {--}}
{{--                        enabled: true,--}}
{{--                        format: '{point.y:.1f} VND'--}}
{{--                    }--}}
{{--                }--}}
{{--            },--}}

{{--            tooltip: {--}}
{{--                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',--}}
{{--                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f} VND</b> of total<br/>'--}}
{{--            },--}}

{{--            series: [--}}
{{--                {--}}
{{--                    name: "Browsers",--}}
{{--                    colorByPoint: true,--}}
{{--                    data: dataChart,--}}
{{--                }--}}
{{--            ],--}}
{{--        });--}}
{{--    </script>--}}
@endsection
