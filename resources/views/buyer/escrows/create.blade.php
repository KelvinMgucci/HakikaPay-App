@extends('buyer.layouts.layout')

@section('buyer_page_title')
    Create New Escrow - Buyer Panel
@endsection

@section('buyer_layout')
    <h1>Create a New Escrow</h1>

    <form action="{{ route('buyer.escrows.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="seller_id">Select Seller:</label>
            <select name="seller_id" id="seller_id" class="form-control" required>
                <option value="">-- Select a Seller --</option>
                @foreach ($sellers as $seller)
                    <option value="{{ $seller->id }}">{{ $seller->name }} - {{ $seller->email }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount" class="form-control" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label for="delivery_date">Expected Delivery Date:</label>
            <input type="date" name="delivery_date" id="delivery_date" class="form-control" required>
        </div>

        {{-- Optional hidden fields for simulated blockchain integration --}}
        <input type="hidden" name="transaction_hash" value="">
        <input type="hidden" name="contract_address" value="">

        <button type="submit" class="btn btn-primary">Create Escrow</button>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger mt-3">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
