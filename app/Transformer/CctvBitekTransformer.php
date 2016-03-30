<?php
/**
 * Created by PhpStorm.
 * User: fzlrhmn
 * Date: 3/15/16
 * Time: 5:25 PM
 */

namespace App\Transformer;

use League\Fractal\TransformerAbstract;
use App\ApiCctvBitekModel;

class CctvBitekTransformer extends TransformerAbstract
{
    /**
     * @param ApiCctvBitekModel $apiCctvBitekModel
     *
     * Return this item object into array
     *
     * @return array
     */
    public function transform( ApiCctvBitekModel $apiCctvBitekModel){

        return [
            'cctv_id'       => (int) $cctv->CCTV_ID,
            'cctv_name'     => $cctv->NAME,
            'address'       => $cctv->ADDRESS,
            'latitude'      => (float) $cctv->LAT,
            'longitude'     => (float) $cctv->LNG,
            'url_feed'      => $cctv->SITE_IP,
        ];
    }
}