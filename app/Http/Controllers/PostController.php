<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //     public function index(Post $post)
    // {
    //     // ddd($post->post);
    //     return $post->get();//$postの中身を戻り値にする。
    //     // return view('index', compact('hello', 'hello_array')

    //     // return $post->tosql();
    //     // var_dump($post);
    // }
       public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
   {
        // $posts = $post ;
        // dd($post->get());
      return view('posts.index', ['posts' => $post->getByLimit()]);
    //$postのデータ中身すべて取得（ $post->get()）し、'posts'としてbladeに返す。
    // return view('posts.index')->with(['post' => $post->get()]); 
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
