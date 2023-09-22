@extends('layouts.master')
@section('title', 'All Guest List')

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

        
          <!-- Dynamic Table with Export Buttons -->

<div class="content">


          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Guest List in {{ $church_centre }} Centre <small> - {{ $cards->count() }}</small></h3>
            </div>
             @if (session('success'))
                  <div class="alert alert-success">
                      {{ session('success') }}
                  </div>
              @endif
                                       
            <div class="block-content block-content-full">
              <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
              <div class="table-responsive">
                  <table class="table table-bordered table-striped table-responsive table-vcenter js-dataTable-buttons">
                    <thead>
                      <tr>
                        {{-- <th class="text-center" style="width: 80px;"></th> --}}
                        <th style="width: 30%;">User</th>
                        <th style="width: 30%;">Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Email</th>
                        <th class="d-none d-sm-table-cell">Centre</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Phone</th>
                        <th class="d-none d-sm-table-cell">Age Bracket</th>
                        <th class="d-none d-sm-table-cell">Born Again</th>
                        <th class="d-none d-sm-table-cell">How You Heard of HOD</th>
                        <th class="d-none d-sm-table-cell">Membership</th>
                        <th class="d-none d-sm-table-cell">Visitation</th>
                        <th class="d-none d-sm-table-cell">Program</th>
                        <th class="d-none d-sm-table-cell">Location</th>
                        <th class="d-none d-sm-table-cell">Address</th>
                        <th class="d-none d-sm-table-cell">Report</th>
                        <th style="width: 20%;">Service Date</th>
                        {{-- <th style="width: 10%;">Action</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @forelse ($cards as $card)
                          <tr>
                            <td class="fw-semibold">
                              <a href="#">{{ $card->user->name }}</a>
                              </td>
                              <td class="fw-semibold">
                              <a href="#">{{ $card->name }}</a>
                              </td>
                              <td class="d-none d-sm-table-cell">
                              <em class="text-muted">{{ $card->email }}</em>
                              </td>
                              <td class="d-none d-sm-table-cell">
                                  <em class="text-muted">{{ $card->churchCentre->name }}</em>
                                  </td>
                              <td class="d-none d-sm-table-cell">
                              <em class="text-muted">{{ $card->phone}}</em>
                              </td>
                              <td class="d-none d-sm-table-cell">
                              {{ $card->age }}
                              </td>
                              <td class="d-none d-sm-table-cell">
                              
                              @if($card->born_again == '1')
                                    YES
                                @elseif($card->born_again == '0')
                                    NO
                                @else
                                  {{ $card->born_again}}
                                @endif
                              </td>
                              <td class="d-none d-sm-table-cell">
                                @if($card->source == '1' || $card->source == 'other')
                                    {{ $card->source_other }}
                                @else
                                  {{ $card->source }}
                                  @endif
                              </td>
                              <td class="d-none d-sm-table-cell">
                                @if($card->member == '1')
                                    YES
                                @elseif($card->member == '0')
                                    NO
                                @else
                                  {{ $card->member}}
                                @endif
                              </td>
                              <td class="d-none d-sm-table-cell">
                                @if($card->visitation == '1')
                                    YES
                                @elseif($card->visitation == '0')
                                    NO
                                @else
                                  {{ $card->visitation}}
                                @endif
                              </td>
                              <td class="d-none d-sm-table-cell">
                              {{ $card->program }}
                              </td>
                              <td class="d-none d-sm-table-cell">
                                {{ $card->location }}
                              </td>
                              <td class="d-none d-sm-table-cell">
                                  {{ $card->address }}
                              </td>
                              <td class="d-none d-sm-table-cell">
                              {{ $card->comment }}
                              </td>
                              <td class="d-none d-sm-table-cell">
                              {{ Carbon\Carbon::parse($card->date_added)->format('d-m-Y') }}
                              </td>
                              
                              {{-- <td>
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modal-block-vcenter_{{ $card->id }}">View</button>
                    
                                  {{-- <a href="" class="btn btn-primary btn-sm">View</a> 
                              </td> --}}
                          </tr>
                          {{--  --}}
                        @empty
                          <tr>
                            <td colspan="15">No record found</td>
                          </tr>
                        @endforelse
                      
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
</div>
          <!-- END Dynamic Table with Export Buttons -->

@endsection