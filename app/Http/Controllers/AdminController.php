<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function show()
    {
        $orders = DB::table('orders')->orderBy('created_at', 'desc')->paginate(1);
        return view('admin.orders', compact('orders'));
    }
}