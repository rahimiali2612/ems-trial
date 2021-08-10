{{-- layout extend --}}
@extends('layouts.contentLayoutMaster')

{{-- page title --}}
@section('title','Home')

{{-- vendor styles --}}
@section('vendor-style')
<link rel="stylesheet" type="text/css" href="{{asset('vendors/animate-css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('vendors/chartist-js/chartist-plugin-tooltip.css')}}">
@endsection

{{-- page styles --}}
@section('page-style')
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/dashboard-modern.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/pages/intro.css')}}">
@endsection

{{-- page content --}}
@section('content')
<!--Gradient Card-->
<div id="cards-extended">
  <div class="card">
    <div class="card-content">
      <h4 class="card-title">Dashboard</h4>
      <p>
       Individual Informations
      </p>
 
      <div class="row" id="gradient-Analytics">
         <div class="col s12 m6 l3 card-width">
            <div class="card row gradient-45deg-blue-indigo gradient-shadow white-text padding-4 mt-5">
              <div class="col s7 m7">
                <i class="material-icons background-round mt-5 mb-5">date_range</i>
                <p>My Timesheet</p>
              </div>
              <div class="col s5 m5 right-align">
                <h5 class="mb-0 white-text">30 Day(s)</h5>
                <p class="no-margin">Not Filled</p>
              </div>
            </div>
           </div>

          <div class="col s12 m6 l3 card-width">
         
         <div class="card row gradient-45deg-deep-orange-orange gradient-shadow white-text padding-4 mt-5">
            <div class="col s7 m7">
              <i class="material-icons background-round mt-5 mb-5">card_travel</i>
              <p>My Project</p>
            </div>
            <div class="col s5 m5 right-align">
              <h5 class="mb-0 white-text">5</h5>
            </div>
          </div>
        </div>

        <div class="col s12 m6 l3 card-width">
          <div class="card row gradient-45deg-purple-deep-orange gradient-shadow white-text padding-4 mt-5">
            <div class="col s7 m7">
              <i class="material-icons background-round mt-5 mb-5">timeline</i>
              <p>My Claim</p>
            </div>
            <div class="col s5 m5 right-align">
              <h5 class="mb-0 white-text">2</h5>
              <p class="no-margin">Active Claims</p>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l3 card-width">
          <div class="card row gradient-45deg-purple-deep-purple gradient-shadow white-text padding-4 mt-5">
            <div class="col s7 m7">
              <i class="material-icons background-round mt-5 mb-5">attach_money</i>
              <p>My Leave</p>
            </div>
            <div class="col s5 m5 right-align">
              <h5 class="mb-0 white-text">14</h5>
              <p class="no-margin">Carry + Entitled</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!--card widgets start-->
<div id="card-widgets">
   <div class="row">
      <div class="col s12 m6 l4">
         <ul id="task-card" class="collection with-header animate fadeLeft">
            <li class="collection-header cyan">
               <h5 class="task-card-title mb-3">My Task</h5>
               <p class="task-card-date">Top 5 Latest Task</p>
               <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">More</a>
            </li>
            <li class="collection-item dismissable">
               <label for="task1">
                  <input type="checkbox" id="task1" /> 
                  <span class="width-100">Create Mobile App UI. </span>
               </label>
            </li>
            <li class="collection-item dismissable">
               <label for="task2">
                  <input type="checkbox" id="task3" checked="checked" /> 
                  <span class="width-100">Check the new API standerds. </span>
               </label>
            </li>
         </ul>
      </div>
      <div class="col s12 m6 l4">
         <ul id="task-card" class="collection with-header animate fadeLeft">
            <li class="collection-header teal accent-4">
               <h5 class="task-card-title mb-3">Project</h5>
               <p class="task-card-date">Assigned To You</p>
               <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">More</a>
            </li>
            <li class="collection-item dismissable">
               <label for="task1">
                  <span class="width-100">NADMA 2020</span>
               </label>
            </li>
            <li class="collection-item dismissable">
               <label for="task2">
                  <span class="width-100">ORBIT - EMPLOYEE INFORMATION SYSTEM</span>
               </label>
            </li>
         </ul>
      </div>
      <div class="col s12 m6 l4">
         <ul id="task-card" class="collection with-header animate fadeLeft">
            <li class="collection-header deep-orange">
               <h5 class="task-card-title mb-3">My Leave</h5>
               <p class="task-card-date">Latest Leave Info</p>
               <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">More</a>
            </li>
            <li class="collection-item dismissable">
               <label for="task1">
                  <span class="width-100">Cuti Covid</span>
                  <span class="task-cat cyan">12/02/2021 - 15/02/2021</span>
               </label>
            </li>
            <li class="collection-item dismissable">
               <label for="task4">
                  <span class="width-100">Cuti Raya Haji Balik Kampung</span>
                  <span class="task-cat deep-orange accent-2">12/02/2021 - 15/02/2021</span>
               </label>
            </li>
         </ul>
      </div>
   </div>
