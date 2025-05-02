@extends('buyer.layouts.layout')

@section('buyer_page_title')
My Escrows - Buyer Panel
@endsection

@section('buyer_layout')
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

                    <a href="{{ route('buyer.escrows.create') }}" class="btn btn-primary mb-3">Create New Escrow</a>

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
                                        <th>Seller</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Delivery Date</th>
                                        <th>Status</th>
                                        <th>Transaction Hash</th>
                                        <th>Contract Address</th>
                                        <th>Delivery Time</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($escrows as $escrow)
                                        <tr>
                                            <td>{{ $escrow->id }}</td>
                                            <td>{{ $escrow->seller->name ?? 'N/A' }}</td>
                                            <td>Tsh {{ number_format($escrow->amount, 2) }}</td>
                                            <td>{{ Str::limit($escrow->description, 50) }}</td>
                                            <td>{{ $escrow->delivery_date ?? 'N/A' }}</td>
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
                                            <td>{{ $escrow->transaction_hash ?? 'Pending' }}</td>
                                            <td>{{ $escrow->contract_address ?? 'Pending' }}</td>
                                            <td>
                                                @if($escrow->delivery_time)
                                                    {{ $escrow->delivery_time->diffForHumans() }}
                                                @else
                                                    N/A
                                                @endif
                                            </td>
                                            <td>
                                            @if(!$escrow->is_confirmed && $escrow->delivery_time)
                                                    <form action="{{ route('buyer.escrows.confirmDelivery', $escrow->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-sm btn-success">Confirm Delivery</button>
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
