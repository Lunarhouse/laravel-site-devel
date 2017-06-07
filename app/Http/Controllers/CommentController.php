<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use App\Comment;

class CommentController extends Controller
{
    public function save(CommentRequest $request, $id)
    {
        $input = $request->all();//Получаем все данные из формы в массив
        $comment = new Comment;
        $comment->post_id = $id;
        $comment->author = $input['author'];
        $comment->content = $input['content'];
        $comment->email = $input['email'];
        $comment->published = TRUE;
        $comment->created_at = Carbon::now();
        $comment->save();

        //Comment::create($all);//Сохраняем в базу

        \Session::flash('flash_message', 'Ваш комментарий был добавлен!'); //Всплывающее сообщение

       return back(); //редирект обратно к форме с сообщением
    }

    public function destroy($id){
        $comment = Comment::where('id', $id);
        $comment->delete();

        \Session::flash('flash_message', 'Комментарий был удален!');

        return redirect()->back();
    }
}
