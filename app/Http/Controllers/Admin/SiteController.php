<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Role;
use DB;
use App\Models\Campaigns;

class SiteController extends Controller
{
    public function index()
    {
        $clients = DB::table('role_user')->where('role_id', '=', Role::CLIENT_ROLE_ID)->count();

        return view('admin.site.dashboard', [
            'clients' => $clients,
            'campaigns' => Campaigns::count(),
        ]);
    }

    public function login()
    {
        return view('admin.site.login');
    }
}