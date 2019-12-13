@extends('layouts.app', ['activePage' => 'patients-management', 'titlePage' => __('Gerenciar Pacientes')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('pacientes.update', $paciente) }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('put')

                    <div class="card ">
                        <div class="card-header card-header-primary card-paciente">
                            <h4 class="card-title">{{ __('Editar Paciente') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row" style="padding-bottom: 10px">
                                <label for="nome" class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-md-9">
                                    <input value="{{$paciente->nome}}" id="nome" name="nome" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="telefone" class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                                <div class="col-md-9">
                                    <input value="{{$paciente->telefone}}" name="telefone" id="telefone" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="data" class="col-sm-2 col-form-label">{{ __('Nascimento') }}</label>
                                <div class="col-md-9">
                                    <input value="{{$paciente->nascimento}}" id="data" name="data" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label class="col-sm-2 col-form-label">{{ __('Endereço') }}</label>
                                <div class="col-md-2">
                                    <select id="estado" name="estado" style="height: 95%" id="estado" class="form-control" name="estado" required>
                                        <option value="0" selected disabled>Estado</option>
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input id="cidade" name="cidade" type="text" class="form-control" placeholder="Cidade" required>
                                </div>
                                <div class="col-md-4">
                                    <input id="rua" name="rua" type="text" class="form-control" placeholder="Rua">
                                </div>
                                <div class="col-md-1">
                                    <input id="numero" name="numero" type="text" class="form-control" placeholder="Número">
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="cpf" class="col-sm-2 col-form-label">{{ __('CPF') }}</label>
                                <div class="col-md-9">
                                    <input value="{{$paciente->cpf}}" id="cpf" name="cpf" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-paciente">{{ __('Save') }}</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection