@extends('master')

@section('content')
    <div class="container">
        <?php $message = Session::get('message'); ?>
        <?php $error = Session::get('error') ?>

        @if (isset($message) || isset($error))
            <div class="row">
                <div class="col-sm-12">
                    @if (isset($message))
                        <div class="alert alert-success list-alert">
                            <p>{{ $message }}</p>
                        </div>
                    @elseif (isset($error))
                        <div class="alert alert-success list-alert">
                            <p>{{ $error }}</p>
                        </div>
                    @endif
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12 text-left">
                <h3>Total results: {{ $count }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @if (count($newcomers) > 0)
                    @foreach ($newcomers as $newcomer)
                        <div class="newcomer-row text-left">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p>
                                        <strong>Name: </strong>{{ $newcomer->name }}
                                    </p>
                                    <p>
                                        <strong>Email: </strong>{{ $newcomer->email }}
                                    </p>
                                    @if (isset($newcomer->industry))
                                        <p>
                                            <strong>Industry: </strong>{{ $newcomer->industry }}
                                        </p>
                                    @endif
                                    <p>
                                        <strong>Registration date: </strong>{{ date('m-d-Y', strtotime($newcomer->created_at)) }}
                                    </p>
                                </div>
                                <div class="col-sm-9">
                                    @if (isset($newcomer->message))
                                        <p>
                                            <strong>Message: </strong>{{ $newcomer->message }}
                                        </p>
                                    @endif
                                </div>
                            </div>
                            <a class="btn btn-danger" href="/newcomer/{{ $newcomer->id }}/delete">Delete</a>
                        </div>
                    @endforeach

                    <div class="row">
                        <div class="col-sm-12">
                            {{ $newcomers->links() }}
                        </div>
                    </div>
                @else
                    <h1>There are currently no newcomers!</h1>
                @endif
            </div>
        </div>
    </div>
@endsection