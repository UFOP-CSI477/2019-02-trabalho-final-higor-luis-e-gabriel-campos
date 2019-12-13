@extends('layouts.app', ['activePage' => 'doctors-management', 'titlePage' => __('Gerenciar Médicos')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('medicos.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary card-bg" >
                            <h4 class="card-title">{{ __('Adicionar Médico') }}</h4>
                            <p class="card-category"></p>
                        </div>
                        <div class="card-body ">
                            <div class="row" style="padding-bottom: 10px">
                                <label for="crm" class="col-sm-2 col-form-label">{{ __('CRM') }}</label>
                                <div class="col-md-9">
                                    <input id="crm" name="crm" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="nome" class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                                <div class="col-md-9">
                                    <input name="nome" id="nome" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="nascimento" class="col-sm-2 col-form-label">{{ __('Nascimento') }}</label>
                                <div class="col-md-9">
                                    <input id="nascimento" name="nascimento" type="date" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label class="col-sm-2 col-form-label">{{ __('Especialização') }}</label>
                                <div class="col-md-2">
                                    <select id="especializacao" name="especializacao" style="height: 95%" id="especializacao" class="form-control" name="estado" required>
                                        <option value="0" selected disabled>Especializações</option>
                                        <option value="Anestesiologia">Anestesiologia</option>
                                        <option value="Cancerologia (oncologia)">Cancerologia (oncologia)</option>
                                        <option value="Cardiologia">Cardiologia</option>
                                        <option value="Cirurgia geral">Cirurgia geral</option>
                                        <option value="Cirurgia plástica">Cirurgia plástica</option>
                                        <option value="Coloproctologia">Coloproctologia</option>
                                        <option value="Dermatologia">Dermatologia</option>
                                        <option value="Endocrinologia">Endocrinologia</option>
                                        <option value="Gastroenterologia">Gastroenterologia</option>
                                        <option value="Genética médica">Genética médica</option>
                                        <option value="Geriatria">Geriatria</option>
                                        <option value="Ginecologia e obstetrícia">Ginecologia e obstetrícia</option>
                                        <option value="Hematologia">Hematologia</option>
                                        <option value="Mastologia">Mastologia</option>
                                        <option value="Neurologia">Neurologia</option>
                                        <option value="Oftalmologia">Oftalmologia</option>
                                        <option value="Ortopedia">Ortopedia</option>
                                        <option value="Pediatria">Pediatria</option>
                                        <option value="Psiquiatria">Psiquiatria</option>
                                        <option value="Urologia">Urologia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label for="telefone" class="col-sm-2 col-form-label">{{ __('Telefone') }}</label>
                                <div class="col-md-9">
                                    <input id="telefone" name="telefone" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('medicos.index') }}" class="btn btn-primary btn-bg">{{ __('Voltar para a lista') }}</a>
                                <button type="submit" class="btn btn-primary btn-bg">{{ __('Cadastrar') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection