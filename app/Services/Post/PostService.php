<?php

namespace App\Services\Post;

use App\Enums\PostSourceEnum;
use App\Models\Post\Post;

class PostService
{
    public function store(string $title, string $text, int $author_id, PostSourceEnum $postSourceEnum)
    {
        return Post::create([
            'title' => $title,
            'text' => $text,
            'author_id' => $author_id,
            'source' => $postSourceEnum,
        ]);
    }

    public function countEvenOddDiagonals($matrix) {
        $evenCount = 0;
        $oddCount = 0;
        
        // Перевірка головної діагоналі
        for ($i = 0; $i < 3; $i++) {
            if ($matrix[$i][$i] % 2 == 0) {
                $evenCount++;
            } else {
                $oddCount++;
            }
        }
        
   
        for ($i = 0; $i < 3; $i++) {
            if ($matrix[$i][2 - $i] % 2 == 0) {
                $evenCount++;
            } else {
                $oddCount++;
            }
        }
        
        return ['even' => $evenCount, 'odd' => $oddCount];
    }

    function isPalindrome($word) {
   
        $word = mb_strtolower(preg_replace('/\s/u', '', $word), 'UTF-8');
    

    $length = mb_strlen($word, 'UTF-8');
    
  
    for ($i = 0; $i < $length / 2; $i++) {
        if (mb_substr($word, $i, 1, 'UTF-8') !== mb_substr($word, $length - $i - 1, 1, 'UTF-8')) {
            return false;
        }
    }
    
    return true;
    }
}