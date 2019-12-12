@extends('layouts.app', ['activePage' => 'patients-management', 'titlePage' => __('User Management')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="{{ route('doctors.store') }}" autocomplete="off" class="form-horizontal">
                    @csrf
                    @method('post')

                    <div class="card ">
                        <div class="card-header card-header-primary" >
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
                                    <input id="nascimento" name="nascimento" type="nascimento" class="form-control" required>
                                </div>
                            </div>
                            <div class="row" style="padding-bottom: 10px">
                                <label class="col-sm-2 col-form-label">{{ __('Especialização') }}</label>
                                <div class="col-md-2">
                                    <select id="especializacao" name="especializacao" style="height: 95%" id="especializacao" class="form-control" name="estado" required>
                                        <option value="0" selected disabled>Especializações</option>
                                        <option value="AC">Anestesiologia</option>
                                        <option value="AL">Cancerologia (oncologia)</option>
                                        <option value="AP">Cardiologia</option>
                                        <option value="AM">Cirurgia geral</option>
                                        <option value="BA">Cirurgia plástica</option>
                                        <option value="CE">Coloproctologia</option>
                                        <option value="DF">Dermatologia</option>
                                        <option value="ES">Endocrinologia</option>
                                        <option value="GO">Gastroenterologia</option>
                                        <option value="MA">Genética médica</option>
                                        <option value="MT">Geriatria</option>
                                        <option value="MS">Ginecologia e obstetrícia</option>
                                        <option value="MG">Hematologia</option>
                                        <option value="PA">Mastologia</option>
                                        <option value="PB">Neurologia</option>
                                        <option value="PR">Oftalmologia</option>
                                        <option value="PE">Ortopedia</option>
                                        <option value="PI">Pediatria</option>
                                        <option value="RJ">Psiquiatria</option>
                                        <option value="RN">Urologia</option>
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
                                <a href="{{ route('doctors.index') }}" class="btn btn-primary">{{ __('Voltar para a lista') }}</a>
                                <button type="submit" class="btn btn-primary">{{ __('Cadastrar') }}</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection