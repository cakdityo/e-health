@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Diagnosis</div>

                    <div class="panel-body">
                        <p>Hallo <strong>{{ $user->name }}</strong>! Dengan gejala yang anda alami, yaitu:</p>
                        <ul>
                            @foreach($check->indications as $indication)
                                <li>{{ $indication->name }}</li>
                            @endforeach
                        </ul>
                        <p>Kemungkinan anda terkena penyakit berikut:</p>
                        <ol>
                            @foreach($check_diagnosis as $diagnosis)
                                <li><strong>{{ $diagnosis->disease->name }}:</strong> {{ $diagnosis->cf_total }}</li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
