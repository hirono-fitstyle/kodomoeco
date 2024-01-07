<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * OperatorsテーブルのoperatorStatusを管理
 */
final class OperatorStatus extends Enum
{
    const NEW_REGISTRATION = 0;
    const EDITING = 1;
    const EDIT_COMPLETED = 2;
    const UNDER_REVIEW = 3;
    const REVISION_REQUESTED = 4;
    const REGISTRATION_COMPLETED = 5;
    const REGISTRATION_REJECTED = 6;

    public static function getDescription($value): string
    {
        $description = '';
        switch ($value) {
            case self::NEW_REGISTRATION:
                $description = '新規登録';
                break;
            case self::EDITING:
                $description = '編集中';
                break;
            case self::EDIT_COMPLETED:
                $description = '編集完了';
                break;
            case self::UNDER_REVIEW:
                $description = '審査中';
                break;
            case self::REVISION_REQUESTED:
                $description = '修正依頼';
                break;
            case self::REGISTRATION_COMPLETED:
                $description = '承認済（登録完了）';
                break;
            case self::REGISTRATION_REJECTED:
                $description = '登録却下';
                break;
            default:
                $description = '-';
                break;
        }

        return $description;
    }

    public static function getValue($key): int
    {
        $value = '';
        switch ($key) {
            case '新規登録':
                $value = self::NEW_REGISTRATION;
                break;
            case '編集中':
                $value = self::EDITING;
                break;
            case '編集完了':
                $value = self::EDIT_COMPLETED;
                break;
            case '審査中':
                $value = self::UNDER_REVIEW;
                break;
            case '修正依頼':
                $value = self::REVISION_REQUESTED;
                break;
            case '承認済（登録完了）':
                $value = self::REGISTRATION_COMPLETED;
                break;
            case '登録却下':
                $value = self::REGISTRATION_REJECTED;
                break;
            default:
                $value = '-';
                break;
        }

        return $value;
    }
}
