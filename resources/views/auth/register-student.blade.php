@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:aqua;">{{ __('Register Siswa') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="submitForm">
                        @csrf

                        <div class="form-group row">
                            <label for="usr_name" class="col-md-4 col-form-label text-md-right">{{ __('Nama') }}</label>

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
                            <label for="std_gender" class="col-md-4 col-form-label text-md-right">{{ __('Jenis Kelamin') }}</label>

                            <div class="col-md-6">
                                <input id="std_gender" type="radio" value="laki-laki" class="@error('std_gender') is-invalid @enderror" name="std_gender" value="{{ old('std_gender') }}" autocomplete="std_gender" autofocus>
                                Laki-Laki<BR>
                                <input id="std_gender" type="radio" value="perempuan" class="@error('std_gender') is-invalid @enderror" name="std_gender" value="{{ old('std_gender') }}" autocomplete="std_gender" autofocus>
                                Perempuan
                                @error('std_gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="std_class" class="col-md-4 col-form-label text-md-right">{{ __('Kelas') }}</label>

                            <div class="col-md-6">
                                <select id="std_class" type="text" class="form-control @error('std_class') is-invalid @enderror" name="std_class" value="{{ old('std_class') }}" autocomplete="std_class" autofocus>
                                    <option>X MULTIMEDIA 1</option>
                                    <option>X MULTIMEDIA 2</option>
                                    <option>X REKAYASA PERANGKAT LUNAK</option>
                                    <option>XI MULTIMEDIA 1</option>
                                    <option>XI MULTIMEDIA 2</option>
                                    <option>XI REKAYASA PERANGKAT LUNAK</option>
                                    <option>XII MULTIMEDIA</option>
                                    <option>XII REKAYASA PERANGKAT LUNAK 1</option>
                                    <option>XII REKAYASA PERANGKAT LUNAK 2</option>

                                @error('std_class')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="std_address" class="col-md-4 col-form-label text-md-right">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="std_address" type="text" class="form-control @error('std_address') is-invalid @enderror" name="std_address" value="{{ old('std_address') }}" autocomplete="std_address" autofocus>

                                @error('std_address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="usr_email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

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
                            <label for="usr_phone" class="col-md-4 col-form-label text-md-right">{{ __('No.Telp') }}</label>

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
                                <input type="hidden" name="role" value="1">
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