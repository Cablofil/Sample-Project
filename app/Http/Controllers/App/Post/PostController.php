<?php

namespace App\Http\Controllers\App\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Http\Requests\Post\UpdatePostRequest;
use App\Models\Post\Post;
use App\Services\Post\PostService;

class PostController extends Controller
{

    public function __construct(
        protected PostService $service,
    )
    {

    }

    

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::paginate();

        // return $posts;
        // var_dump (array_merge ([2 => 'a'], [3 => 'b']));
        // $x = 1 + «1%» + «$ 1»;
        // return $x;
        // return in_array (1, [0, '0', true]);
        // $matrix = [
        //     [1, 2, 3],
        //     [4, 5, 6],
        //     [7, 8, 9]
        // ];
        
        // $result = $this->service->countEvenOddDiagonals($matrix);
        // echo "Парні числа у діагоналях: " . $result['even'] . "<br>";
        // echo "Непарні числа у діагоналях: " . $result['odd'];

        $word = "А роза упала на лапу Азора";

        if ($this->service->isPalindrome($word)) {
            echo "$word є паліндромом.";
        } else {
            echo "$word не є паліндромом.";
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // $validated = $request->validated();
 
        // $validated = $request->safe()->only(['name', 'email']);
        // $validated = $request->safe()->except(['name', 'email']);
 
        // $post = Post::create($request->all());
        // $post = $this->service->store(
        //     'title' => $request->validated('title') ,
        //     'text' => $text,
        //     'author_id' => $author_id,
        //     'source' => $postSourceEnum,
        // );
    
        // return $post;
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
