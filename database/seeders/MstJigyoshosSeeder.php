<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Uuid;

class MstJigyoshosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mst_jigyoshas')->insert([
            [ 'operatorNumber' => 'S000084', 'operatorPasscode' => 'BqjZ2F', 'operatorId' => '600000084', 'operatorCategory' => '1', 'corpNumber' => '8120001059652', 'operatorName' => '積水ハウス株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '仲井', 'representativeFirstName' => '嘉浩', 'operatorZipCode' => '5310076', 'operatorPrefecture' => '大阪府', 'operatorCity' => '大阪市北区', 'operatorAddress' => '大淀中１丁目１番８８号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '経営企画部', 'staffPosision' => 'ＳＰ', 'staffLastName' => '高見', 'staffFirstName' => '輝夫', 'staffZipcode' => '5310076', 'staffPrefecture' => '大阪府', 'staffCity' => '大阪市北区', 'staffAddress' => '大淀中１ー１ー８８', 'staffBuilding' => '梅田スカイビルタワーイースト', 'staffRoomNumber' => '', 'staffTel' => '0664403067', 'staffMobile' => '09093237984', 'staffMail' => 'ttakami@wbr.sekisuihouse.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '5295', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '2', 'realEstatePreNumber' => '15', 'realEstateNumber' => '540', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000190', 'operatorPasscode' => 'x91h00', 'operatorId' => '600000190', 'operatorCategory' => '1', 'corpNumber' => '6120001059662', 'operatorName' => '大和ハウス工業株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '芳井', 'representativeFirstName' => '敬一', 'operatorZipCode' => '5300001', 'operatorPrefecture' => '大阪府', 'operatorCity' => '大阪市北区', 'operatorAddress' => '梅田３丁目３番５号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '住宅事業本部事業統括部', 'staffPosision' => '上席主任', 'staffLastName' => '森', 'staffFirstName' => '晋樹', 'staffZipcode' => '5308241', 'staffPrefecture' => '大阪府', 'staffCity' => '大阪市北区梅田', 'staffAddress' => '３ー３ー５', 'staffBuilding' => '', 'staffRoomNumber' => '', 'staffTel' => '', 'staffMobile' => '08029542622', 'staffMail' => 'shin@daiwahouse.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '5279', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '2', 'realEstatePreNumber' => '15', 'realEstateNumber' => '245', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000278', 'operatorPasscode' => 'Uid6wG', 'operatorId' => '600000278', 'operatorCategory' => '1', 'corpNumber' => '8011101010739', 'operatorName' => '住友不動産株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '仁島', 'representativeFirstName' => '浩順', 'operatorZipCode' => '1600023', 'operatorPrefecture' => '東京都', 'operatorCity' => '新宿区', 'operatorAddress' => '西新宿２丁目４番１号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '企画本部企画部', 'staffPosision' => '部長代理', 'staffLastName' => '奥田', 'staffFirstName' => '啓介', 'staffZipcode' => '1630820', 'staffPrefecture' => '東京都', 'staffCity' => '新宿区', 'staffAddress' => '西新宿新宿ＮＳビル１９階', 'staffBuilding' => '', 'staffRoomNumber' => '', 'staffTel' => '0333462342', 'staffMobile' => '', 'staffMail' => 'okuda.keisuke@sumitomo-rd.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '004638', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '02', 'realEstatePreNumber' => '16', 'realEstateNumber' => '000038', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000284', 'operatorPasscode' => 'h12j96', 'operatorId' => '600000284', 'operatorCategory' => '1', 'corpNumber' => '9120901032501', 'operatorName' => 'パナソニックリフォーム株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '栄', 'representativeFirstName' => '克浩', 'operatorZipCode' => '5600083', 'operatorPrefecture' => '大阪府', 'operatorCity' => '豊中市', 'operatorAddress' => '新千里西町１丁目１番４号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '営業推進部', 'staffPosision' => '統括主幹', 'staffLastName' => '向家', 'staffFirstName' => '博', 'staffZipcode' => '5608543', 'staffPrefecture' => '大阪府', 'staffCity' => '豊中市', 'staffAddress' => '新千里西町１丁目一番四号', 'staffBuilding' => '', 'staffRoomNumber' => '', 'staffTel' => '0668343823', 'staffMobile' => '08092466828', 'staffMail' => 'mukoya.hiroshi@panasonic-homes.com', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '0', 'publicBuisiness2' => '0', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '25042', 'realEstateFlag' => '0', 'realEstateCategory' => '', 'constructionPreNumber' => '30', 'realEstatePreNumber' => '', 'realEstateNumber' => '', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000400', 'operatorPasscode' => 'ijZBz2', 'operatorId' => '600000400', 'operatorCategory' => '1', 'corpNumber' => '3011101001453', 'operatorName' => '旭化成ホームズ株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '川畑', 'representativeFirstName' => '文俊', 'operatorZipCode' => '1010051', 'operatorPrefecture' => '東京都', 'operatorCity' => '千代田区', 'operatorAddress' => '神田神保町１丁目１０５番地', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => 'マーケティング本部営業推進部', 'staffPosision' => '', 'staffLastName' => '小松', 'staffFirstName' => '建人', 'staffZipcode' => '1018101', 'staffPrefecture' => '東京都', 'staffCity' => '千代田区', 'staffAddress' => '神田神保町１ー１０５', 'staffBuilding' => '神保町三井ビルディング６階', 'staffRoomNumber' => '', 'staffTel' => '0368993110', 'staffMobile' => '08013511438', 'staffMail' => 'neweco@shigyo.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '9454', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '3', 'realEstatePreNumber' => '11', 'realEstateNumber' => '2739', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000586', 'operatorPasscode' => 'B301Qh', 'operatorId' => '600000586', 'operatorCategory' => '1', 'corpNumber' => '3240001041231', 'operatorName' => '株式会社エディオン', 'operatorTitle' => '代表取締役', 'representativeLastName' => '久保', 'representativeFirstName' => '允誉', 'operatorZipCode' => '7300031', 'operatorPrefecture' => '広島県', 'operatorCity' => '広島市中区', 'operatorAddress' => '紙屋町２丁目１番１８号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => 'ＥＬＳ統括部ＥＬＳ企画部', 'staffPosision' => '', 'staffLastName' => '酒居', 'staffFirstName' => '尚巳', 'staffZipcode' => '5300005', 'staffPrefecture' => '大阪府', 'staffCity' => '大阪市北区', 'staffAddress' => '中之島２ー３ー３３', 'staffBuilding' => '大阪三井物産ビル', 'staffRoomNumber' => '７階', 'staffTel' => '', 'staffMobile' => '08036674660', 'staffMail' => 'h.sakai.sg@edion.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '0', 'publicBuisiness2' => '0', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '0', 'constructionCategory' => '', 'constructionCategory2' => '', 'constructionNumber' => '', 'realEstateFlag' => '0', 'realEstateCategory' => '', 'constructionPreNumber' => '', 'realEstatePreNumber' => '', 'realEstateNumber' => '', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000646', 'operatorPasscode' => '127PwM', 'operatorId' => '600000646', 'operatorCategory' => '1', 'corpNumber' => '9180001052824', 'operatorName' => 'トヨタホーム株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '後藤', 'representativeFirstName' => '裕司', 'operatorZipCode' => '4610001', 'operatorPrefecture' => '愛知県', 'operatorCity' => '名古屋市東区', 'operatorAddress' => '泉１丁目２３番２２号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '営業統括部', 'staffPosision' => '', 'staffLastName' => '中村', 'staffFirstName' => 'まどか', 'staffZipcode' => '4610001', 'staffPrefecture' => '愛知県', 'staffCity' => '名古屋市東区', 'staffAddress' => '泉１丁目２３番２２号', 'staffBuilding' => '', 'staffRoomNumber' => '', 'staffTel' => '', 'staffMobile' => '08076574227', 'staffMail' => 'madoka.nakamura@toyotahome.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '0', 'constructionCategory' => '', 'constructionCategory2' => '', 'constructionNumber' => '', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '', 'realEstatePreNumber' => '4', 'realEstateNumber' => '6467', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000732', 'operatorPasscode' => '8a1zRZ', 'operatorId' => '600000732', 'operatorCategory' => '1', 'corpNumber' => '5011101035813', 'operatorName' => 'ミサワホーム株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '作尾', 'representativeFirstName' => '徹也', 'operatorZipCode' => '1600023', 'operatorPrefecture' => '東京都', 'operatorCity' => '新宿区', 'operatorAddress' => '西新宿２丁目４番１号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '営業企画部', 'staffPosision' => '', 'staffLastName' => '鈴木', 'staffFirstName' => '僚太', 'staffZipcode' => '1630833', 'staffPrefecture' => '東京都', 'staffCity' => '新宿区西新宿', 'staffAddress' => '二丁目４番１号', 'staffBuilding' => '', 'staffRoomNumber' => '', 'staffTel' => '0333498163', 'staffMobile' => '', 'staffMail' => 'Ryota_Suzuki@home.misawa.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '22353', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '29', 'realEstatePreNumber' => '3', 'realEstateNumber' => '7576', 'reformFlag' => '1', 'reformAssociation' => '03', 'reformAssociationUrl' => 'https://www.renovation.or.jp/a', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S000840', 'operatorPasscode' => 'mfwW28', 'operatorId' => '600000840', 'operatorCategory' => '1', 'corpNumber' => '4010001090011', 'operatorName' => '住友林業株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '光吉', 'representativeFirstName' => '敏郎', 'operatorZipCode' => '1000004', 'operatorPrefecture' => '東京都', 'operatorCity' => '千代田区', 'operatorAddress' => '大手町１丁目３番２号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '住宅企画部', 'staffPosision' => '主任', 'staffLastName' => '関', 'staffFirstName' => '俊彦', 'staffZipcode' => '1008270', 'staffPrefecture' => '東京都', 'staffCity' => '千代田区', 'staffAddress' => '大手町１丁目３ー２', 'staffBuilding' => '経団連会館', 'staffRoomNumber' => '', 'staffTel' => '0332143399', 'staffMobile' => '', 'staffMail' => 'SEKI_toshihiko@star.sfc.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '4237', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '2', 'realEstatePreNumber' => '14', 'realEstateNumber' => '687', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ],
            [ 'operatorNumber' => 'S001395', 'operatorPasscode' => 'k7z1J0', 'operatorId' => '600001395', 'operatorCategory' => '1', 'corpNumber' => '2011101020537', 'operatorName' => '三井ホーム株式会社', 'operatorTitle' => '代表取締役', 'representativeLastName' => '池田', 'representativeFirstName' => '明', 'operatorZipCode' => '1600023', 'operatorPrefecture' => '東京都', 'operatorCity' => '新宿区', 'operatorAddress' => '西新宿２丁目１番１号', 'operatorAddressSolo' => '', 'operatorBuildingSolo' => '', 'operatorRoomNumberSolo' => '', 'staffDepartment' => '営業推進部', 'staffPosision' => '', 'staffLastName' => 'タカノ', 'staffFirstName' => 'スズサ', 'staffZipcode' => '1630453', 'staffPrefecture' => '東京都', 'staffCity' => '新宿区', 'staffAddress' => '西新宿２ー１ー１', 'staffBuilding' => '新宿三井ビル５３Ｆ', 'staffRoomNumber' => '', 'staffTel' => '0333464847', 'staffMobile' => '08098985927', 'staffMail' => 's-takano@mitsuihome.co.jp', 'publicProject1' => '1', 'publicProject2' => '1', 'publicProject3' => '1', 'publicBuisiness1' => '1', 'publicBuisiness2' => '1', 'publicBuisiness3' => '1', 'publicBuisiness4' => '0', 'publicBuisiness5' => '0', 'constructionFlag' => '1', 'constructionCategory' => '1', 'constructionCategory2' => '2', 'constructionNumber' => '8030', 'realEstateFlag' => '1', 'realEstateCategory' => '00', 'constructionPreNumber' => '30', 'realEstatePreNumber' => '12', 'realEstateNumber' => '2531', 'reformFlag' => '0', 'reformAssociation' => '', 'reformAssociationUrl' => '', 'recieveMailFlag' => '1' ]
        ]);
    }
}
