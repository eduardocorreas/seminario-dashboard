@extends('layouts.dashboard-seminarian')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
          <div class="d-flex justify-content-between">
            <h4 class="card-title">Minhas denúncias</h4>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Nova denúncia
            </button>
          </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th class="text-center">Data</th>
                  <th class="text-center">Tipo</th>
                  <th>Mensagem</th>
                  <th  class="text-center">Visualizado</th>
                  <th  class="text-center">Excluir</th>
                </thead>
                <tbody>
                    @foreach($complaints as $complaint)
                  <tr>
                    <td class="text-center">{{$complaint->created_at->format('d/m/Y')}}</td>
                    <td class="text-center">{{$complaint->type == "0"? "Aberta": "Anônima"}}</td>
                    <td>{{$complaint->description}}</td>
                    <td class="text-center">{{$complaint->visualized == "0"? "Não": "Sim"}}</td>
                    <td  class="text-center">
                        <a href="{{route('delete-complaint',['id'=>$complaint->id])}}"
                            class="btn btn-sm btn-danger"
                            {{$complaint->visualized == "1"? "disabled":""}}>
                            <i class="now-ui-icons ui-1_simple-remove"></i>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Nova denúncia</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{route('store-complaint')}}" method="post">
            @csrf
            <div class="modal-body">
                <div class="row">

                    <div class="col-md-12 mb-3">
                        <div class="form-group">
                            <label>Deseja fazer essa anúncia de forma anônima?</label>
                            <select  class="form-control" name="type">
                                <option value="1">SIM</option>
                                <option value="0">NÃO</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                        <label>Mensagem</label>
                        <textarea rows="4" cols="80" name="description" class="form-control" placeholder="Utilize esse espaço para descrever de forma detalhada sua denúncia" ></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
  </div>
</div>

  @endsection
