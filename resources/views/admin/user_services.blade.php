@extends('layouts.dashboard-admin')

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-12">
        <div class="card">
            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
          <div class="card-header">
            <h4 class="card-title">Funções e Serviços</h4>
          </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{route("seminarian-services-store")}}" method="post">
                            @csrf
                            <div class="d-flex justify-content-around">
                                <div class="form-group">
                                    <label>Seminarista</label>
                                    <select  class="form-control" name="user_id" >
                                        @foreach ($users as $user)
                                            <option value="{{$user->id}}">{{$user->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Serviço/Função</label>
                                    <select  class="form-control" name="service_id">
                                        @foreach ($services as $service)
                                            <option value="{{$service->id}}">{{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Adicionar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="container">


                    <div class="table-responsive">
                        <table class="table">
                          <thead class="text-primary">
                              <th>Serviço</th>
                              <th>Seminarista</th>
                          </thead>
                          <tbody>
                              @foreach ($userServices as $us)
                                  <tr>
                                      <td>{{$us->service()->name}}</td>
                                      <td>{{$us->user()->name}}</td>
                                      <td class="text-center">
                                          <a href="{{route("seminarian-services-delete",[$us->id])}}" class="btn btn-sm btn-primary">
                                              <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                  </tr>
                              @endforeach
                            <tr></tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection
