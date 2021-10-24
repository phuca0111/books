<?php
namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Account;

class AccountController extends Controller
{
    public function show(Account $account)
    {
        return view('account.show', ['account' => $account]);
    }
}

?>
