<?php

namespace App\Repositories;

use App\Repositories\Contracts\AdsRepository;
use App;
use App\Models\AdwordsCampaigns;
use App\Models\AdwordsBudgets;
use App\Models\AdWordsAds;

class GoogleAdsRepository implements AdsRepository
{
    const ADWORDS_VERSION = 'v201509';

    /**
     * Create ad in AdWords
     *
     * @param array $data
     * @return \AdGroupAd
     */
    public function createAd(array $data)
    {
        $user = App::make('AdWordsUser');

        // Get the service, which loads the required classes.
        $adGroupAdService = $user->GetService('AdGroupAdService', self::ADWORDS_VERSION);

        // Create text ad.
        $textAd = new \TextAd();
        $textAd->headline = $data['title'];
        $textAd->description1 = $data['description1'];
        $textAd->description2 = $data['description2'];
        $textAd->displayUrl = $data['display_url'];
        $textAd->finalUrls = [$data['final_url']];

        // Create ad group ad.
        $adGroupAd = new \AdGroupAd();
        $adGroupAd->adGroupId = $data['group_id'];
        $adGroupAd->ad = $textAd;

        // Set additional settings (optional).
        $adGroupAd->status = 'PAUSED';

        // Create operation.
        $operation = new \AdGroupAdOperation();
        $operation->operand = $adGroupAd;
        $operation->operator = 'ADD';

        // Make the mutate request.
        $result = $adGroupAdService->mutate($operation);

        return $result->value[0];
    }

    /**
     * Save ad in database
     *
     * @param $data
     * @return integer id
     */
    public function saveAd($data)
    {
        $ad = new AdWordsAds;
        $ad->adwords_id = $data->ad->id;
        $ad->title = $data->ad->headLine;
        $ad->description1 = $data->ad->description1;
        $ad->description2 = $data->ad->description2;
        $ad->display_url = $data->ad->displayUrl;
        $ad->final_url = $data->ad->finalUrl;
        $ad->status = $data->status;
        $ad->group_id = $data->approvalStatus;
        $ad->approvalStatus = $data->adGroupId;
        $ad->save();

        return $ad->id;
    }

    /**
     * Create campaign in adwords
     *
     * @param array $data
     * @return \Campaign
     */
    public function createCampaign(array $data)
    {
        $user = App::make('AdWordsUser');

        // Get the BudgetService, which loads the required classes.
        $budgetService = $user->GetService('BudgetService', self::ADWORDS_VERSION);

        // Create the shared budget (required).
        $budget = new \Budget();
        $budget->name = 'Budget for campaign "'.$data['name'].'"';
        $budget->period = 'DAILY';
        $budget->amount = new \Money($data['amount']);
        $budget->deliveryMethod = 'STANDARD';

        $operations = array();

        // Create operation.
        $operation = new \BudgetOperation();
        $operation->operand = $budget;
        $operation->operator = 'ADD';
        $operations[] = $operation;

        // Make the mutate request.
        $result = $budgetService->mutate($operations);
        $budget = $result->value[0];

        // Get the CampaignService, which loads the required classes.
        $campaignService = $user->GetService('CampaignService', self::ADWORDS_VERSION);

        // Create campaign.
        $campaign = new \Campaign();
        $campaign->name = $data['name'];
        $campaign->advertisingChannelType = 'SEARCH';

        // Set shared budget (required).
        $campaign->budget = new \Budget();
        $campaign->budget->budgetId = $budget->budgetId;

        // Set bidding strategy (required).
        $biddingStrategyConfiguration = new \BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->biddingStrategyType = 'MANUAL_CPC';

        // You can optionally provide a bidding scheme in place of the type.
        $biddingScheme = new \ManualCpcBiddingScheme();
        $biddingScheme->enhancedCpcEnabled = false;
        $biddingStrategyConfiguration->biddingScheme = $biddingScheme;

        $campaign->biddingStrategyConfiguration = $biddingStrategyConfiguration;

        // Set network targeting (optional).
        $networkSetting = new \NetworkSetting();
        $networkSetting->targetGoogleSearch = true;
        $networkSetting->targetSearchNetwork = true;
        $networkSetting->targetContentNetwork = true;
        $campaign->networkSetting = $networkSetting;

        // Set additional settings (optional).
        $campaign->status = 'PAUSED';
        $campaign->startDate = date('Ymd', strtotime('+1 day'));
        $campaign->endDate = date('Ymd', strtotime('+1 month'));
        $campaign->adServingOptimizationStatus = 'ROTATE';

        // Set frequency cap (optional).
        $frequencyCap = new \FrequencyCap();
        $frequencyCap->impressions = 5;
        $frequencyCap->timeUnit = 'DAY';
        $frequencyCap->level = 'ADGROUP';
        $campaign->frequencyCap = $frequencyCap;

        // Set advanced location targeting settings (optional).
        $geoTargetTypeSetting = new \GeoTargetTypeSetting();
        $geoTargetTypeSetting->positiveGeoTargetType = 'DONT_CARE';
        $geoTargetTypeSetting->negativeGeoTargetType = 'DONT_CARE';
        $campaign->settings[] = $geoTargetTypeSetting;

        // Create operation.
        $operation = new \CampaignOperation();
        $operation->operand = $campaign;
        $operation->operator = 'ADD';

        // Make the mutate request.
        $result = $campaignService->mutate($operation);

        return $result->value[0];
    }

