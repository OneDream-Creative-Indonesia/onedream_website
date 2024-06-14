@extends('Dashboard.layouts.main')
@section('container')
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-5 pb-2 mb-3 border-bottom">
          <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
        </div>
  @endsection

