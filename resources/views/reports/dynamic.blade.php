@extends('layouts.admin')

@section('content')
    {{-- Dynamic Table --}}
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Some Table Name</h3>
        </div>

        <div class="card-body">
            {{-- Table from $columns --}}
            <table id="dynamic" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        @foreach ($columns as $column)
                            <th>{{ Str::upper(str_replace('_', ' ', $column)) }}</th>
                        @endforeach
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                        <tr>
                            {{-- Loop through $columns to get the values --}}
                            @foreach ($columns as $column)
                                {{-- Return html response --}}
                                @if ($column == 'url_link')
                                    <td>
                                        <a href="{{ $record->url_link }}">{{ $record->title }}</a>

                                    </td>
                                @else
                                    <td>{{ $record->$column }}</td>
                                @endif
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
        </div>
    @endsection
