@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create a new Channel</div>

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
            </div>
        </div>
    </div>
@endsection