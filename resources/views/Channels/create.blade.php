@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create a New Channel</div>

        <div class="card-body">
            <div class="pannel-body">
                <form action="{{route('channels.store')}}" method="post">

                    {{csrf_field()}}

                    <div class="form-group">

                        <input type="text" name="channel" placeholder="Enter Channel Name" class="form-control">

                    </div>

                    <div class="form-group">

                        <div class="text-center">

                            <button class="btn btn-success" type="submit">
                                Save Channel
                            </button>

                        </div>

                    </div>

                </form>
            </div>

        </div>

    </div>
@endsection
