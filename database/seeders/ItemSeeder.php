<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Hủ Tiếu Bò Kho',
                'name_kana' => 'フーティウ・ボーコー',
                'campany_name' => 'VIFON',
                'image_url' => 'storage/item_image/1.jpg',
                'pr' => "Hu Tieu（フーティウ）はベトナム南部を中心に食べられている米麺で、半乾燥させて作るため、フォーよりもコシがあります。\n Bo Kho（ボーコー）はベトナム風ビーフシチューのことで、ベトナムではフランスパンと一緒に食べたり、麺を入れて食べたりします。\n 中国とフランスの食文化の影響を受けたベトナム。中国出身の移民から伝えられたといわれるフーティウと、フランスから伝わったビーフシチューを一度に楽しめるフーティウ・ボーコーは歴史的背景を感じさせる麺です。",
                'price' => 5000,
                'category_id' => 1,
            ],
            [
                'name' => 'Hao Hao',
                'name_kana' => 'ハオハオ',
                'campany_name' => 'Acecock',
                'image_url' => 'storage/item_image/2.jpg',
                'pr' => "ベトナムで一番人気があるインスタント麺といえば、1995年からベトナムでインスタント麺の生産・販売を開始したVINA ACECOOK（エースコックベトナム株式会社）の「Hao Hao（ハオハオ）」シリーズ。",
                'price' => 4000,
                'category_id' => 1,
            ],
            [
                'name' => 'MILKET',
                'name_kana' => 'ミリケット',
                'campany_name' => 'MILKET',
                'image_url' => 'storage/item_image/3.jpg',
                'pr' => "ピリ辛エビ&チキン風味のベトナムのインスタントヌードルです。\n ミリケットはエビのイラストとクラフト紙のパッケージで有名な1970年前半からインスタント麺を製造販売しているベトナムの老舗インスタント麺メーカーです。",
                'price' => 3000,
                'category_id' => 1,
            ],
            [
                'name' => 'Phở gà',
                'name_kana' => 'フォー・ガー',
                'campany_name' => 'VIFON',
                'image_url' => 'storage/item_image/4.jpg',
                'pr' => "フォーガーの「ガー」とは鶏の意味で、鶏ガラを使ってとった出汁に塩とヌクマム（魚醤）で味を付けた、あっさり味のスープ。\n そこに蒸し鶏や茹で鶏をのせて食べます。",
                'price' => 5000,
                'category_id' => 1,
            ],
            [
                'name' => 'Phở bò',
                'name_kana' => 'フォー・ボー',
                'campany_name' => 'VIFON',
                'image_url' => 'storage/item_image/5.jpg',
                'pr' => "フォーボーーの「ボー」とは牛の意味で、牛肉を使ってとった出汁に塩とヌクマム（魚醤）で味を付けた、こってり味のスープ。そこに牛肉をのせて食べます。",
                'price' => 5000,
                'category_id' => 1,
            ],
            [
                'name' => 'Hao Hao',
                'name_kana' => 'ハオハオ',
                'campany_name' => 'Acecock',
                'image_url' => 'storage/item_image/2.jpg',
                'pr' => "ベトナムで一番人気があるインスタント麺といえば、1995年からベトナムでインスタント麺の生産・販売を開始したVINA ACECOOK（エースコックベトナム株式会社）の「Hao Hao（ハオハオ）」シリーズ。",
                'price' => 4000,
                'category_id' => 1,
            ],
            [
                'name' => 'lá cải',
                'name_kana' => 'からし菜',
                'campany_name' => 'vegetable',
                'image_url' => 'storage/item_image/7.jpg',
                'pr' => "かすかに苦みがあり、スープや蒸し物、鶏肉料理、バインセオを巻くときに使われます。",
                'price' => 3000,
                'category_id' => 4,
            ],
            [
                'name' => 'Diếp cá',
                'name_kana' => 'ドクダミ',
                'campany_name' => 'vegetable',
                'image_url' => 'storage/item_image/8.jpg',
                'pr' => "薬効がありクセが強いが、ベトナムでは生春巻をはじめ、風味づけに頻繁に使われています。",
                'price' => 4000,
                'category_id' => 4,
            ],
            [
                'name' => 'Nước mắm',
                'name_kana' => 'ヌクマム',
                'campany_name' => 'CHIN-SU',
                'image_url' => 'storage/item_image/9.jpg',
                'pr' => "小魚を発酵させた魚醤。タイのナンプラーと似た味。蒸した魚にちょっぴりつけたりして食べると美味しい。",
                'price' => 25000,
                'category_id' => 3,
            ],
            [
                'name' => 'tương ớt',
                'name_kana' => 'チリソース',
                'campany_name' => 'chorimex',
                'image_url' => 'storage/item_image/11.jpg',
                'pr' => "唐辛子入りの辛い調味料。フォーや生春巻きにつけて食べる。",
                'price' => 15000,
                'category_id' => 3,
            ],
            [
                'name' => 'Tương đen',
                'name_kana' => 'トゥオンデン',
                'campany_name' => 'chorimex',
                'image_url' => 'storage/item_image/12.jpg',
                'pr' => "味噌のようなコクと甘みがあり、中華料理の甜麺醤（テンメンジャン）によく似ています。日本人からはベトナムの「甘味噌ダレ」とも呼ばれており、比較的親しみやすい調味料です。",
                'price' => 5000,
                'category_id' => 3,
            ],
            [
                'name' => 'Satế Tôm',
                'name_kana' => 'サテトム',
                'campany_name' => 'Satế Tôm',
                'image_url' => 'storage/item_image/14.jpg',
                'pr' => "ニンニク、唐辛子、レモングラスを混ぜたエビ風味の「食べるラー油」で、濃厚な旨味と刺激的な辛さが病みつきになる美味しさ。",
                'price' => 45000,
                'category_id' => 3,
            ],
            [
                'name' => 'sữa đặc',
                'name_kana' => 'コンデスミルク',
                'campany_name' => 'VINAMILK',
                'image_url' => 'storage/item_image/13.jpg',
                'pr' => "ベトナムコーヒー、ベトナムのぜんざい「チェー」、フルーツと一緒にミキサーにかけて作るクリーミーで濃厚なベトナムのスムージー「シントー」のほかにも、フルーツの甘みを足すためにかけたりします。",
                'price' => 50000,
                'category_id' => 2,
            ],
            [
                'name' => 'Mắm tôm',
                'name_kana' => 'マムトム',
                'campany_name' => 'VIFON',
                'image_url' => 'storage/item_image/14.jpg',
                'pr' => "小エビを発酵させて作る、いわばエビの塩辛のようなもので、ドロッとした紫色のペースト状になっています。\nベトナム人からは好まれますが、外国人には敬遠されがちなローカル調味料",
                'price' => 550,
                'category_id' => 3,
            ],
            [
                'name' => 'Trà sen',
                'name_kana' => 'ハス茶',
                'campany_name' => 'Hoa sen',
                'image_url' => 'storage/item_image/15.jpg',
                'pr' => "ベトナムを代表するお茶であるハス茶は、文字通り蓮から作られたお茶を指します。首都ハノイにある西湖で収穫されたハス茶は最高品質と言われており、花盛りの6月には美しいピンク色の蓮が咲き誇ります。",
                'price' => 250000,
                'category_id' => 2,
            ],
            [
                'name' => 'cà phê',
                'name_kana' => 'コーヒー',
                'campany_name' => 'Trung Nguyen',
                'image_url' => 'storage/item_image/16.jpg',
                'pr' => "世界生産第2位のベトナム。深炒りし、粗めに挽いたコーヒーを、あらかじめコンデンスミルクを入れたカップの上に載せたフィルターに入れ、湯を注ぎ、濃いコーヒーがゆっくりとしたたり落ちるのを待って、かき混ぜるという独特の方法で飲まれています。",
                'price' => 65000,
                'category_id' => 2,
            ],

        ]);
    }
}
