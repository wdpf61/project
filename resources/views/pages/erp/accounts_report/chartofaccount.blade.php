@extends('layout.erp.app')

@section('page')
<div class="container">
    <h2 class="mb-4">Chart of Accounts</h2>
    <a href="{{ route('chart.of.accounts.pdf') }}" class="btn btn-danger mb-3">Print PDF</a>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th colspan="1">Code</th>
                        <th colspan="4">Account Name</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($groups as $group)
                        <tr class="table-primary">
                            <td colspan="1"><strong>{{ $group->code }}</strong></td>
                            <td colspan="4"><strong>{{ $group->name }} ({{ $group->code }})</strong></td>
                        </tr>
                        @foreach($group->accounts as $account)
                            <tr>
                                <td colspan="1">{{ $account->code }}</td>
                                <td colspan="4">{{ $account->name }}( {{ $account->code }})</td>
                            </tr>
                        @endforeach
                        @foreach($group->children as $child)
                            <tr class="table-secondary">
                                <td colspan="1"><strong>{{ $child->code }}</strong></td>
                                <td colspan="4"><strong>{{ $child->name }} ({{ $child->code }})</strong></td>
                            </tr>
                            @foreach($child->accounts as $account)
                                <tr>
                                    <td colspan="1">{{ $account->code }}</td>
                                    <td colspan="4">{{ $account->name }} ({{ $account->code }})</td>
                                </tr>
                            @endforeach
                        @endforeach
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

