@extends('layouts.dasboard.header')
@section('content')
@section('title', 'painel de controlo')
<div class="pcoded-content">
    <!-- Page-header start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Painel de Controlo</h5>
                        <p class="m-b-0">Bem vindo ao Painel de Controlo</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Painel de Controlo</a>
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
                    <div class="row">
                       <!-- Project statustic start -->
                    <div class="col-xl-12">
                        <div class="card proj-progress-card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <h6>Usuários Presenciais</h6>
                                        <h5 class="m-b-30 f-w-700">@isset($presencial)
                                            {{ $presencial }}
                                        @endisset<span class="text-c-green m-l-10">de @isset($total)
                                            {{ $total }}
                                        @endisset inscritos</span>
                                        </h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-c-red" style="width:
                                            @if($presencial!= null)
                                                {{ ($presencial*100)/$total }}%
                                                @else
                                                0%
                                            @endif"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h6>Usuários à distância</h6>
                                        <h5 class="m-b-30 f-w-700">@isset($distancia)
                                            {{ $distancia }}
                                        @endisset<span class="text-c-blue m-l-10">de @isset($total)
                                            {{ $total }}
                                        @endisset inscritos</span>
                                        </h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-c-blue" style="width:@if($distancia!= null)
                                                {{ ($distancia* 100)/$total }}%
                                                @else
                                                0%
                                            @endif"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-md-6">
                                        <h6>Total de Usuários Inscritos</h6>
                                        <h5 class="m-b-30 f-w-700">@isset($total)
                                            {{ $total }}
                                        @endisset<span class="text-c-green m-l-10">para 200 pessoas</span>
                                        </h5>
                                        <div class="progress">
                                            <div class="progress-bar bg-c-green" style="width:@if($total!= null)
                                                {{( $total*100 )/200 }}%
                                                @else
                                                0%
                                            @endif"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!--  sale analytics start -->
                    <div class="col-xl-12 col-md-12">
                        <div class="card table-card">
                            <div class="card-header">
                                <h5>Usuários Inscritos</h5>
                                <div class="card-header-right">
                                    <ul class="list-unstyled card-option">
                                        <li><i class="fa fa fa-wrench open-card-option"></i></li>
                                        <li><i class="fa fa-window-maximize full-card"></i></li>
                                        <li><i class="fa fa-minus minimize-card"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <span data-href="{{ route('exportCSV') }}" style="background-color: orange;color:white;"  class="btn btn btn justify-content-right" onclick ="exportTasks (event.target);">Exportar para Excel</span>
                                <div class="table-responsive">
                                    <table id="table_id"
                                        class="display expandable-table table table-hover m-b-0 without-header">

                                        <thead class="thead-dark">
                                            <th>Nº</th>
                                            <th class="text-center">Nome</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Telefone</th>
                                            <th class="text-center">Instituição</th>
                                            <th class="text-center">Participação</th>
                                            <th class="text-center">País</th>
                                            <th class="text-center">Data da Submissão</th>
                                            <th>Acções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($utentes)


                                            @foreach ($utentes as $utentes)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td class="text-center">{{ $utentes->nome }}</td>
                                                    <td class="text-center">{{ $utentes->email }}</td>
                                                    <td class="text-center">{{ $utentes->telefone }}</td>
                                                    <td class="text-center">{{ $utentes->Instituicao }}</td>
                                                    <td class="text-center">{{ $utentes->tipoParticpacao }}</td>

                                                    <td class="text-center">{{ $utentes->pais }}</td>
                                                    <td class="text-center">
                                                        {{ date('d-m-Y', strtotime($utentes->created_at)) }}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-light dropdown-toggle"
                                                                type="button" id="dropdownMenuButton"
                                                                data-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="fa fa-clone" aria-hidden="true"></i>
                                                            </button>
                                                            <div class="dropdown-menu"
                                                                aria-labelledby="dropdownMenuButton">
                                                                <a class=" dropdown-item btn btn-primary"
                                                                    href="{{ route('listarSimposio',$utentes->id) }}">listar Dados</a>
                                                                <a class=" dropdown-item btn btn-primary"
                                                                    target="_blank" href="{{ route('cartaoSimposio',$utentes->id) }}">Emitir Cartão</a>
                                                                <a class=" dropdown-item btn btn-primary"
                                                                    target="_blank" href="{{ route('certificadoSimposio',$utentes->id) }}">Emitir
                                                                    Certificado</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endisset
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
