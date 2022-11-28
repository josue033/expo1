@extends('layouts.app', ['pageSlug' => 'Historial'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Mood Diary</h5>
                            <h2 class="card-title">Historial de Estado de Animo</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Dia</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                <input type="radio" class="d-none d-sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Mes</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                <input type="radio" class="d-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Aual</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-tap-02"></i>
                                </span>
                            </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div>
                        <canvas id="historial-envio" style="display: block; width:100%; height:600px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
            // Imprimir la data con charts
          var cData = JSON.parse(`<?php echo $data; ?>`)
        //   console.log(cData)
        const ctx = document.getElementById('historial-envios').getContext('2d');

        const myChart = new Chart(ctx,{
            type:'bar',
            data:{
                labels:cData.label,
                datasets:[{
                    label:'Historial de Emociones',
                    data:cData.data,
                backgroundColor:[
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                    '#ce93d8',
                ],
                borderWidth:1
                }]
               
            },
            options:{
                scales:{
                    yAxes:[{
                        ticks:{
                            beginAtZero:true
                        }
                    }]
                }
            }
        })
    });
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    var cData = JSON.parse(`<?php echo $data; ?>`)
  const ctx = document.getElementById('historial-envio');

  new Chart(ctx, {
    type: 'bar',
    data: {
        labels:cData.label,
      datasets: [{
        label: 'Historial',
        data:cData.data,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
@endpush
