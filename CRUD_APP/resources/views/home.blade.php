@extends('my')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button type="submit">logout</button>
                    </form>

                    {{ __('You are logged in!') }}


                   <table>
                    <th>
                        <tr>
                            <td>
                                name
                            </td>
                            <td>
                               email
                            </td>

                        </tr>

                    </th>

                    @foreach ($users as $user )
                    <tr>
                        <td> {{ $user->name }}</td>
                        <td>{{ $user->email }}</td>

                    </tr>

                    @endforeach


                   </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
