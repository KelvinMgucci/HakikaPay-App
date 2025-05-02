@extends('seller.layouts.layout')

@section('seller_page_title')
    My Escrows - Seller Panel
@endsection

@section('seller_layout')
<div class="pagetitle">
    <h1>My Escrows</h1>
</div>

<section class="section dashboard">
    <div class="row">

        <div class="col-12">
            <div class="card">

                <div class="card-body pt-4">

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if($escrows->isEmpty())
                        <div class="alert alert-info">
                            You have no active escrows.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Buyer</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Delivery Date</th>
                                        <th>Delivery Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($escrows as $escrow)
                                        <tr>
                                            <td>{{ $escrow->id }}</td>
                                            <td>{{ $escrow->buyer->name ?? 'N/A' }}</td>
                                            <td>${{ number_format($escrow->amount, 2) }}</td>
                                            <td>
                                                @if($escrow->status == 'pending')
                                                    <span class="badge bg-warning">Pending</span>
                                                @elseif($escrow->status == 'delivered')
                                                    <span class="badge bg-info">Delivered</span>
                                                @elseif($escrow->status == 'released')
                                                    <span class="badge bg-success">Released</span>
                                                @elseif($escrow->status == 'disputed')
                                                    <span class="badge bg-danger">Disputed</span>
                                                @endif
                                            </td>
                                            <td>
                                                {{ \Carbon\Carbon::parse($escrow->delivery_date)->toFormattedDateString() }}
                                            </td>
                                            <td>
                                                @if($escrow->delivery_time)
                                                    {{ $escrow->delivery_time->diffForHumans() }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                                @if($escrow->status == 'pending')
                                                    <form action="{{ route('seller.escrows.markDelivered', $escrow->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-primary">Mark Delivered</button>
                                                    </form>
                                                @else
                                                    <span class="text-muted">No Action</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif

                </div>

            </div>
        </div>

    </div>
</section>
@endsection
