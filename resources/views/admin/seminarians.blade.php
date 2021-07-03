@extends('layouts.dashboard-admin')

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row mt-20">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title"> Seminaristas</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <thead class=" text-primary">
                  <th>
                    Nome
                  </th>
                  <th>
                    E-mail
                  </th>
                  <th>
                    Telefone
                  </th>
                  <th class="text-right">
                    Opções
                  </th>
                </thead>
                <tbody>
                    @foreach ($seminarians as $seminarian)
                        <tr>
                            <td>{{$seminarian->name}}</td>
                            <td>{{$seminarian->email}}</td>
                            <td>{{$seminarian->phone}}</td>
                            <td class="text-right">
                                <a href="{{route('vocational-record',['id'=>$seminarian->id])}}" class="btn btn-sm btn-info">
                                    <i class="now-ui-icons files_paper"></i>
                                </a>
                                <a href="" class="btn btn-sm btn-danger">
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

  @endsection
