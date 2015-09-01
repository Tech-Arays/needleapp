@extends('layouts.admin-dashboard-layout')
@section('pageheader', 'Dashboard')
@section('optdesc', 'This is the dashboard to manage needle free productions clients')
@section('content')
<div class="row">
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-aqua">
    <div class="inner">
      <h3 class="hidden-xs">View All Clients</h3>
      <h3 class="visible-xs"><i class="ion ion-person"></i></h3>
      <p class="hidden-xs">&nbsp;</p>
      <p class="visible-xs">View All Clients</p>
    </div>
    <div class="icon">
      <i class="ion ion-person"></i>
    </div>
    <a class="small-box-footer" href="{{url('admin/clients')}}">More Info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
<div class="col-lg-3 col-xs-6">
  <!-- small box -->
  <div class="small-box bg-green">
    <div class="inner">
      <h3 class="hidden-xs">Add new client</h3>
      <h3 class="visible-xs"><i class="ion ion-person-add"></i></h3>
      <p class="hidden-xs">&nbsp;</p>
      <p class="visible-xs">Add new client</p>
    </div>
    <div class="icon">
      <i class="ion ion-person-add"></i>
    </div>
    <a class="small-box-footer" href="{{url('admin/clients/add')}}">More info <i class="fa fa-arrow-circle-right"></i></a>
  </div>
</div><!-- ./col -->
</div>
@endsection