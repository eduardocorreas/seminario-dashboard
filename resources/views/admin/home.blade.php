@extends('layouts.dashboard-admin')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header ">
            <h4 class="card-title">Acompanhamentos agendados</h4>
          </div>
          <div class="card-body ">
            <div class="table-responsive">
              <table class="table">
                  <thead  class=" text-primary">
                      <th>Nome</th>
                      <th>Horário</th>
                      <th></th>
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
                            <td>
                                <a href="{{route("attendance-detail",[$attendance->id])}}" class="btn btn-sm btn-primary text-white"><i class="fa fa-eye"></i></a>
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
            <h4 class="card-title"> Últimas denúncias</h4>
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
                        <td>
                            <a href="{{route('store-visualized',['id'=>$complaint->id])}}"
                                class="btn btn-sm btn-primary">
                                <i class="now-ui-icons ui-1_check"></i>
                            </a>
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
