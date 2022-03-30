@extends('admin.app')
@section('content')


<div class="tab-content" id="myTabContent">
                                   
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <form method="POST" action="{{ route('update_user',$user->id) }}" enctype="multipart/form-data">
            @csrf
            <h3 class="register-heading">Compte organisateur</h3>
            <div class="row register-form">
                <div class="col-md-6">
                    <div class="form-group">
                    <input id="name" placeholder="Nom et prénom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"  autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                    <input id="email" placeholder="Adresse E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}"  autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                    <input id="contact" placeholder="Contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}"  autocomplete="contact">

                        @error('contact')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <input type="file" class="form-control @error('profil_image') is-invalid @enderror" id="customFile" name="profil_image">
                        @error('profil_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <input name="type" value=1 id="type" type="number" hidden/>
            <h3 class="text-center text-dark mb-3">Informations agence</h3>
            <div class="row" style="padding-left: 10%;padding-right: 10%; margin-top:0px">
                <div class="col-md-6">
                    <div class="form-group">
                    <input id="agence_name" placeholder="Nom agence" type="text" class="form-control @error('agence_name') is-invalid @enderror" name="agence_name" value="{{ old('agence_name') }}"  autocomplete="agence_name">
                        @error('agence_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>


                    <div class="form-group">
                        <input id="description" placeholder="Description Agence" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}"  autocomplete="description">
                        @error('agence_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>     
                
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="file" class="form-control  @error('logo') is-invalid @enderror" id="customFile" name="logo">
                        @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="addresse" placeholder="Addresse" type="text" class="form-control @error('addresse') is-invalid @enderror" name="addresse" value="{{ old('addresse') }}"  autocomplete="addresse">
                        @error('addresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                
                    <div class="form-group">
                        <select class="form-control " name="type" >
                        <option value="none" selected="" disabled="">Type d'agence</option>
                            @forelse ($typeAgence as $type)
                            <option value="{{$type->name}}">{{$type->name}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>

                    <input type="submit" class="btnRegister"  value="Je m'inscrit"/>
                </div>
            </div>
        </form>
    </div>
    
    
    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data"
        >
            @csrf
        <h3  class="register-heading">Compte spectateur</h3>
        <div class="row register-form">
            <div class="col-md-6">
                <div class="form-group">
                <input id="name" placeholder="Nom et prénom" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                
            
                <div class="form-group">
                <input id="password" placeholder="Mot de passe" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input name="type" value=3 id="type" type="number" hidden/>

                <div class="form-group">
                <input id="password-confirm" placeholder="Repeter le mot de passe" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                </div>

                
        
            </div>
            <div class="col-md-6">
                <div class="form-group">
                <input id="email" placeholder="Adresse E-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                <input id="contact" placeholder="Contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" value="{{ old('contact') }}"  autocomplete="contact">

                    @error('contact')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            
                <div class="form-group">
                    <input type="file" class="form-control @error('profil_image') is-invalid @enderror" id="customFile" name="profil_image">
                    @error('profil_image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <input type="submit" class="btnRegister"  value="Je m'inscrit"/>

            </div>
        </div>
    </form>
    </div>
    
</div>



@endsection