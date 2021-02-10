@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Coach') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="submitForm">
                        @csrf

                        <div class="form-group row">
                            <label for="usr_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="usr_name" type="text" class="form-control @error('usr_name') is-invalid @enderror" name="usr_name" value="{{ old('usr_name') }}" autocomplete="usr_name" autofocus>

                                @error('usr_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                               <div class="form-group row">
                            <label for="usr_name" class="col-md-4 col-form-label text-md-right">{{ __('extracurricular') }}</label>

                            <div class="col-md-6">
                                <select id="coc_esc_id" name="coc_esc_id" class="form-control @error('coc_esc_id') is-invalid @enderror">
                                    @foreach($esc as $esc)
                                        <option value="{{$esc->esc_id}}">{{$esc->esc_name}}</option>


                                    @endforeach
                                </select>
                                @error('usr_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                          <div class="form-group row">
                            <label for="coc_place" class="col-md-4 col-form-label text-md-right">{{ __('Place') }}</label>

                            <div class="col-md-6">
                                <input id="coc_place" type="text" class="form-control @error('coc_place') is-invalid @enderror" name="coc_place" value="{{ old('coc_place') }}" autocomplete="coc_place" autofocus>

                                @error('coc_place')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coc_birth" class="col-md-4 col-form-label text-md-right">{{ __('Birth') }}</label>

                            <div class="col-md-6">
                                <input id="coc_birth" type="date" class="form-control @error('coc_birth') is-invalid @enderror" name="coc_birth" value="{{ old('coc_birth') }}" autocomplete="coc_birth" autofocus>

                                @error('coc_birth')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coc_gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <input id="coc_gender" type="radio" value="male" class="@error('coc_gender') is-invalid @enderror" name="coc_gender" value="{{ old('coc_gender') }}" autocomplete="coc_gender" autofocus>
                                Male<BR>
                                <input id="coc_gender" type="radio" value="female" class="@error('coc_gender') is-invalid @enderror" name="coc_gender" value="{{ old('coc_gender') }}" autocomplete="coc_gender" autofocus>
                                Female
                                @error('coc_gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coc_study" class="col-md-4 col-form-label text-md-right">{{ __('Study') }}</label>

                            <div class="col-md-6">
                                <input id="coc_study" type="text" class="form-control @error('coc_study') is-invalid @enderror" name="coc_study" value="{{ old('coc_study') }}" autocomplete="coc_study" autofocus>

                                @error('coc_study')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="coc_job" class="col-md-4 col-form-label text-md-right">{{ __('Job') }}</label>

                            <div class="col-md-6">
                                <input id="coc_job" type="text" class="form-control @error('coc_job') is-invalid @enderror" name="coc_job" value="{{ old('coc_job') }}" autocomplete="coc_job" autofocus>

                                @error('coc_job')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="coc_address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="coc_address" type="text" class="form-control @error('coc_address') is-invalid @enderror" name="coc_address" value="{{ old('coc_address') }}" autocomplete="coc_address" autofocus>

                                @error('coc_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="usr_email" type="email" class="form-control @error('usr_email') is-invalid @enderror" name="usr_email" value="{{ old('usr_email') }}" autocomplete="usr_email">

                                @error('usr_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6" id="only-number">
                                <input id="usr_phone" value="{{ old('usr_phone') }}" type="text" class="form-control @error('usr_phone') is-invalid @enderror" name="usr_phone" autocomplete="off">

                                @error('usr_phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

                                @error('usr_password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <input type="hidden" name="role" value="2">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="btnSubmit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection