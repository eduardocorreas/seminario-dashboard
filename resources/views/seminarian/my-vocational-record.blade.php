@extends('layouts.dashboard-seminarian')

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
            <form action="{{route('vocational-record-update')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$vocational->id}}">
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
                            <input type="text" class="form-control" name="postal_code"  value="{{$vocational->postal_code}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" class="form-control" name="city" value="{{$vocational->city}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" class="form-control" name="state" value="{{$vocational->state}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Endere??o</label>
                        <input type="text" class="form-control" name="address" value="{{$vocational->address}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>N??mero</label>
                        <input type="text" class="form-control" name="number" value="{{$vocational->number}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" name="neighborhood" value="{{$vocational->neighborhood}}">
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
                        <label>Profiss??o do pai</label>
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
                            <label>Est?? vivo?</label>
                            <select  class="form-control" name="father_alive">
                                <option value="1" {{$vocational->father_alive =="0"?"selected":""}}>SIM</option>
                                <option value="0" {{$vocational->father_alive =="0"?"selected":""}}>N??O</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Nome da m??e</label>
                        <input id="mother_name" name="mother_name"  type="text" class="form-control" value="{{$vocational->mother_name}}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                        <label>Profiss??o da m??e</label>
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
                            <label>Est?? viva?</label>
                            <select  class="form-control" name="mother_alive">
                                <option value="1" {{$vocational->mother_alive =="0"?"selected":""}}>SIM</option>
                                <option value="0" {{$vocational->mother_alive =="1"?"selected":""}}>N??O</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Quantos irm??os?</label>
                            <input id="total_brothers" name="total_brothers"  type="number" class="form-control" value="{{$vocational->total_brothers}}">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Quantas irm??s?</label>
                            <input id="total_sisters" name="total_sisters"  type="number" class="form-control" value="{{$vocational->total_sisters}}">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Situa????o econ??mica</label>
                            <select  class="form-control" name="family_economic_situation">
                                <option value="0" {{$vocational->family_economic_situation =="0"?"selected":""}}>Insuficiente</option>
                                <option value="1" {{$vocational->family_economic_situation =="1"?"selected":""}}>Boa</option>
                                <option value="2" {{$vocational->family_economic_situation =="2"?"selected":""}}>M??dia</option>
                                <option value="3" {{$vocational->family_economic_situation =="3"?"selected":""}}>Alta</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label>Rezam juntos?</label>
                            <select  class="form-control" name="family_praying_together">
                                <option value="0" {{$vocational->family_praying_together =="0"?"selected":""}}>N??o</option>
                                <option value="1" {{$vocational->family_praying_together =="0"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Religi??o dos pais</label>
                            <input id="parents_religion" name="parents_religion"  type="text" class="form-control" value="{{$vocational->parents_religion}}">
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Batizado</label>
                            <select  class="form-control" name="baptized">
                                <option value="0" {{$vocational->baptized =="0"?"selected":""}}>N??o</option>
                                <option value="1" {{$vocational->baptized =="0"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Fez primeira eucaristia</label>
                            <select  class="form-control" name="first_eucharist">
                                <option value="0" {{$vocational->first_eucharist =="0"?"selected":""}}>N??o</option>
                                <option value="1" {{$vocational->first_eucharist =="1"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Crisma</label>
                            <select  class="form-control" name="chrism">
                                <option value="0" {{$vocational->chrims =="0"?"selected":""}}>N??o</option>
                                <option value="1" {{$vocational->chrims =="1"?"selected":""}}>Sim</option>
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Vida em fam??lia</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Voc?? reside com seus pais?</li>
                            <li>Eles sofrem de alguma doen??a?</li>
                            <li>Como ?? sua rela????o com eles?</li>
                            <li>S??o casados na Igreja?</li>
                            <li>O que eles pensam da sua voca????o?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="family_description" name="family_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->family_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Sa??de</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Voc?? goza de boa sa??de?</li>
                            <li>Possui alguma doen??a? Com que idade iniciou?</li>
                            <li>Possui alguma alergia?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="health_description" name="health_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->health_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Estudos e trabalho</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Voc?? possui alguma profiss??o?</li>
                            <li>Voc?? gosta de estudar?</li>
                            <li>Voc?? foi sempre aprovado?</li>
                            <li>Voc?? conseguiu algum diploma?</li>
                            <li>Se n??o est?? estudando, h?? quanto tempo parou?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="study_description" name="study_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->study_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Rela????es sociais</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Voc?? ?? alegre e comunicativo?</li>
                            <li>Faz amizade com facilidade?</li>
                            <li>Possui dificuldade em se relacionar com as pessoas?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="social_description" name="social_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->social_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Vida de ora????o</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Voc?? participa da Santa Missa com que frequencia?</li>
                            <li>Voc?? l?? a B??blia?</li>
                            <li>Voc?? comunga?</li>
                            <li>Confessa-se sempre que necess??rio?</li>
                            <li>Participa de algum trabalho, movimento ou comunidade da Igreja?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="praying_description" name="praying_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->praying_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Voca????o</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>J?? participou de algum encontro vocacional?</li>
                            <li>Quando lhe surgiu o desejo de ser padre?</li>
                            <li>De 0 a 10, qual nota voc?? daria para a sua decis??o de ser padre?</li>
                            <li>Voc?? encontra dificuldade de ingressar na casa formativa?</li>
                            <li>Por que voc?? deseja ser padre?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="priest_desire_description" name="priest_desire_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->priest_desire_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Miss??o</h6>
                        <p>Utilize o campo abaixo para responder as seguintes perguntas:</p>
                        <ul>
                            <li>Voc?? j?? esteve em alguma diocese, congrega????o, como aspirante, novi??o ou postulante?</li>
                            <li>Se sim, quanto tempo ficou?</li>
                            <li>Por que saiu?</li>
                        </ul>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="missionary_description" name="missionary_description" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->missionary_description}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <h6>Observa????es</h6>
                        <p>Deseja acrescentar mais alguma informa????o? Se sim, utilize o campo abaixo:</p>

                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea id="notes" name="notes" rows="5" cols="80" class="form-control" placeholder="Responda aqui">{{$vocational->notes}}</textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</div>

  @endsection
