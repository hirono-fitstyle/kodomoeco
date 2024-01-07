<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $table = 'operators';
    protected $primarykey = 'operatorNumber';

    protected $fillable = [
        'operatorNumber',
        'operatorPasscode',
        'operatorId',
        'operatorStatus',
        'operatorCategory',
        'oath',
        'corpNumber',
        'operatorName',
        'operatorTitle',
        'representativeLastName',
        'representativeFirstName',
        'operatorZipCode',
        'operatorPrefecture',
        'operatorCity',
        'operatorAddress',
        'operatorAddressSolo',
        'operatorBuildingSolo',
        'operatorRoomNumberSolo',
        'staffDepartment',
        'staffPosision',
        'staffLastName',
        'staffFirstName',
        'staffZipcode',
        'staffPrefecture',
        'staffCity',
        'staffAddress',
        'staffBuilding',
        'staffRoomNumber',
        'staffTel',
        'staffMobile',
        'staffMail',
        'publicProject1',
        'publicProject2',
        'publicProject3',
        'publicBuisiness1',
        'publicBuisiness2',
        'publicBuisiness3',
        'publicBuisiness4',
        'publicBuisiness5',
        'constructionFlag',
        'constructionCategory',
        'constructionCategory2',
        'constructionNumber',
        'realEstateFlag',
        'realEstateCategory',
        'constructionPreNumber',
        'realEstatePreNumber',
        'realEstateNumber',
        'reformFlag',
        'reformAssociation',
        'reformAssociationUrl',
        'publicProjectAbolishFlag1',
        'publicProjectAbolishFlag2',
        'publicProjectAbolishFlag3',
        'recieveMailFlag',
        'privacyPolicyConsent1',
        'privacyPolicyConsent2',
    ];

    /**
     * 所在地の取得
     * 事業者種別によって丁町番地等以下が異なる
     *
     * @var string
     * @return string
     */
    public function getAddress($category) : string {

        $address = $this->operatorPrefecture . $this->operatorCity;
        // 1：法人
        if ($category == 1) {
            $address .= $this->operatorAddress;
        }
        // 2：個人事業主
        if ($category == 2) {
            $address .= $this->operatorAddressSolo . $this->operatorBuildingSolo . $this->operatorRoomNumberSolo;
        }

        return $address;
    }
}
