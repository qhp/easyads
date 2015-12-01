<?php

namespace App\Http\Controllers;

use App;
use App\Repositories\GoogleAdsRepository;
use App\Repositories\FacebookAdsRepository;

class SiteController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function test(GoogleAdsRepository $repository, FacebookAdsRepository $fbRepository)
    {
        #$campaign = $repository->addCampaign(['name'=>'Test Campaign 10', 'amount'=>50000000]);
        #echo 'AdWords campaign id: '.$repository->saveCampaign($campaign);

        #$fbCampaign = $fbRepository->addCampaign(['name'=>'Test FB campaign 1']);
        #dd($fbCampaign);

        #dd($repository->createAdGroup(368000420));

        $result = $repository->createAd(['title' => 'Test ad 2', 'description1' => 'description one', 'description2' => 'description two', 'display_url' => 'example.com', 'final_url' => 'http://example.com/iphone', 'group_id' => '25281565220']);
        $repository->saveAd($result);
    }
}