@extends('layouts.admin')
@section('content')
    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Dashboards</p>
                            <h4 class="my-1">{{ $widgets->dashboards }}</h4>

                        </div>
                        <div class="widgets-icons bg-light-success text-success ms-auto"><i class='fa fa-tachometer'></i>
                        </div>
                    </div>
                    <div id="chart1"></div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">Users</p>
                            <h4 class="my-1">{{ $widgets->users }}</h4>

                        </div>
                        <div class="widgets-icons bg-light-warning text-warning ms-auto"><i class='fa fa-users'></i>
                        </div>
                    </div>
                    <div id="chart2"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="card radius-10">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0 text-secondary">thematic areas</p>
                            <h4 class="my-1">{{ $widgets->thematic_areas }}</h4>

                        </div>
                        <div class="widgets-icons bg-light-danger text-danger ms-auto"><i class='fa fa-bars'></i>
                        </div>
                    </div>
                    <div id="chart3"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-xl-2">

        <div class="col-6">
            <div class="card">
                <div id="keyword-chart"></div>
            </div>
        </div>


        <div class="col-6">
            <div class="card">
                <div id="dashboard-chart"></div>
            </div>
        </div>

        <div class="col-6">
            <div class="card">
                <div id="thematic-chart"></div>
            </div>
        </div>


    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-title"></div>
                <div class="card-body">

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered" id="access_logs">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>System Name</th>
                                        <th>Thematic Area</th>
                                        <th>Access Frequency</th>
                                        <th>Access Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($areas as $area)
                                        <tr>
                                            <td>{{ $area->id }}</td>
                                            <td>{{ $area->description }}</td>
                                            <th>{{ $area->thematic_area }}</th>
                                            <td>{{ $area->count }}</td>
                                            <td>{{ $area->created_at }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        new PerfectScrollbar(".product-list");
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            var table = $('#access_logs').DataTable({
                "order": [
                    [0, "desc"]
                ],
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel', 'pdf', 'print'
                ],

                // Date Input

            });

            // clone Search Input in header and add datepicker id to the input amd change label
            $('#access_logs_filter').clone().appendTo('#access_logs_filter').find('input').attr('id', 'daterange')
                .attr('placeholder', 'Search by date').attr('type', 'text').find('label').text('Search by date');



            // Date range vars
            minDateFilter = "";
            maxDateFilter = "";

            $("#daterange").daterangepicker();
            $("#daterange").on("apply.daterangepicker", function(ev, picker) {
                minDateFilter = Date.parse(picker.startDate);
                maxDateFilter = Date.parse(picker.endDate);

                $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                    var date = Date.parse(data[1]);

                    if (
                        (isNaN(minDateFilter) && isNaN(maxDateFilter)) ||
                        (isNaN(minDateFilter) && date <= maxDateFilter) ||
                        (minDateFilter <= date && isNaN(maxDateFilter)) ||
                        (minDateFilter <= date && date <= maxDateFilter)
                    ) {
                        return true;
                    }
                    return false;
                });
                table.draw();
            });


        });
    </script>


    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            const topKeywordCHart = document.getElementById('keyword-chart');
            Highcharts.chart(topKeywordCHart, {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Top Searched Keywords'
                },
                xAxis: {
                    categories: {!! json_encode($top_keywords->pluck('search_phrase')) !!}
                },
                yAxis: {
                    title: {
                        text: 'Number of Searches'
                    }
                },
                series: [{
                    name: 'Number of Searches',
                    data: {!! json_encode($top_keywords->pluck('count')) !!}
                }]

            });

            const topDashboardCHart = document.getElementById('dashboard-chart');
            Highcharts.chart(topDashboardCHart, {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Top Searched Dashboards'
                },
                xAxis: {
                    categories: {!! json_encode($top_dashboards->pluck('item.title')) !!}
                },
                yAxis: {

                    title: {
                        text: 'Number of Searches'
                    }
                },
                series: [{
                    name: 'Number of Searches',
                    data: {!! json_encode($top_dashboards->pluck('count')) !!}
                }]

            });



            const topThematicCHart = document.getElementById('thematic-chart');
            Highcharts.chart(topThematicCHart, {
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Top Searched Thematic Areas'
                },
                xAxis: {
                    categories: {!! json_encode($areas->pluck('description')) !!}
                },
                yAxis: {

                    title: {
                        text: 'Number of Searches'
                    }
                },
                series: [{
                    name: 'Number of Searches',
                    data: {!! json_encode($areas->pluck('count')) !!}
                }]

            });
        });
    </script>
@endsection
