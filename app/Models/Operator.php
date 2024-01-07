<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    protected $table = 'operators';
    protected $primarykey = 'operator_number';

    protected $fillable = [
        'operator_number',
        'operator_passcode',
        'operator_id',
        'operator_status',
        'operator_category',
        'oath',
        'corp_number',
        'operator_name',
        'operator_title',
        'representative_last_name',
        'representative_first_name',
        'operator_zipCode',
        'operator_prefecture',
        'operator_city',
        'operator_address',
        'operator_address_solo',
        'operator_building_solo',
        'operator_roomNumber_solo',
        'staff_department',
        'staff_posision',
        'staff_last_name',
        'staff_first_name',
        'staff_zipcode',
        'staff_prefecture',
        'staff_city',
        'staff_address',
        'staff_building',
        'staff_room_number',
        'staff_tel',
        'staff_mobile',
        'staff_mail',
        'public_project1',
        'public_project2',
        'public_project3',
        'public_buisiness1',
        'public_buisiness2',
        'public_buisiness3',
        'public_buisiness4',
        'public_buisiness5',
        'construction_flag',
        'construction_category',
        'construction_category2',
        'construction_number',
        'realE_state_flag',
        'real_Estate_category',
        'construction_pre_number',
        'real_estate_pre_number',
        'real_estate_number',
        'reform_flag',
        'reform_association',
        'reform_associationUrl',
        'public_project_abolish_flag1',
        'public_project_abolish_flag2',
        'public_project_abolish_flag3',
        'recieve_mail_flag',
        'privacy_policy_consent1',
        'privacy_policy_consent2',
    ];

    /**
     * 所在地の取得
     * 事業者種別によって丁町番地等以下が異なる
     *
     * @var string
     * @return string
     */
    public function getAddress($category) : string {

        $address = $this->operator_prefecture . $this->operator_city;
        // 1：法人
        if ($category == 1) {
            $address .= $this->operator_address;
        }
        // 2：個人事業主
        if ($category == 2) {
            $address .= $this->operator_address_solo . $this->operator_building_solo . $this->operator_room_number_solo;
        }

        return $address;
    }
}
