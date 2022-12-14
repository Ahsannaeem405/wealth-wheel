@extends('dashboard.layouts.main')
@section('withdraw')
    active
@endsection
@section('css')



@endsection


@section('heading')
    Withdraw List
@endsection

@section('title')
    MLM
@endsection

@section('content')

    <main>
        <div class="content-body">


            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                            </div>

                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>user name</th>
                                                <th>Amount</th>
                                                <th>Currency</th>
                                                <th>Address</th>
                                                <th>Status</th>
                                                <th>Created AT</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @php $count=1; @endphp
                                            @foreach($withdraws as $withdraw)
                                                <tr>
                                                    <td>{{$count++}}</td>
                                                    <td>{{$withdraw->user->username}}</td>
                                                    <td>{{$withdraw->amount}}</td>
                                                    <td>{{$withdraw->chanel->curancy->name}}</td>
                                                    <td>{{$withdraw->chanel->address}}</td>
                                                    <td><span class="{{$withdraw->status()}}">{{$withdraw->status}}</span></td>
                                                    <td>{{date($withdraw->created_at->format('Y-m-d'))}}</td>
                                                    <td>
                                                        @if($withdraw->status=='pending')

                                                            <a href="{{route('admin.approve.withdraw',['withdraw'=>$withdraw->id])}}">
                                                                <button class="btn btn-primary">Approve</button>
                                                            </a>
                                                        @else
                                                            <button class="btn btn-success">Approved</button>

                                                        @endif

                                                    </td>

                                                </tr>

                                            @endforeach


                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

@endsection
