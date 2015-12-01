<?php

namespace App\Repositories;

use App;
use App\Repositories\Contracts\AdsRepository;
use FacebookAds\Object\Campaign;
use FacebookAds\Object\Fields\CampaignFields;
use FacebookAds\Object\Values\AdObjectives;
use App\Models\FacebookCampaigns;

class FacebookAdsRepository implements AdsRepository
{
    const API_VERSION = 'v2.5';

    private $config;

    public function __construct()
    {
        $this->config = config('facebook');
    }

    public function createAd(array $data)
    {

    }

    public function saveAd($data)
    {

    }

    /**
     * Create campaign in Facebook
     *
     * @param array $data
     * @return FacebookAds\Object\Campaign
     */
    public function createCampaign(array $data)
    {
        App::make('FacebookAdsAPI');

        $campaign  = new Campaign(null, $this->config['account_id']);
        $campaign->setData([
            CampaignFields::NAME => $data['name'],
            CampaignFields::OBJECTIVE => AdObjectives::LINK_CLICKS,
        ]);

        $campaign->validate()->create();

        return $campaign;
    }

    /**
     * Save campaign in database
     *
     * @param $data
     * @return integer id
     * @throws \Exception
     */
    public function saveCampaign($data)
    {
        if (! $data instanceof Campaign)
            throw new \Exception('Instance of Campaign must be handed, '.gettype($data).' given.');

        $campaign = new FacebookCampaigns;
        $campaign->facebook_parent_id = $data->parentId;
        $campaign->facebook_id = $data->data->id;
        $campaign->facebook_account_id = $data->data->account_id;
        $campaign->objective = $data->data->objective;
        $campaign->is_completed = $data->data->is_completed;
        $campaign->buying_type = $data->data->buying_type;
        $campaign->promoted_object = $data->data->promoted_object;
        $campaign->spend_cap = $data->data->spend_cap;
        $campaign->adlabels = $data->data->adlabels;
        $campaign->start_time = $data->data->start_time;
        $campaign->stop_time = $data->data->stop_time;
        $campaign->configured_status = $data->data->configured_status;
        $campaign->effective_status = $data->data->effective_status;
        $campaign->save();

        return $campaign->id;
    }
}