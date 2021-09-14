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
                            <h4 class="card-title">Acompanhamento de {{$seminarian->name}}</h4>
                            <a href="{{route('attendances',[$seminarian->id])}}" class="btn btn-sm btn-info" target="_blank"> <i class="fa fa-eye"></i> Todos os acompanhamentos</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update-attendance')}}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$attendance->id}}" />
                            <div class="form-group">
                                <textarea class="ckeditor form-control" name="description">{{$attendance->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection

  <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
