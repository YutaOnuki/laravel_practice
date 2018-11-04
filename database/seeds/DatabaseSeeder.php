<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     *
     */
    public function run()
    {
      $this->call([
        ArticlesTableSeeder::class,// シーダーの呼び出しの追加
        //OtherTablesSeeder::class, 複数シーダーの呼び出し
      ]);
    }
}
