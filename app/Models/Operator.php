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

}
