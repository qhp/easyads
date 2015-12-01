@extends('admin.layout')

@section('content-header-title')
    Campaigns
@endsection

@section('breadcrumb')
    <li class="active">Campaigns</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive no-padding">

                    @if(count($campaigns) > 0)
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Client</th>
                                <th>Date</th>
                                <th>AdWords Status</th>
                                <th>FB Status</th>
                                <th>Name</th>
                            </tr>

                            @foreach($campaigns as $campaign)
                            <tr>
                                <td><a href="{{ route('dashboard', []) }}">{{ $campaign->id }}</a></td>
                                <td>{{ $campaign->user->name }}</td>
                                <td>{{ $campaign->created_at }}</td>
                                <td><span class="label label-success">{{ isset($campaign->adwords) ? $campaign->adwords->status : 'None' }}</span></td>
                                <td><span class="label label-default">None</span></td>
                                <td><a href="{{ route('dashboard', []) }}">{{ $campaign->name }}</a></td>
                            </tr>
                            @endforeach

                        </table>
                    @else
                        <div class="text-center">
                            <h4>You have no campaigns. Create campaign for start creation the ads.</h4>
                            <a href="" class="btn btn-success">Add Campaign</a>
                            <div class="clearfix"></div>
                            <br>
                        </div>
                    @endif

                </div>

                @if ($campaigns->lastPage() > 1)
                <div class="box-footer clearfix">
                    @include('admin.common.pagination', ['pagination' => $campaigns])
                </div>
                @endif

            </div>
        </div>
    </div>
@endsection