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
                'image_url' => 'https://cdn.tgdd.vn/Products/Images/2965/80160/bhx/hu-tieu-nhip-song-vi-bo-kho-70g-2-700x467.jpg',
                'pr' => 'Hu Tieu（フーティウ）はベトナム南部を中心に食べられている米麺で、半乾燥させて作るため、フォーよりもコシがあります。Bo Kho（ボーコー）はベトナム風ビーフシチューのことで、ベトナムではフランスパンと一緒に食べたり、麺を入れて食べたりします。中国とフランスの食文化の影響を受けたベトナム。中国出身の移民から伝えられたといわれるフーティウと、フランスから伝わったビーフシチューを一度に楽しめるフーティウ・ボーコーは歴史的背景を感じさせる麺です。',
                'price' => 100,
                'category_id' => '',
            ],
            [
                'name' => 'Hao Hao',
                'name_kana' => 'ハオハオ',
                'campany_name' => 'Acecock',
                'image_url' => 'https://nikusen-internationalstore.jp/wp-content/uploads/2021/04/mi-hao-hao-tom-chua-cay-goi-75g-201912051022208226-1.jpg',
                'pr' => 'ベトナムで一番人気があるインスタント麺といえば、1995年からベトナムでインスタント麺の生産・販売を開始したVINA ACECOOK（エースコックベトナム株式会社）の「Hao Hao（ハオハオ）」シリーズ。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'MILKET',
                'name_kana' => 'ミリケット',
                'campany_name' => 'MILKET',
                'image_url' => 'https://item-shopping.c.yimg.jp/i/n/ange-yokohama_56369',
                'pr' => 'ピリ辛エビ&チキン風味のベトナムのインスタントヌードルです。ミリケットはエビのイラストとクラフト紙のパッケージで有名な1970年前半からインスタント麺を製造販売しているベトナムの老舗インスタント麺メーカーです。',
                'price' => 30,
                'category_id' => '',
            ],
            [
                'name' => 'Phở gà',
                'name_kana' => 'フォー・ガー',
                'campany_name' => 'VIFON',
                'image_url' => 'https://item-shopping.c.yimg.jp/i/n/takada105-shop_20210821021011913636331',
                'pr' => 'フォーガーの「ガー」とは鶏の意味で、鶏ガラを使ってとった出汁に塩とヌクマム（魚醤）で味を付けた、あっさり味のスープ。そこに蒸し鶏や茹で鶏をのせて食べます。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'Phở bò',
                'name_kana' => 'フォー・ボー',
                'campany_name' => 'VIFON',
                'image_url' => 'https://item-shopping.c.yimg.jp/i/n/kuraoka-sutoa_20210920051927-00575',
                'pr' => 'フォーボーーの「ボー」とは牛の意味で、牛肉を使ってとった出汁に塩とヌクマム（魚醤）で味を付けた、こってり味のスープ。そこに牛肉をのせて食べます。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'Hao Hao',
                'name_kana' => 'ハオハオ',
                'campany_name' => 'Acecock',
                'image_url' => 'https://gucci-vietnam.com/wp-content/uploads/2020/03/1583673300-scaled.jpg',
                'pr' => 'ベトナムで一番人気があるインスタント麺といえば、1995年からベトナムでインスタント麺の生産・販売を開始したVINA ACECOOK（エースコックベトナム株式会社）の「Hao Hao（ハオハオ）」シリーズ。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'lá cải',
                'name_kana' => 'からし菜',
                'campany_name' => 'vegetable',
                'image_url' => 'https://thucphamdongxanh.com/wp-content/uploads/2019/09/C%C3%A1ch-l%C3%A0m-th%E1%BB%8Bt-b%C3%B2-cu%E1%BB%91n-l%C3%A1-c%E1%BA%A3i-b%E1%BA%B9-xanh-nhanh-g%E1%BB%8Dn-l%E1%BA%B9-3.jpg',
                'pr' => 'かすかに苦みがあり、スープや蒸し物、鶏肉料理、バインセオを巻くときに使われます。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'Diếp cá',
                'name_kana' => 'ドクダミ',
                'campany_name' => 'vegetable',
                'image_url' => 'https://vinmec-prod.s3.amazonaws.com/images/20201118_142647_218113_rau-diep-ca-chua-nhie.max-800x800.jpg',
                'pr' => '薬効がありクセが強いが、ベトナムでは生春巻をはじめ、風味づけに頻繁に使われています。',
                'price' => 70,
                'category_id' => '',
            ],
            [
                'name' => 'Nước mắm',
                'name_kana' => 'ヌクマム',
                'campany_name' => 'CHIN-SU',
                'image_url' => 'https://vietmartjp.com/wp-content/uploads/2020/09/nuoc-mam-nam-ngu-750ml-gia-vi-viet-o-nhat-vietmart.jpg',
                'pr' => '小魚を発酵させた魚醤。タイのナンプラーと似た味。蒸した魚にちょっぴりつけたりして食べると美味しい。',
                'price' => 250,
                'category_id' => '',
            ],
            [
                'name' => 'tương ớt',
                'name_kana' => 'チリソース',
                'campany_name' => 'chorimex',
                'image_url' => 'https://vietmartjp.com/wp-content/uploads/2020/09/tuong-ot-chua-ngot-cholimex-gia-vi-viet-o-nhat-vietmart.jpg',
                'pr' => '唐辛子入りの辛い調味料。フォーや生春巻きにつけて食べる。',
                'price' => 150,
                'category_id' => '',
            ],
            [
                'name' => 'Tương đen',
                'name_kana' => 'トゥオンデン',
                'campany_name' => 'chorimex',
                'image_url' => 'https://www.tnkjapan.com/blog/wp-content/uploads/2020/06/4988b57d2ffdc73224f5acdf91611103.jpg',
                'pr' => '味噌のようなコクと甘みがあり、中華料理の甜麺醤（テンメンジャン）によく似ています。日本人からはベトナムの「甘味噌ダレ」とも呼ばれており、比較的親しみやすい調味料です。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'Satế Tôm',
                'name_kana' => 'サテトム',
                'campany_name' => 'Satế Tôm',
                'image_url' => 'https://www.tnkjapan.com/blog/wp-content/uploads/2020/06/062bce94960740a9edea4c174682c8bc.jpg',
                'pr' => 'ニンニク、唐辛子、レモングラスを混ぜたエビ風味の「食べるラー油」で、濃厚な旨味と刺激的な辛さが病みつきになる美味しさ。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'sữa đặc',
                'name_kana' => 'コンデスミルク',
                'campany_name' => 'VINAMILK',
                'image_url' => 'https://www.tirakita.com/food3/Photos/srv_spc_111b.jpg',
                'pr' => 'ベトナムコーヒー、ベトナムのぜんざい「チェー」、フルーツと一緒にミキサーにかけて作るクリーミーで濃厚なベトナムのスムージー「シントー」のほかにも、フルーツの甘みを足すためにかけたりします。',
                'price' => 50,
                'category_id' => '',
            ],
            [
                'name' => 'Mắm tôm',
                'name_kana' => 'マムトム',
                'campany_name' => 'VIFON',
                'image_url' => 'https://www.tnkjapan.com/blog/wp-content/uploads/2020/06/cf41cf911d840ecfeca3ed6efab38041.jpg',
                'pr' => '小エビを発酵させて作る、いわばエビの塩辛のようなもので、ドロッとした紫色のペースト状になっています。ベトナム人からは好まれますが、外国人には敬遠されがちなローカル調味料',
                'price' => 550,
                'category_id' => '',
            ],
            [
                'name' => 'Trà sen',
                'name_kana' => 'ハス茶',
                'campany_name' => 'Hoa sen',
                'image_url' => 'https://www.tnkjapan.com/blog/wp-content/uploads/2020/07/2376c671ad747de88dfb7ae3372c7f5e.jpg',
                'pr' => 'ベトナムを代表するお茶であるハス茶は、文字通り蓮から作られたお茶を指します。首都ハノイにある西湖で収穫されたハス茶は最高品質と言われており、花盛りの6月には美しいピンク色の蓮が咲き誇ります。',
                'price' => 2500,
                'category_id' => '',
            ],
            [
                'name' => 'cà phê',
                'name_kana' => 'コーヒー',
                'campany_name' => 'Trung Nguyen',
                'image_url' => 'https://www.kaldi.co.jp/ec/img/545/4515996924545_M_1m.jpg',
                'pr' => '世界生産第2位のベトナム。深炒りし、粗めに挽いたコーヒーを、あらかじめコンデンスミルクを入れたカップの上に載せたフィルターに入れ、湯を注ぎ、濃いコーヒーがゆっくりとしたたり落ちるのを待って、かき混ぜるという独特の方法で飲まれています。',
                'price' => 650,
                'category_id' => '',
            ],

        ]);
    }
}
