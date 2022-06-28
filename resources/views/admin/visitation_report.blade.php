@extends('layouts.master')
@section('title', 'Visitation List')


@section('content')

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
      <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
        <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Cards</h1>
        <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">Cards</li>
            <li class="breadcrumb-item active" aria-current="page">Card List</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
<!-- END Hero -->


<div class="content">

      <div class="block block-rounded">
        <div class="block-header block-header-default">
          <h3 class="block-title">Visitation List - <small>{{ $cards->count() }}</small></h3>
        </div>
         @if (session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
                                   
        <div class="block-content block-content-full">
          <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
          <table class="table table-bordered table-striped table-responsive table-vcenter js-dataTable-buttons">
            <thead>
              <tr>
                {{-- <th class="text-center" style="width: 80px;"></th> --}}
                <th style="width: 30%;">Name</th>
                <th class="d-none d-sm-table-cell" style="width: 20%;">Phone</th>
                <th class="d-none d-sm-table-cell">Address</th>
                <th class="d-none d-sm-table-cell">Report</th>
                <th style="width: 20%;">When Registered</th>
                {{-- <th style="width: 10%;">Action</th> --}}
              </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                @foreach ($cards as $card)
                    <tr>
                        <td class="fw-semibold">
                        <a href="#">{{ $card->name }}</a>
                        </td>
                        <td class="d-none d-sm-table-cell">
                        <em class="text-muted">{{ $card->phone}}</em>
                        </td>
                        <td class="d-none d-sm-table-cell">
                            {{ $card->address }}
                        </td>
                        <td class="d-none d-sm-table-cell">
                        {{ $card->visitation_report }}
                        </td>
                        <td class="d-none d-sm-table-cell">
                        {{ Carbon\Carbon::parse($card->created_at)->format('d-m-Y') }}
                        </td>
                    </tr>
                @endforeach
              
            </tbody>
          </table>
        </div>
      </div>
</div>

@endsection