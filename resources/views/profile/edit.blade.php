@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h5 class="card-category">Mood Diary</h5>
                            <h2 class="card-title">Tips Diarios</h2>
                        </div>
                        
                    </div>
                </div>
                <i class="tim-icons icon-bulb-63"> Tip 1</i><br><br>
                        <p class="description">
                            Sé consciente de cómo te sientes. Cuando tengas una emoción negativa,<br>
                            como el enfado, intenta ponerle un nombre a lo que sientes. <br>
                            Por ejemplo: <br>
                            ¡Ese muchacho de mi grupo de estudio, Ian, me vuelve loco! <br>
                            Me pongo tan celoso cuando veo a ese muchacho/esa muchacha con mi ex. <br>
                            Cada vez que paso cerca de esos matones, siento miedo. <br>
                        </p><hr>

                        <i class="tim-icons icon-bulb-63"> Tip 2</i><br><br>
                        <p class="description">
                            No niegues lo que sientes. Es posible que no desees contarles a otras personas sobre tus 
                            sentimientos. <br>
                            Pero no reprimas totalmente tus sentimientos. <br> 
                            Simplemente ponerles un nombre es mucho <br>
                            mejor que hacer de cuenta que no existen (o explotar sin pensarlo).
                        </p><hr>

                        <i class="tim-icons icon-bulb-63"> Tip 3</i><br><br>
                        <p class="description">
                            Acepta todas tus emociones como naturales y comprensibles. <br>
                            No te juzgues por las emociones que sientes. Es normal que las sientas. <br>
                            Reconocer cómo te sientes puede ayudarte a superarlo; por lo tanto, no seas tan duro contigo.<br>
                        </p><hr>

                        <i class="tim-icons icon-bulb-63"> Tip 4</i><br><br>
                        <p class="description">
                            Busca apoyo. Habla sobre cómo te sientes con tus padres, con un adulto en quien confíes o con un amigo. <br>
                            Ellos pueden ayudarte a analizar tus emociones y darte un punto de vista diferente de las cosas. <br>
                            Y nada te ayudará a sentirte más comprendido y cuidado que el apoyo de alguien que te quiere por quien eres. <br>
                        </p><hr>

                        <i class="tim-icons icon-bulb-63"> Tip 5</i><br><br>
                        <p class="description">
                            Ejercicio físico. La actividad física ayuda al cerebro a producir sustancias químicas naturales que favorecen el estado de ánimo positivo. <br>
                            El ejercicio físico también puede aliviar el estrés acumulado y ayudarte a no quedarte encerrado en los sentimientos negativos. <br>
                        </p><hr>

            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('white') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
