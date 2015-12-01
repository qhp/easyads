<?php

namespace App\Repositories\Contracts;

interface AdsRepository
{
    /**
     * Add campaign to ads service
     *
     * @param array $data
     * @return mixed campaign data
     */
    public function createCampaign(array $data);

    /**
     * Save campaign to database
     *
     * @param $data
     * @return int campaign id
     */
    public function saveCampaign($data);

    /**
     * Add ad to ads service
     *
     * @param array $data
     * @return mixed ad data
     */
    public function createAd(array $data);

    /**
     * Save ad to database
     *
     * @param $data
     * @return int ad id
     */
    public function saveAd($data);
}