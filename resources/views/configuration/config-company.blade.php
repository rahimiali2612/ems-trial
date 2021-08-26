{{-- layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Company')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/flag-icon/css/flag-icon.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/jquery.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css"
  href="{{asset('vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/data-tables/css/select.dataTables.min.css')}}">
@endsection

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/page-company.css')}}">
@endsection

{{-- page content --}}
@section('content')
@include('configuration.config-company-modal')

<div class="section section-data-tables">
  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <div class="row">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <div class="col s6">
              <h4 class="card-title">Companies List</h4>
            </div>
            <div class="col s6">
              <a class="waves-effect waves-light btn modal-trigger mb-2 mr-1 right border-round" 
                href="#" 
                data-target="create-company-modal"
                data-toggle="modal" 
                id="com-add-btn">Create</a>
            </a>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col s12">
              <table id="companies-list" class="display">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Company Name</th>
                    <th>Action</th>   
                  </tr>
                </thead>
                @foreach ($companies as $company)
                <tr>
                  <td>{{$company->id}}</td>
                  <td>{{$company->comp_name}}</td>
                  <td>
                    <a class="modal-trigger edit-company" href="#"
                    data-target="edit-company-modal"
                    data-toggle="modal"
                    data-id="{{$company->id}}"><i class="material-icons">edit</i></a>
                    <a href="{{asset('company-delete')}}"><i class="material-icons">delete</i></a>
                  </td>
                </tr>
                @endforeach
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/data-tables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendors/data-tables/js/dataTables.select.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-config.js')}}"></script>
@endsection