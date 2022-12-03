@extends('layouts.app', ['page' => __('Tables'), 'pageSlug' => 'tables'])

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card ">
      <div class="card-header">
        <h4 class="card-title">Pide ayuda a un amigo</h4>
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
                  Jalisco
                </td>
                <td>
                  Guadalajara
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
                  Jalisco
                </td>
                <td>
                  Guadalajara
                </td>
                <td class="text-center">
                  33-13-56-11-25
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

