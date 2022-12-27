@extends('layouts.dasboard.header')
@section('content')
@section('title', 'listar usuário')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10"></h5>
                        <p class="m-b-0"></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">listar dados de usuário </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Page-header end -->
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-body start -->
                <div class="page-body">

                    <div class="col-xl-12 col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Dados do Usuário Com nome de: {{ $utentes->nome }} </h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table class="table table-hover m-b-0 without-header">
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <h6>Email</h6>
                                                            <p class="text-muted m-b-0">{{ $utentes->email }}</p>

                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <h6>Telefone</h6>
                                                    <p class="text-muted m-b-0">{{ $utentes->telefone }}</p>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">

                                                        <div class="d-inline-block">
                                                            <h6>País</h6>
                                                            <p class="text-muted m-b-0">{{ $utentes->pais }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <h6>Província</h6>
                                                    <p class="text-muted m-b-0">{{ $utentes->provincia }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">

                                                        <div class="d-inline-block">
                                                            <h6>Município</h6>
                                                            <p class="text-muted m-b-0">{{ $utentes->municipio }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <h6>Instituição a que pertence</h6>
                                                    <p class="text-muted m-b-0">{{ $utentes->Instituicao }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">

                                                        <div class="d-inline-block">
                                                            <h6>Como pretende Participar da actividade ?</h6>
                                                            <p class="text-muted m-b-0">{{ $utentes->tipoParticpacao }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <h6>Por que via ficou a saber dos exames nacionais ?</h6>
                                                            <p class="text-muted m-b-0">{{ $utentes->InfoExame }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-inline-block align-middle">
                                                        <div class="d-inline-block">
                                                            <h6>Participou dos exames nacionais no ano lectivo 2021-2022 ?</h6>
                                                            <p class="text-muted m-b-0">{{ $utentes->PartipacaoExame }}</p>
                                                        </div>

                                                    </div>
                                                </td>
                                                <td class="text-right">
                                                    <h6></h6>
                                                    <p class="text-muted m-b-0"></p>
                                                </td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page-body end -->
            </div>
            <div id="styleSelector"> </div>
        </div>
    </div>
</div>
@include('layouts.dasboard.footer')
@endsection
