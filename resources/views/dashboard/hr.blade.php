{{-- extend layout --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Dashboard Human Resource')

{{-- page style --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard.css')}}">
@endsection

{{-- page content --}}
@section('content')
<div class="section">
   <!--card stats start-->
   <div id="card-stats" class="pt-0">
      <div class="row">
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <p>Users</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">200</h5>
                        <p class="no-margin">Active Users</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <p>New Registered</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">1</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">timeline</i>
                        <p>Companies</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">attach_money</i>
                        <p>Department</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">8</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <p>Users</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">200</h5>
                        <p class="no-margin">Active Users</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">perm_identity</i>
                        <p>New Registered</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">1</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">timeline</i>
                        <p>Companies</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">5</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m6 l6 xl3">
            <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
               <div class="padding-4">
                  <div class="row">
                     <div class="col s7 m7">
                        <i class="material-icons background-round mt-5">attach_money</i>
                        <p>Department</p>
                     </div>
                     <div class="col s5 m5 right-align">
                        <h5 class="mb-0 white-text">8</h5>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--card stats end-->
   <!--yearly & weekly revenue chart start-->
   <div id="sales-chart">
      <div class="row">
         <div class="col s12 m8 l8">
            <div id="revenue-chart" class="card animate fadeUp">
               <div class="card-content">
                  <h4 class="header mt-0">
                     REVENUE FOR 2020
                     <span class="purple-text small text-darken-1 ml-1">
                        <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span>
                     <a
                        class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                  </h4>
                  <div class="row">
                     <div class="col s12">
                        <div class="yearly-revenue-chart">
                           <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
                           <canvas id="lastYearRevenue" height="350"></canvas>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col s12 m4 l4">
            <div id="weekly-earning" class="card animate fadeUp">
               <div class="card-content">
                  <h4 class="header m-0">Earning <i class="material-icons right grey-text lighten-3">more_vert</i></h4>
                  <p class="no-margin grey-text lighten-3 medium-small">Mon 15 - Sun 21</p>
                  <h3 class="header">$899.39 <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                  </h3>
                  <canvas id="monthlyEarning" class="" height="150"></canvas>
                  <div class="center-align">
                     <p class="lighten-3">Total Weekly Earning</p>
                     <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">View
                        Full</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--yearly & weekly revenue chart end-->
   <!--end container-->
</div>
@endsection

{{-- vendor script --}}
@section('vendor-script')
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
@endsection

{{-- page script --}}
@section('page-script')
<script src="{{asset('js/scripts/dashboard-ecommerce.js')}}"></script>
@endsection