</div>
<!--card widgets end-->
  
  <div class="row">
   <div class="col s12 m6 l4">
      <div class="card animate fadeRight">
         <div class="card-content">
            <h4 class="card-title mb-0">Mini Calendar</h4>
            <div class="conversion-ration-container mt-8">
               <div id="conversion-ration-bar-chart" class="conversion-ration-shadow"></div>
            </div>
            <p class="medium-small center-align">This month conversion ratio</p>
            <h5 class="center-align mb-0 mt-0">62%</h5>
         </div>
      </div>
   </div>
   <div class="col s12 m6 l8">
      <div class="card subscriber-list-card animate fadeRight">
         <div class="card-content pb-1">
            <h4 class="card-title mb-0">News <i class="material-icons float-right">more_vert</i></h4>
         </div>
         <table class="subscription-table responsive-table highlight">
            <thead>
               <tr>
                  <th>Name</th>
                  <th>Company</th>
                  <th>Start Date</th>
                  <th>Status</th>
                  <th>Amount</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>Michael Austin</td>
                  <td>ABC Fintech LTD.</td>
                  <td>Jan 1,2019</td>
                  <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                  <td>$ 1000.00</td>
                  <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
               </tr>
               <tr>
                  <td>Aldin Rakić</td>
                  <td>ACME Pvt LTD.</td>
                  <td>Jan 10,2019</td>
                  <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                  <td>$ 3000.00</td>
                  <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
               </tr>
               <tr>
                  <td>İris Yılmaz</td>
                  <td>Collboy Tech LTD.</td>
                  <td>Jan 12,2019</td>
                  <td><span class="badge green lighten-5 green-text text-accent-4">Open</span></td>
                  <td>$ 2000.00</td>
                  <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
               </tr>
               <tr>
                  <td>Lidia Livescu</td>
                  <td>My Fintech LTD.</td>
                  <td>Jan 14,2019</td>
                  <td><span class="badge pink lighten-5 pink-text text-accent-2">Close</span></td>
                  <td>$ 1100.00</td>
                  <td class="center-align"><a href="#"><i class="material-icons pink-text">clear</i></a></td>
               </tr>
            </tbody>
         </table>
      </div>
   </div>
</div>
  
</div>
@endsection

{{-- vendor scripts --}}
@section('vendor-script')
<script src="{{asset('vendors/chartist-js/chartist.min.js')}}"></script>
<script src="{{asset('vendors/chartjs/chart.min.js')}}"></script>
<script src="{{asset('fonts/fontawesome/js/all.min.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('vendors/chartist-js/chartist-plugin-fill-donut.min.js')}}"></script>
@endsection

{{-- page scripts --}}
@section('page-script')
<script src="{{asset('js/scripts/cards-extended.js')}}"></script>
<script src="{{asset('js/custom/custom-script.js')}}"></script>
<script src="{{asset('js/scripts/dashboard-modern.js')}}"></script>
<script src="{{asset('js/scripts/intro.js')}}"></script>
@endsection