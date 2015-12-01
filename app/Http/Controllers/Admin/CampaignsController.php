<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaigns;
use Auth;
use App\Http\Requests\CreateCampaignRequest;

class CampaignsController extends Controller
{
    public function index()
    {
        $campaigns = Campaigns::whereRaw(Auth::user()->userIdCondition())->with('adwords')->paginate(3);

        return view('admin.campaigns.index')->with('campaigns', $campaigns);
    }

    public function create()
    {
        return view('admin.campaigns.create');
    }

    public function store(CreateCampaignRequest $request)
    {
        $input = $request->all();

        Campaigns::create($input);

        return redirect()->route('campaigns');
    }
}