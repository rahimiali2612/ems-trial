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
<link rel="stylesheet" type="text/css" href="{{asset('vendors/sweetalert/sweetalert.css')}}">
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
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif --}}
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
                    <form action="{{ route('con-companies.destroy',$company->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                    <a class="modal-trigger edit-company mb-6 btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange" href="#"
                    data-target="edit-company-modal"
                    data-toggle="modal"
                    data-id="{{$company->id}}"
                    data-company_name="{{$company->comp_name}}"><i class="material-icons">edit</i></a> 
                    <button type="submit" class="mb-6 btn-floating waves-effect waves-light gradient-45deg-purple-deep-orange"><i class="material-icons">delete</i></button>
                    </form>
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
<script src="{{asset('vendors/sweetalert/sweetalert.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/page-config.js')}}"></script>

@if ($message = Session::get('success'))
<script>
  $(function () {
    swal({
			title: 'Success',
      text: "Data Saved",
			icon: 'success'
		})
  });
</script>
@endif

@if ($message = Session::get('error'))
<script>
  $(function () {
    swal({
			title: 'Error',
      text: "Please check your process",
			icon: 'Error'
		})
  });
</script>
@endif

@endsection