<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\Products;
use App\Models\Containers;
use App\Models\Customers;
use App\Models\Expenses;
use App\Models\Orders;
use App\Models\Dispatches;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     **/
    public function index()
    {
        $data = [
            'totalPieces' => Orders::sum('total_pieces'),
            'balancePieces' => Orders::sum('balance_pieces'),
            'totalAmount' => Orders::sum('total_amount'),
            'DiscountAmount' => Orders::sum('discount_amount'),
            'ReceivedAmount' => Orders::sum('received_amount'),
            'balanceAmount' => Orders::sum('balance_amount'),
            'totalExpenses' => Expenses::whereYear('created_at', date('Y'))->sum('amount'),
            'productsPieces' => Products::withSum('orders as total_pieces_sum', 'total_pieces')->withSum('orders as balance_pieces_sum', 'balance_pieces')->withSum('orders as dispatched_pieces_sum', 'dispatched_pieces')->get(['id', 'name']),
            'containersPieces' => Containers::withSum('orders as total_pieces_sum', 'total_pieces')->withSum('orders as balance_pieces_sum', 'balance_pieces')->withSum('orders as dispatched_pieces_sum', 'dispatched_pieces')->get(['name']),
        ];
        return view('home', $data);
    }

    // Show the form for updating password.
    public function change_password()
    {
        $user = User::where('id', Auth::user()->id)->first();
        return view('auth.passwords.reset', compact('user'));
    }

    // Update the New Password.
    public function update_password(Request $request, $id)
    {
        $user = User::where('id', Auth::user()->id)->first();
        $user->password = $request->password;
        $user->save();
        return redirect()->route('home');
    }
}
