<!--lo comentado es el metodo crud usando poo con laravel. lo no  comentado como {!! Form::label('nombre', 'Nombre:') !!} y  Form::text('username') es usando el paquete Forms de laravel Collective -->

@extends("../layouts.plantilla")

@section("cabecera")
INSERTAR REGISTROS
@endsection

@section("contenido")

<!--    <form method="post" action="/productos">  -->
  {!! Form::open(['url' => '/productos', 'method' => 'post', 'files'=>true]) !!}

      <table>
        <tr>
          <td>{!! Form::label('nombre', 'Nombre:') !!} </td>

        <td>
      <!--    <input type="text", name="NombreArticulo"> -->
          {!! Form::text('NombreArticulo') !!}
          @csrf
        </td>
      </tr>

      <tr>
        <td>{!! Form::label('seccion', 'Seccion:') !!} </td>
        <td>
        <!--  <input type="text", name="seccion"> -->
        {!! Form::text('seccion') !!}
        </td>
      </tr>

      <tr>
        <td>{!! Form::label('precio', 'Precio:') !!}</td>
        <td>
        <!--  <input type="text", name="Precio"> -->
        {!! Form::text('Precio') !!}
        </td>
      </tr>

      <tr>
        <td>{!! Form::label('fecha', 'Fecha:') !!}</td>
        <td>
        <!--  <input type="text", name="Fecha"> -->
          {!! Form::text('Fecha') !!}
        </td>
      </tr>

      <tr>
        <td>{!! Form::label('paisorigen', 'Pais de Origen:') !!}</td>
        <td>
        <!--  <input type="text", name="PaisOrigen"> -->
          {!! Form::text('PaisOrigen') !!}
        </td>
      </tr>

      <tr>
        <td>
        <!--  <input type="submit", name="enviar", value="Enviar"> -->
          {!! Form::submit('Enviar') !!}
        </td>
        <tr>
        <td >
          {!! Form::reset('Borrar') !!}
      <!--    <input type="reset", name="borrar", value="Borrar"> -->
         </td>
        </tr>
        <tr>
          <td>
            {!! Form::file('file') !!}
          </td>
        </tr>
      </tr>
    </table>

  <!--  </form>  -->
  {!! Form::close() !!}

<ul>
  @if(count($errors)>0)
      @foreach($errors->all() as $error)
          <li>{{$error}}</li>
      @endforeach
  @endif
</ul>

@endsection

@section("pie")

@endsection
