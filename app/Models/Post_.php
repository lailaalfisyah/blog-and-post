<?php

namespace App\Models;

class Post
{
  private static $blog_posts = [
    [
      "title" => "Judul Post Pertama",
      "slug" => "judul-post-pertama",
      "author" => "Laila Alfi Syah",
      "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi autem dicta asperiores dolore numquam iusto nostrum, ullam nesciunt. Quia, accusamus nulla adipisci ex, culpa quae nobis quo ad illum iusto quidem sequi ipsa dignissimos! Odit fuga delectus et ea magnam maiores accusamus earum vel voluptas, quas libero inventore iure tempora sequi dolore sapiente modi? Vel, nostrum explicabo delectus corporis labore voluptatibus ea voluptatem est quod corrupti. Sequi quae possimus, voluptatum nisi impedit dicta laboriosam molestias cumque suscipit at facilis inventore!"
    ],
    [
      "title" => "Judul Post Kedua",
      "slug" => "judul-post-kedua",
      "author" => "Ratna Hamida",
      "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. At totam magnam tempore minus deserunt tenetur, eum omnis assumenda sed cupiditate accusamus, dicta rerum aspernatur dolor earum! Culpa omnis ut perspiciatis eveniet ipsam consectetur, inventore perferendis animi. Dolor, a sit maxime quod eius, quia tempora autem incidunt aliquid provident doloremque earum quasi voluptatibus optio dolorum aperiam vel consectetur sequi suscipit porro dolorem quidem nobis debitis! Exercitationem sit doloribus dicta, similique explicabo reiciendis ducimus illum distinctio tenetur reprehenderit! Repellat neque pariatur, eveniet alias unde velit maxime libero delectus perspiciatis ex provident culpa quis assumenda rerum odio, soluta natus? Alias molestias a nemo non illum, quisquam iure molestiae, autem repudiandae corrupti incidunt dolore quam, ullam totam facere provident amet assumenda unde vero fugiat! Corporis, voluptates! Ullam optio sed magnam facere quo corporis delectus repellat. Fugit, officiis. In, aliquam. Dicta non nesciunt, sunt exercitationem et laudantium adipisci blanditiis ea suscipit labore dolores eum ut?"
    ]    
  ];

  public static function all() {
    return collect(self::$blog_posts);
  }

  public static function find($slug) {
    // $posts = self::all();
    $posts = static::all();

    return $posts->firstWhere('slug', $slug);
  }
}
