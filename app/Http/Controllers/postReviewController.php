<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Models\Employee_review;

class postReviewController extends Controller
{
    //レビュー検索用アクション
    protected function serchRegistCompany(){
        //ユーザーのログイン状況を確認。
        log::debug('ログインの確認をします。');
        if(!Auth::check()){
            //セッション内処理に「ログインしてください」と入力する。
            //ログインしていなかった場合ルーティング内のname(‘login’)を通してログインページに返す処理を走らせる。
            return redirect('home');
        }

        log::debug('レビューとユーザー情報を取得する。');
        // DBからレビューとユーザー情報を取得
        $Employee_review = Employee_review::all()->Employee_id()->get('employee_id', 'review_company_id', 'joining_route', 'occupation', 'position',
        'enrollment_period', 'enrollment_status', 'employment_status', 'welfare_office_environment',
        'working_hours', 'holiday', 'in_company_system', 'corporate_culture', 'ease_of_work_for_women',
        'rewarding_work', 'image_gap', 'business_outlook', 'strengths_and_weaknesses', 'annual_income_salary',
        'general_estimation_title', 'general_estimation', 'username', 'like_count', 'delete_flg');

        //レビュー数のカウント
        $Review_count = Employee_review::all()->count();

        //第二引数に配列を持たせるとview側に変数を渡せる。
        return view('review.reviewRegister-cList',['EmployeeReview' => $Employee_review,'ReviewCount' => $Review_count]);
    }

    //登録済み会社を一覧表示させるアクション
    protected function showRegistCompany(){
        //ユーザーのログイン状況を確認。
        log::debug('ログインの確認をします。');
        if(!Auth::check()){
            //セッション内処理に「ログインしてください」と入力する。
            //ログインしていなかった場合ルーティング内のname(‘login’)を通してログインページに返す処理を走らせる。
            return redirect('home');
        }

        log::debug('会社情報を取得する。');
        // DBからレビューとユーザー情報を取得
        $Employee_review = Employee_review::all()->Employee_id()->get('employee_id', 'review_company_id', 'joining_route', 'occupation', 'position',
        'enrollment_period', 'enrollment_status', 'employment_status', 'welfare_office_environment',
        'working_hours', 'holiday', 'in_company_system', 'corporate_culture', 'ease_of_work_for_women',
        'rewarding_work', 'image_gap', 'business_outlook', 'strengths_and_weaknesses', 'annual_income_salary',
        'general_estimation_title', 'general_estimation', 'username', 'like_count', 'delete_flg');

        //レビュー数のカウント
        $Review_count = Employee_review::all()->count();

        //第二引数に配列を持たせるとview側に変数を渡せる。
        return view('review.reviewRegister-cList',['EmployeeReview' => $Employee_review,'ReviewCount' => $Review_count]);
    }

    //レビュー投稿ページ(入社経路)に関する関するアクション
    //Jrは「Join Route(入社経路)」の略。
    protected function profileEditJr(Request $request){
        //ユーザーのログイン状況を確認。
        log::debug('ログインユーザーのID情報を取得します。');
        if(!Auth::check()){
            //セッション内処理に「ログインしてください」と入力する。
            //ログインしていなかった場合ルーティング内のname(‘login’)を通してログインページに返す処理を走らせる。
            return redirect('home');
        }

        // プロフィール編集ページ内でキャンセル・変更どちらを押したかを$requestの各name属性を確認。処理の分岐を行う。
        if ($request->get('cancel-button')){
            log::debug('レビュー対象会社を再選択します。');
            //フラッシュ用セッションに「プロフィールの変更をキャンセルしました」と記入する。
            return redirect('/myPage/'.Auth::id());
        }elseif ($request->get('update-button')){
            log::debug('送信情報のバリテーションを開始します。');
            //バリテーション
            $request->validate([
                'age' => 'integer|nullable|max:255',
                'tel' => 'integer|nullable|max:255',
                'profImg' => 'nullable|max:255',
                'zip' => 'integer|nullable|max:255',
                'addr' => 'nullable|max:255',
            ]);
            log::debug('ユーザー登録を開始します。');
            // 一旦セッション内にユーザーが入力した情報を保持させる。
            $request->session()->put('users', null);

            //フラッシュ用セッションに「プロフィールを変更しました」と入力する。
            return redirect('/myPage');
        }
    }
}
