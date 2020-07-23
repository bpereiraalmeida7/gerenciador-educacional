<div class="form-group row">
    <!-- Nome Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nome', 'Nome:') !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Codigo Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('codigo', 'Codigo:') !!}
        {!! Form::number('codigo', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <!-- Situacao Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('situacao', 'Situacao:') !!}
        <label class="checkbox-inline">
            {!! Form::hidden('situacao', 0) !!}
            {!! Form::checkbox('situacao', '1', null) !!}
        </label>
    </div>


    <!-- Cep Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cep', 'Cep:') !!}
        {!! Form::text('cep', null, ['class' => 'form-control'],['id'=>'cep']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#cep').html(function() {
                console.log('aq')
            });
        </script>
    @endpush
</div>    
<div class="form-group row">
    <!-- Cidade Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('cidade', 'Cidade:') !!}
        {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Estado Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('estado', 'Estado:') !!}
        {!! Form::text('estado', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <!-- Bairro Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('bairro', 'Bairro:') !!}
        {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Numero Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('numero', 'Numero:') !!}
        {!! Form::number('numero', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group row">
    <!-- Id Curso Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('id_curso', 'Curso:') !!}
        {!! Form::number('id_curso', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Turma Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('turma', 'Turma:') !!}
        {!! Form::text('turma', null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    <!-- Data Matricula Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('data_matricula', 'Data Matricula:') !!}
        {!! Form::text('data_matricula', null, ['class' => 'form-control','id'=>'data_matricula']) !!}
    </div>

    @push('scripts')
        <script type="text/javascript">
            $('#cep').ready(function() {
                console.log('aq')
            });

            
            $('#data_matricula').datetimepicker({
                format: 'DD-MM-YYYY',
                useCurrent: true,
                icons: {
                    up: "icon-arrow-up-circle icons font-2xl",
                    down: "icon-arrow-down-circle icons font-2xl"
                },
                sideBySide: true
            })
        </script>
    @endpush


    <!-- Complemento Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('complemento', 'Complemento:') !!}
        {!! Form::text('complemento', null, ['class' => 'form-control']) !!}
    </div>
</div>
<!-- Imagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imagem', 'Imagem:') !!}
    {!! Form::text('imagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Cancel</a>
</div>
