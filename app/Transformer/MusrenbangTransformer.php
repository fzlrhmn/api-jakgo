<?php
/**
 * Created by PhpStorm.
 * User: fzlrhmn
 * Date: 3/15/16
 * Time: 11:50 PM
 */

namespace App\Transformer;

use App\MusrenbangModel;
use League\Fractal\TransformerAbstract;

class MusrenbangTransformer extends TransformerAbstract
{
    /**
     * @param MusrenbangModel $musrenbangModel
     * @return array
     */
    public function transform( MusrenbangModel $musrenbangModel){
        return [
            'id' => (int) $musrenbangModel->id,
            'id_masalah' => (int) $musrenbangModel->id,
            'skpd_pengusul' => [
                'id_skpd' => (int) $musrenbangModel->pengusulSKPDID,
                'lokasi' => (int) $musrenbangModel->lokasiSKPDPengusul,
                'nama' => $musrenbangModel->pengusulSKPD,
            ],
            'skpd_tujuan' => [
                'id_skpd' => (int) $musrenbangModel->tujuanSKPDID,
                'lokasi' => (int) $musrenbangModel->lokasiSKPDTujuan,
                'nama' => $musrenbangModel->tujuanSKPD
            ],
            'lokasi' => [
                'alamat' => $musrenbangModel->alamatLokasi,
                'latitude' => (float) $musrenbangModel->lat,
                'longitude' => (float) $musrenbangModel->lng,
            ],
            'masalah' => $musrenbangModel->masalah,
            'usulan_solusi' => $musrenbangModel->usulanSolusi,
            'volume' => (int) $musrenbangModel->volume,
            'satuan' => $musrenbangModel->satuan,
            'nilai_anggaran' => $musrenbangModel->nilaiAnggaran,

        ];
    }
}