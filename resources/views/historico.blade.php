@extends('layout.app')

    <section class="content-header">
    <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-md-10 offset-1">
                    <div class="row mt-2 mb-2">
                        <div class="col-md-10 d-flex align-itens-center">
                            <p class="textprinc">Todas as Corridas</p>
                        </div>
                        <div class="col-md-2 text-right">
                            <a href="{{ url('inicio') }}" type="button" class="btn btn-secondary btn-sm">Voltar</a>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-body table-responsive ">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>                          
                                <th>Data</th>
                                <th>Pace</th>
                            </tr>
                            </thead>
                            <tbody>
                    @foreach($corridas as $corrida)
                        <tr style="font-size: 15px;">
                            <td>{{ $corrida->id }}</td>
                            <td>{{ $corrida->nome }}</td>
                            <td>{{ $corrida->data ?? $corrida->created_at }}</td> 
                            <td>{{ $corrida->pace }}</td>
                        </td>
                            <a href="{{ url('produto/'.$corrida->id.'/excluir') }}" class="btn btn-danger btn-sm"
                            onclick="return confirm('Deseja excluir este registro?');" title="Excluir">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>