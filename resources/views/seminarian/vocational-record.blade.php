@extends('layouts.dashboard-admin')

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-8">
        <div class="card">
            <div class="card-header">
            <h5 class="title">Ficha vocacional</h5>
            </div>
            <div class="card-body">
            <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nome</label>
                            <input id="name" name="name" type="text" class="form-control"  value="{{$vocational->name}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input id="name" name="email" type="email" class="form-control"  value="{{$vocational->email}}">
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Data de nascimento</label>
                        <input id="borndate" name="borndate"  type="date" class="form-control" value="{{$vocational->borndate}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefone</label>
                            <input id="phone" name="phone" type="text" class="form-control"  value="{{$vocational->phone}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Cep</label>
                            <input type="text" class="form-control"  value="{{$vocational->zipcode}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" value="{{$vocational->city}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control" value="{{$vocational->state}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" class="form-control" value="{{$vocational->address}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Número</label>
                        <input type="text" class="form-control" value="{{$vocational->number}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" value="{{$vocational->neighborhood}}">
                        </div>
                    </div>
                </div>

                <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
        </div>
        <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
            <img src="../assets/img/bg5.jpg" alt="...">
            </div>
            <div class="card-body">
            <div class="author">
                <a href="#">
                <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                <h5 class="title">{{$vocational->name}}</h5>
                </a>
                <p class="description">
                    {{$vocational->email}}
                </p>
            </div>
            <p class="description text-center">
                {{$vocational->phone}}
            </p>
            </div>
            <hr>
            <div class="button-container">
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-facebook-f"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-twitter"></i>
            </button>
            <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">
                <i class="fab fa-google-plus-g"></i>
            </button>
            </div>
        </div>
        </div>
    </div>
</div>

  @endsection
