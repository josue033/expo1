@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Contacta a un experto</h4>
      </div>
      {{-- Se modifico --}}
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Nombre
                </th>
                <th>
                  Estado
                </th>
                <th>
                  Ciudad
                </th>
                <th class="text-center">
                  Contacto
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Alejandro Sandoval
                </td>
                <td>
                  Jalisco
                </td>
                <td>
                  Guadalajara
                </td>
                <td class="text-center">
                  33-34-66-14-51
                </td>
              </tr>
              <tr>
                <td>
                  Josue Saavedra
                </td>
                <td>
                  Sinaloa
                </td>
                <td>
                  Mazatlan
                </td>
                <td class="text-center">
                  386-103-31-70
                </td>
              </tr>
              <tr>
                <td>
                  Marlon Angel
                </td>
                <td>
                  Chiapas
                </td>
                <td>
                  Tlaxpa Gutierrez
                </td>
                <td class="text-center">
                  33-13-56-11-25
                </td>
              </tr>
              <tr>
                <td>
                  Luis Camarena
                </td>
                <td>
                  Puebla
                </td>
                <td>
                  Tehuacan
                </td>
                <td class="text-center">
                  356-123-54-79
                </td>
              </tr>
              <tr>
                <td>
                  Jonathan Diaz
                </td>
                <td>
                  Puebla
                </td>
                <td>
                  Atlixco
                </td>
                <td class="text-center">
                  356-86-35-09
                </td>
              </tr>
              <tr>
                <td>
                  Emmanuel Ruiz
                </td>
                <td>
                  Jalisco
                </td>
                <td>
                  Zapopan
                </td>
                <td class="text-center">
                  33-90-78-45-76
                </td>
              </tr>
              <tr>
                <td>
                  Pedro Lopez
                </td>
                <td>
                  Hidalgo
                </td>
                <td>
                  Pachuca
                </td>
                <td class="text-center">
                  9754-09-13-56
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-12">
    <div class="card  card-plain">
      <div class="card-header">
        <h4 class="card-title"> Instituciones de apoyo</h4>
        <p class="category"> Clinicas</p>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table tablesorter " id="">
            <thead class=" text-primary">
              <tr>
                <th>
                  Nombre
                </th>
                <th>
                  Estado
                </th>
                <th>
                  Ciudad
                </th>
                <th class="text-center">
                  Contacto
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  Astronauta Emocional
                </td>
                <td>
                  Distrito Federal
                </td>
                <td>
                  Ciudad de México
                </td>
                <td class="text-center">
                  52-45-76-73-12
                </td>
              </tr>
              <tr>
                <td>
                  Neopraxis - Comunidad De Psicólogos
                </td>
                <td>
                  Distrito Federal
                </td>
                <td>
                  Ciudad de México
                </td>
                <td class="text-center">
                  52-56-12-12-76
                </td>
              </tr>
              <tr>
                <td>
                  Athva Clínica De Depresión Y Ansiedad
                </td>
                <td>
                  Online
                </td>
                <td>
                  Online
                </td>
                <td class="text-center">
                  33-56-89-92-12
                </td>
              </tr>
              <tr>
                <td>
                  Zaragoza Consultores
                </td>
                <td>
                  Ciudad de México
                </td>
                <td>
                  Iztapalapa
                </td>
                <td class="text-center">
                  567-23-16-76-87
                </td>
              </tr>
              <tr>
                <td>
                  Ecos Emocionales
                </td>
                <td>
                  Ciudad de México
                </td>
                <td>
                  Juárez
                </td>
                <td class="text-center">
                  52-54-34-87-32
                </td>
              </tr>
              <tr>
                <td>
                  Interven
                </td>
                <td>
                  Ciudad de México
                </td>
                <td>
                  Coyoacán
                </td>
                <td class="text-center">
                  52-445-09-00-12
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

