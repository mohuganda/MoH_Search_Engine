<!doctype html>
<html lang="en" class="color-sidebar sidebarcolor2">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('admin/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('admin/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('admin/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <!-- <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('admin/css/dark-theme.css') }}" />
 <link rel="stylesheet" href="{{ asset('admin/css/semi-dark.css') }}" /> -->
    <link rel="stylesheet" href="{{ asset('admin/css/header-colors.css') }}" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('theme/css/font-awesome.min.css') }}">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('theme/css/filter_multi_select.css') }}" />

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css'>

    <title>Dashboards Portal</title>

    <style type="text/css">
        .form-group {
            padding-bottom: 10px;
        }

        .btn-wrapper {
            padding: 0px 70px;
            padding-bottom: 10px;
        }

        .card {
            margin-bottom: 10px;
        }

        select>.viewbar>.selected-items>.item {
            margin: 0.125rem 0.25rem 0.125rem 0;
            padding: 0px 0px 0px 0.5em;
            display: inline-flex;
            height: 1.875em;
            color: #202;
            background-color: #1788b3;
            border-radius: 1.1em;
            align-items: center;
            vertical-align: baseline;
        }
    </style>

    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>

<body>
