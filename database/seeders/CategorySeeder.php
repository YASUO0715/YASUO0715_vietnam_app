<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;

    class CategorySeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            // カテゴリーテーブルにデータが入っていなかった場合に実行する。
            if (!DB::table('categories')->first()) {
                DB::table('categories')->insert([
                    ['name' => '麺類'],
                    ['name' => 'コーヒー・お茶'],
                    ['name' => '調味料'],
                    ['name' => '野菜'],
                ]);
            }
        }
    }
