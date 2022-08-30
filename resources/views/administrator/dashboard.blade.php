@extends('layouts.administrator')

@section('title')
Dashboard
@endsection

@section('dashboard')
active
@endsection

@section('content')
  <div class="page-head">
          <h2 class="page-head-title">Dashboard</h2>
          <ol class="breadcrumb page-head-nav">
            <li><a href="{{route('administrator.dashboard')}}">Administrator</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </div>
<div class="main-content container-fluid">
  <div class="row">

  <div class="col-xs-12">
                <div class="panel panel-default">
                  <div class="panel-heading panel-heading-divider">Dashboard<span class="panel-subtitle">Selamat datang di dashboard Sistem Prediksi Harga Emas menggunakan Fuzzy Time Series.</span></div>
                  <div class="panel-body">
                    <p>DEBUGING APLIKASI
                  
                  </div>
                </div>
              </div>
              </div>
                </div>
@endsection
