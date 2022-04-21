<h1>{{ $modo }} empleado</h1>

@if(count($errors) > 0)

    <div class="alert alert-danger" role="alert">
    <ul> 
        @foreach($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </ul>
</div>

@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
    <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:old('Nombre') }}" id="Nombre">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoPaterno">Apellido Paterno: </label>
    <input class="form-control" type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
    <br>
</div>

<div class="form-group">
    <label for="ApellidoMaterno">Apellido Materno: </label>
    <input class="form-control" type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
    <br>
</div>

<div class="form-group">
    <label for="Correo">Correo: </label>
    <input class="form-control" type="text" name="Correo" value="{{ isset($empleado->Correo)?$empleado->Correo:old('Correo') }}" id="Correo">
</div><br>

<div class="form-group">
    <label for="Foto">Fotografia: </label>
    @if(isset($empleado->Foto))
        <img src="{{ asset('storage').'/'.$empleado->Foto }}" width="100" alt="100" class="img-thumbnail img-fluid">
    @endif
    <br><br>
    <input class="form-control" type="file" name="Foto" id="Foto" >
</div>
    <br>
    <input type="submit" value="{{ $modo }} datos" class="btn btn-success">
    <a href="{{ url('empleado') }}" class="btn btn-primary">Regresar</a>
