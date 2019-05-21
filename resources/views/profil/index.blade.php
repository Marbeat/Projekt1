@extends('layouts.title', ['title' => 'Zamówienia'])
@extends('layouts.app')
@extends('layouts.footer')
@section('content')
    <style>
        body{ margin:0}
    </style>
    <section class="bg-panel text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dane osobowe</div>

                    <div class="panel-body">
                        @if (Session::has('message-reset-password'))
                            <div class="alert alert-info">{{ Session::get('message-reset-password') }}</div>
                        @endif
                        @if ($errors->count() > 0)
                                <ul class="text-left text-danger">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        @foreach($users as $user)
                        <form action="{{ route('profil.update', $user->id) }}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{ csrf_field() }}
                            Nazwa użytkownika:
                            <br />
                            <input type="text" name="name" value="{{ $user->name }}"required />
                            <br /><br />
                            Adres e-mail:
                            <br />
                            <input type="text" name="email" value="{{ $user->email }}"required/>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                            <br /><br />
                            Numer telefonu:
                            <br />
                            <input type="tel" name="phone_number" value="{{ $user->phone_number }}"required />
                            <br /><br />
                            <input type="submit" value="Zatwierdź edycje" class="btn btn-default" />
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Change Password') }}
                            </a>
                        </form>
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection