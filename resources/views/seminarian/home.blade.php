@extends('layouts.dashboard-seminarian')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header ">
            <h4 class="card-title">Próximos acompanhamentos</h4>
          </div>
          <div class="card-body ">
            <div class="table-responsive">
              <table class="table">
                  <thead  class=" text-primary">
                      <th>Nome</th>
                      <th>Horário</th>
                  </thead>
                <tbody>
                    @foreach ($attendances as $attendance)
                        <tr>
                            <td>
                                {{$attendance->user()->name}}
                            </td>
                            <td>
                                @php
                                   $date = new DateTime($attendance->date);
                                   $format = $date->format('d/m/Y');
                                @endphp
                                {{$format." - ".$attendance->hour}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Minhas denúncias</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Denunciante
                  </th>
                  <th>
                    Resumo
                  </th>
                </thead>
                <tbody>
                    @foreach ($complaints as $complaint)
                    <tr>
                        <td>
                            {{$complaint->type == "0"? $complaint->user()->name: "Anônimo"}}
                        </td>
                        <td>
                            {{$complaint->description}}
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> Suas atribuições</h4>
                </div>
                <div class="card-body">

            <div class="table-responsive">
                <table class="table">
                  <thead class=" text-primary">
                    <th>
                      Serviço/Função
                    </th>
                  </thead>
                  <tbody>
                      @foreach ($services as $service)
                      <tr>
                          <td>
                              {{$service->service()->name}}
                          </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
        </div>
    </div>
  </div>

  @endsection
