<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
        public function index(Post $post)
    {
        // ddd($post->post);
        return $post->get();

        // return $post->tosql();
        // var_dump($post);
    }
}

// LaravelのEloquent ORMは、デフォルトではモデル名の複数形形式を使用して、テーブル名を自動的に推測します。
// 例えば、Postという名前のモデルは、デフォルトではpostsという名前のテーブルに関連付けられます。しかし
// 、もし異なるテーブル名を使用したい場合、モデル内で$tableプロパティを設定して、テーブル名を明示的に指定することができます。
// 例:
// php
// Copy code
// namespace App\Models;
// use Illuminate\Database\Eloquent\Model;
// class Post extends Model
// {
//     protected $table = 'custom_posts'; // テーブル名を指定
// }
// このようにして、Postモデルはcustom_postsというテーブルに関連付けられるようになります。