    /**
     * Create campaign in AdWords
     *
     * @param $data
     * @return \Campaign
     * @throws \Exception
     */
    public function saveCampaign($data)
    {
        if (! $data instanceof \Campaign)
            throw new \Exception('Instance of \Campaign must be handed, '.gettype($data).' given.');

        $adGroup = $this->createAdGroup([
            'campaign_id' => $data->id,
            'amount' => $data->budget->amount->microAmount
        ]);

        $budget = new AdwordsBudgets;
        $budget->budgetId = $data->budget->budgetId;
        $budget->name = $data->budget->name;
        $budget->period = $data->budget->period;
        $budget->amount = $data->budget->amount->microAmount;
        $budget->deliveryMethod = $data->budget->deliveryMethod;
        $budget->isExplicitlyShared = $data->budget->isExplicitlyShared;
        $budget->status = $data->budget->status;
        $budget->save();

        $campaign = new AdwordsCampaigns;
        $campaign->adwords_id = $data->id;
        $campaign->adwords_id = $adGroup->id;
        $campaign->name = $data->name;
        $campaign->status = $data->status;
        $campaign->servingStatus = $data->servingStatus;
        $campaign->startDate = $data->startDate;
        $campaign->endDate = $data->endDate;
        $campaign->budget_id = $budget->id;
        $campaign->adServingOptimizationStatus = $data->adServingOptimizationStatus;
        $campaign->advertisingChannelType = $data->advertisingChannelType;
        $campaign->save();

        return $campaign->id;
    }

    /**
     * Create ad group in AdWords
     *
     * @param $data
     * @return \AdGroup
     */
    public function createAdGroup($data)
    {
        $user = App::make('AdWordsUser');

        // Get the service, which loads the required classes.
        $adGroupService = $user->GetService('AdGroupService', self::ADWORDS_VERSION);

        // Create ad group.
        $adGroup = new \AdGroup();
        $adGroup->campaignId = $data['campaign_id'];
        $adGroup->name = isset($data['group_name']) ? $data['group_name'] : 'Main Group';

        // Set bids (required).
        $bid = new \CpcBid();
        $bid->bid =  new \Money($data['amount']);
        $biddingStrategyConfiguration = new \BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->bids[] = $bid;
        $adGroup->biddingStrategyConfiguration = $biddingStrategyConfiguration;

        // Set additional settings (optional).
        $adGroup->status = 'ENABLED';

        // Targeting restriction settings - these settings only affect serving
        // for the Display Network.
        $targetingSetting = new \TargetingSetting();
        // Restricting to serve ads that match your ad group placements.
        // This is equivalent to choosing "Target and bid" in the UI.
        $targetingSetting->details[] =
            new \TargetingSettingDetail('PLACEMENT', false);
        // Using your ad group verticals only for bidding. This is equivalent
        // to choosing "Bid only" in the UI.
        $targetingSetting->details[] =
            new \TargetingSettingDetail('VERTICAL', true);
        $adGroup->settings[] = $targetingSetting;

        // Create operation.
        $operation = new \AdGroupOperation();
        $operation->operand = $adGroup;
        $operation->operator = 'ADD';


        // Make the mutate request.
        $result = $adGroupService->mutate($operation);

        return $result->value[0];
    }
}