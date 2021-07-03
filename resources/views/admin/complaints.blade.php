@extends('layouts.dashboard-admin')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Todas as denúncias</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th class="text-center">Data</th>
                  <th class="text-center">Denunciante</th>
                  <th>Mensagem</th>
                  <th  class="text-center">Opções</th>
                </thead>
                <tbody>
                    @foreach($complaints as $complaint)
                    @php
                        $seminarian = \App\Models\User::find($complaint->user_id);
                    @endphp
                  <tr>
                    <td class="text-center">{{$complaint->created_at->format('d/m/Y')}}</td>
                    <td class="text-center">{{$complaint->type == "0"? $seminarian->name : "Anônimo"}}</td>
                    <td>{{$complaint->description}}</td>
                    <td  class="text-center">
                        <div class="d-flex justify-content-around">
                            <a href="{{route('store-visualized',['id'=>$complaint->id])}}"
                                class="btn btn-sm btn-info mr-2"
                                style="{{$complaint->visualized == '1'? 'display:none':''}}">
                                <i class="now-ui-icons ui-1_check"></i>
                            </a>
                            <a href="{{route('delete-complaint',['id'=>$complaint->id])}}"
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

  @endsection
