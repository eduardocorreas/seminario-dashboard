@extends('layouts.dashboard-admin')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Seminaristas</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class="text-primary">
                  <th class="text-center">Nome</th>
                  <th class="text-center">E-mail</th>
                  <th>Telefone</th>
                  <th  class="text-center">Opções</th>
                </thead>
                <tbody>
                    @foreach($seminarians as $seminarian)
                    @php
                        $vocational= \App\Models\VocationalRecord::where('user_id', '=', $seminarian->id)->select('phone')->first();
                    @endphp
                  <tr>
                    <td class="text-center">{{$seminarian->name}}</td>
                    <td class="text-center">{{$seminarian->email}}</td>
                    <td>{{$vocational->phone}}</td>
                    <td  class="text-center">
                        <div class="d-flex justify-content-center">
                            <a href="{{route('vocational-record',['id'=>$seminarian->id])}}"
                                class="btn btn-sm btn-warning mr-2">
                                <i class="now-ui-icons education_paper"></i>
                            </a>
                            <a href="{{route('attendances',['user_id'=>$seminarian->id])}}"
                                class="btn btn-sm btn-info  mr-2">
                                <i class="now-ui-icons ui-1_calendar-60"></i>
                            </a>
                            <a href="{{route('delete-seminarian',['id'=>$seminarian->id])}}"
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
