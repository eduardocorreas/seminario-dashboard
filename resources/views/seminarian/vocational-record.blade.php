@extends('layouts.dashboard-admin')

@section('content')

<div class="panel-header panel-header-sm">
</div>
<div class="content">
    <div class="row">
        <div class="col-md-12">
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
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Nome do pai</label>
                        <input id="father_name" name="father_name"  type="text" class="form-control" value="{{$vocational->father_name}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Profissão do pai</label>
                        <input id="father_profession" name="father_profession"  type="text" class="form-control" value="{{$vocational->father_profession}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Idade</label>
                            <input id="father_age" name="father_age" type="number" class="form-control"  value="{{$vocational->father_age}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Está vivo?</label>
                            <select  class="form-control" name="father_alive">
                                <option value="1" {{$vocational->father_alive =="0"?"selected":""}}>SIM</option>
                                <option value="0" {{$vocational->father_alive =="0"?"selected":""}}>NÃO</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Nome da mãe</label>
                        <input id="mother_name" name="mother_name"  type="text" class="form-control" value="{{$vocational->mother_name}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Profissão da mãe</label>
                        <input id="mother_profession" name="mother_profession"  type="text" class="form-control" value="{{$vocational->mother_profession}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Idade</label>
                            <input id="mother_age" name="mother_age" type="number" class="form-control"  value="{{$vocational->mother_age}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Está viva?</label>
                            <select  class="form-control" name="mother_alive">
                                <option value="1" {{$vocational->mother_alive =="0"?"selected":""}}>SIM</option>
                                <option value="0" {{$vocational->mother_alive =="1"?"selected":""}}>NÃO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Quantos irmãos?</label>
                            <input id="total_brothers" name="total_brothers"  type="number" class="form-control" value="{{$vocational->total_brothers}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Quantas irmãs?</label>
                            <input id="total_sisters" name="total_sisters"  type="number" class="form-control" value="{{$vocational->total_sisters}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Situação econômica</label>
                            <select  class="form-control" name="family_economic_situation">
                                <option value="0" {{$vocational->family_economic_situation =="0"?"selected":""}}>Insuficiente</option>
                                <option value="1" {{$vocational->family_economic_situation =="1"?"selected":""}}>Boa</option>
                                <option value="2" {{$vocational->family_economic_situation =="2"?"selected":""}}>Média</option>
                                <option value="3" {{$vocational->family_economic_situation =="3"?"selected":""}}>Alta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Rezam juntos?</label>
                            <select  class="form-control" name="family_praying_together">
                                <option value="0" {{$vocational->family_praying_together =="0"?"selected":""}}>Não</option>
                                <option value="1" {{$vocational->family_praying_together =="0"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Religião dos pais</label>
                            <input id="parents_religion" name="parents_religion"  type="text" class="form-control" value="{{$vocational->parents_religion}}">
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Batizado</label>
                            <select  class="form-control" name="baptized">
                                <option value="0" {{$vocational->baptized =="0"?"selected":""}}>Não</option>
                                <option value="1" {{$vocational->baptized =="0"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fez primeira eucaristia</label>
                            <select  class="form-control" name="first_eucharist">
                                <option value="0" {{$vocational->first_eucharist =="0"?"selected":""}}>Não</option>
                                <option value="1" {{$vocational->first_eucharist =="1"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Crisma</label>
                            <select  class="form-control" name="chrism">
                                <option value="0" {{$vocational->chrims =="0"?"selected":""}}>Não</option>
                                <option value="1" {{$vocational->chrims =="1"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Vida em família</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Você reside com seus pais?</li>
                            <li>Eles sofrem de alguma doença?</li>
                            <li>Como é sua relação com eles?</li>
                            <li>São casados na Igreja?</li>
                            <li>O que eles pensam da sua vocação?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="family_description" name="family_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Saúde</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Você goza de boa saúde?</li>
                            <li>Que doenças já teve?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="live_description" name="live_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui"></textarea>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>

  @endsection
