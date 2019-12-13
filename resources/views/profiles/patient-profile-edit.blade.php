@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        Edit {{$patientProfile->user->name}} Profile
                        <form action="/home/profile/patient/{{$patientProfile->id}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            @method('PATCH')
                            <h1>{{$patientProfile->name}}</h1>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name') ?? $patientProfile->name}}" autocomplete="name">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Surname') }}</label>
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{old('surname') ?? $patientProfile->surname}}" autocomplete="surname">
                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
                                <div class="col-md-6">
                                    <select class="form-control m-bot15" name="gender">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                        <option value="2">Other</option>
                                    </select>
                                    @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="birthDate" class="col-md-4 col-form-label text-md-right">{{ __('Birth Date') }}</label>
                                <div class="col-md-6">
                                    <input id="datepicker" type="date" class="form-control @error('birthDate') is-invalid @enderror" name="birthDate" value="{{old('birthDate') ?? $patientProfile->birthDate}}" autocomplete="birthDate">
                                    @error('birthDate')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="pesel" class="col-md-4 col-form-label text-md-right">{{ __('Pesel') }}</label>
                                <div class="col-md-6">
                                    <input id="pesel" type="text" class="form-control @error('pesel') is-invalid @enderror" name="pesel" value="{{ old('pesel') ?? $patientProfile->pesel}}" required autocomplete="pesel">
                                    @error('pesel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{old('phone') ?? $patientProfile->phone}}" autocomplete="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="locality" class="col-md-4 col-form-label text-md-right">{{ __('Locality') }}</label>
                                <div class="col-md-6">
                                    <input id="locality" type="text" class="form-control @error('locality') is-invalid @enderror" name="locality" value="{{old('locality') ?? $patientProfile->locality}}" autocomplete="locality">
                                    @error('locality')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="street" class="col-md-4 col-form-label text-md-right">{{ __('Street') }}</label>
                                <div class="col-md-6">
                                    <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street" value="{{old('street') ?? $patientProfile->street}}" required autocomplete="street">
                                    @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Profile Image') }}</label>
                                <div class="col-md-6">
                                    <input  type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="image">
                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button class="btn btn-success">Save Profile</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
