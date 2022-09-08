<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons+Round">
    <link rel="stylesheet" href="{{ '/css/style.css' }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
@extends('layouts/main')

@section('container')

<div class="container-fluid flex-grow-1">
<h3 class="my-4 judul"> Dashboard </h3>
<div class="card border-light mb-3 p-5">
<h4 class="text-dark">Selamat Datang, Sulistyo A ! </h4>
<p class="text-muted">Selamat datang di sistem finance.</p>
<div class="rounded-2 nt p-3 row">
<p class="col text-start mt-2"><i class="col material-icons-round bi me-4" style="color:blue">info</i>
    Terdapat 3 status pending pada produksi yang perlu diselesaikan.</p>
<h5 class="col text-end mt-2">Abaikan</h5>
</div>
<div class="row rounded-2 nt p-3 mt-2">
<p class="col text-start mt-2"><i class="col material-icons-round bi me-4" style="color:blue">info</i>
    Terdapat 1 status pending pada pengiriman yang perlu diselesaikan.</p>
<h5 class="col text-end mt-2">Abaikan</h5>
</div>
</div>
<h5 class="text-blue p-3">Produksi</h5>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-6 ml-10 ">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-blue text-decoration-none rounded-2">
<p class="col mx-5 my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">storage</i>Jumlah Data</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">6</p>
</div>
</div>
</div>

<div class="col-lg-3 col-6 mx-5">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-green text-decoration-none rounded-2">
<p class=" x-5 my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">expand_circle_down</i>Accept</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">3</p>
</div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-red text-decoration-none rounded-2">
<p class="my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">history</i>Pending</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">3</p>
</div>
</div>
</div>

<h5 class="text-blue my-3">Pengiriman</h5>
<div class="container-fluid">

<div class="row">
<div class="col-lg-3 col-6">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-blue text-decoration-none rounded-2">
<p class="mx-5 my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">storage</i>Jumlah Data</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">6</p>
</div>
</div>
</div>

<div class="col-lg-3 col-6 mx-5">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-green text-decoration-none rounded-2">
<p class="mx-5 my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">expand_circle_down</i>Accept</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">4</p>
</div>
</div>
</div>

<div class="col-lg-3 col-6">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-orange text-decoration-none rounded-2">
<p class=" my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">fact_check</i>Accept With Note</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">1</p>
</div>
</div>
</div>

<div class="row mt-4">
<div class="col-lg-3 col-6">
<div class="card border-light">
<div class="inner">
<div class="mb-4 mx-2 card-red text-decoration-none rounded-2">
<p class="mx-5 my-2 p-2 text-white text-center"><i class="col material-icons-round bi me-4">history</i>Pending</p>
</div>
<p class="fs-4 fw-bolder p-4 my-4 text-center">1</p>
</div>
</div>
</div>

@endsection

</body>
</html>
