<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     *
     */
    public function run()
    {
        DB::table('articles')->delete(); //Query BuilderでArticlesテーブルのレコード削除
        factory(App\Article::class, 20)->create();
    }
}
