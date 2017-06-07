<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Post;
use App\Http\Requests\PostRequest;



class PostController extends Controller
{
    public function index(Post $postModel) //Главная страница
    {
        $posts = $postModel->published()->withCount('comments')->paginate(7);

        return view('posts.list', compact('posts'));
    }

    public function unpublished(Post $postModel) //Неопубликованные
    {
        $posts = $postModel->unPublished()->paginate(7);//Обращение к скоупу с пагинацией
        $title = "Неопубликованные текcты песен:";

        return view('posts.list', compact('posts', 'title'));
    }

    public function show($slug) //Показывает одну статью
    {
        $post = Post::find($slug);
        $comments = $post->comments()->get();//Достаем комментарии


        if (is_null($post)) {
            abort(404);
        }

        return view('posts.show', compact('post', 'comments'));
    }

    public function create() //Создание поста
    {
        return view('posts.create');
    }

    public function store(PostRequest $request) //Сохранение поста после создания
    {
        $input = $request->all();

        $post = new Post;
        $post->artist = $input['artist'];
        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->excerpt = Str::words($input['content'], 40);
        $post->published_at = $input['published_at'];

        if(isset($input['published'])) {
            $post->published = TRUE;
        } else {
            $post->published = FALSE;
        }

        $post->save();

        \Session::flash('flash_message', 'Ваша запись была добавлена!'); //Всплывающее сообщение

        /*function store(Request $request)
        {
            $plan = 123;
            $request->request->add(['plan' => $plan]);
            User::create($request->all());
        }*/

        //$postModel->create($request->all());
        return redirect()->route('index'); //Перенаправление на Index
    }

    public function edit($id) //Редактирование поста
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(PostRequest $request, $id) //Сохранение поста после редактирования
    {
        $post = Post::findOrFail($id);

        $input = $request->all();
        $post->artist = $input['artist'];
        $post->title = $input['title'];
        $post->content = $input['content'];
        $post->excerpt = Str::words($input['content'], 40);
        $post->published_at = $input['published_at'];

        if(isset($input['published'])) {
            $post->published = TRUE;
        } else {
            $post->published = FALSE;
        }

        $post->save();

        \Session::flash('flash_message', 'Запись успешно отредактирована!');

        return redirect()->route('show', $id);

    }

    public function destroy($id) //Удаление поста
    {
        $post = Post::find($id);
        $post->comments()->delete();
        $post->delete();


        \Session::flash('flash_message', 'Запись была удалена!');

        return redirect()->route('index');
    }
}
