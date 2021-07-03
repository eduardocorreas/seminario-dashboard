@extends('layouts.dashboard-admin')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <div class="d-flex justify-content-between">
              <h4 class="card-title">Acompanhamentos de {{$seminarian->name}}</h4>
            <!-- Button trigger modal -->
            <div>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                    Agendar
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Iniciar agora
                </button>
            </div>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th>Data</th>
                  <th>Resumo</th>
                  <th  class="text-center">Opções</th>
                </thead>
                <tbody>
                    @foreach($attendances as $attendance)
                  <tr>
                    <td>{{$attendance->date." ".$attendance->hour}}</td>
                    <td>{{substr($attendance->description, 0, 50)}}</td>
                    <td  class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="{{route('attendance-detail',['id'=>$attendance->id])}}"
                                class="btn btn-sm btn-info mr-2">
                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                            </a>
                            <a href="{{route('delete-attendance',['id'=>$attendance->id])}}"
                                class="btn btn-sm btn-danger">
                                <i class="now-ui-icons ui-1_simple-remove"></i>
                            </a>
                        </div>

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

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Agendar acompanhamento</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('store-attendance')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <label>Data</label>
                        <input type="date" class="form-control" name="date" id="date" >
                      </div>
                    <div class="form-group">
                        <label>Hora</label>
                        <input type="time" class="form-control"  name="hour" id="hour">
                      </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="user_id" id="user_id" value="{{$seminarian->id}}">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
  </div>

  @endsection
