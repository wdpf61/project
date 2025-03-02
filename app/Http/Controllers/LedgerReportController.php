<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\AccountTransaction;
use Barryvdh\DomPDF\Facade\Pdf;

class LedgerReportController extends Controller
{
    public function index()
    {
        $accounts = Account::all();
        return view('ledger.index', compact('accounts'));
    }

    public function show($id)
    {
        $account = Account::findOrFail($id);
        $transactions = AccountTransaction::where('account_id', $id)
            ->orderBy('transaction_date')
            ->get();


        $balance = 0;

        foreach ($transactions as $transaction) {
            $balance += $transaction->debit - $transaction->credit;
            $transaction->running_balance = $balance;
        }

        return view('ledger.show', compact('account', 'transactions', 'openingBalance'));
    }

    public function printPdf($id)
    {
        $account = Account::findOrFail($id);
        $transactions = AccountTransaction::where('account_id', $id)
            ->orderBy('transaction_date')
            ->get();

        $openingBalance = $account->op_bal_dr - $account->op_bal_cr;
        $balance = $openingBalance;

        foreach ($transactions as $transaction) {
            $balance += $transaction->debit - $transaction->credit;
            $transaction->running_balance = $balance;
        }

        $pdf = Pdf::loadView('ledger.pdf', compact('account', 'transactions', 'openingBalance'));
        return $pdf->download("Ledger_Report_{$account->account_name}.pdf");
    }
}
