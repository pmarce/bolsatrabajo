@extends('layouts.client')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-1">
                <ul class="list-group">
                    <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              </span>
                        <b>1. Registro</b>
                    </li>
                    <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
              </span>
                        <b>2. Datos Personales</b>
                    </li>
                    <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </span>
                        3. Formacion
                    </li>
                    <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </span>
                        4. Perfil Profecional
                    </li>
                    <li class="list-group-item">
              <span class="badge">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
              </span>
                        5. Conocimientos
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">3. Formacion Profecional</h3>
                    </div>
                    <div class="well">
                        <div class="panel-body">
                            <div class="col-md-4 col-md-offset-3">
                                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
                                    <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>    Agregar formacion
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                @foreach ($experiences as $experience)

                @endforeach
                */
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        {!! Form::open(array('route' => 'curriculum_formation_save', 'class' => 'form-horizontal')) !!}
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Agregar Formacion</h4>
                </div>
                <div class="modal-body">

                    <fieldset>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Empresa:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="input-establishment" name="company" placeholder="" value="{{ old('educational_establishment') }}">
                                @if ($errors->has('company'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select" class="col-lg-4 control-label">Pais:</label>
                            <div class="col-lg-8">
                                {{ Form::select('country',$countries, '146', ['class' => 'form-control']) }}
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Ciudad/Estado:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control" id="input-establishment" name="city" placeholder="" value="{{ old('area_study') }}">
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-lg-4 control-label">Estado:</label>
                            <div class="col-lg-8">
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="inlineRadio1" value="Culminado"> Culminado
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="inlineRadio2" value="Cursando"> Cursando
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="state" id="inlineRadio3" value="Inconcluso"> Inconcluso
                                </label>
                                @if ($errors->has('state'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('state') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Inicio:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_init" placeholder="" value="{{ old('period_study_init') }}">
                                @if ($errors->has('period_study_init'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('period_study_init') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPeriodInit" class="col-lg-4 control-label">Fecha Final:</label>
                            <div class="col-lg-8">
                                <input type="text" class="form-control date-picker" id="input-establishment" name="period_study_end" placeholder="" value="{{ old('period_study_end') }}">
                                @if ($errors->has('period_study_end'))
                                    <span class="help-block">
                        <strong>{{ $errors->first('period_study_end') }}</strong>
                    </span>
                                @endif
                            </div>
                        </div>

                    </fieldset>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-warning">Guardar</button>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
@endsection
