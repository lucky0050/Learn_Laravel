@extends('auth.layouts')

@section('content')
    <div class="row justify-content-center mt-5" style="font-family: maths;font-weight:500;font-size:20px">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Welcome In Dashboard : {{ Auth::user()->name }}</div>
                <div class="card-body">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @else
                        <div class="alert alert-success">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Login Time</th>
                                </tr>
                                <tr>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ Auth::user()->email }}</td>
                                    <td>
                                        {{ Auth::user()->created_at->timezone('Asia/Kolkata')->format('F d, Y / h:i A') }} (India) <br>
                                        {{ Auth::user()->created_at->diffForHumans() }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
