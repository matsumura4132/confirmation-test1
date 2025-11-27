@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form_content">
    　　　　<div class="contact-form_heading">
        　　　<h2>Contact</h2>
    　　　　</div>
    　　　　<form class="form" action="/contacts/confirm" method="post">
             @csrf
        　　　<div class="form_group">
            　　<div class="form_group-title">
            　　<span class="form_label--item">お名前</span>
            　　<span class="form_label--required">※</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="text" name="name" placeholder=例:山田>
                    <input type="text" name="name" placeholder= 例：太郎>
                </div>
            　　<div class="form_error">
                <!-- バリデーション機能を実装したら記述します。 -->
            </div>
           </div>
        </div>
        <div class="form_group">
         <div class="form_group-title">
            <span class="form_label--item">性別</span>
            <span class="form_label--required">※</span>
            <input type="radio" name="gender" value="male">男性
            <input type="radio" name="gender" value="female">女性
            <input type="radio" name="gender" value="other">その他
         </div>
          <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
        </div>
        <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">メールアドレス</span>
                <span class="form_label--required">※</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="email" name="email" placeholder="例:test@example.com">
                </div>
                <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
            </div>
         </div>
         <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">電話番号</span>
                    <span class="form_label--required">※</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text">
                    <input type="text" name="name" placeholder=例:090>
                    <input type="text" name="name" placeholder= 例：1234>
                    <input type="text" name="name" placeholder= 例：5678>
                </div>
            <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
         </div>
         </div>
         <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">住所</span>
                    <span class="form_label--required">※</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text
                ">
               <input type="text" name="address" placeholder=例:東京都渋谷区千駄ヶ谷1-2-3>
            </div>
            </div>
            <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
         </div>
         <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">建物名</span>
                    <span class="form_label--required">※</span>
            </div>
            <div class="form_group-content">
                <div class="form_input--text
                ">
               <input type="text" name="building" placeholder=例:千駄ヶ谷マンション101>
            </div>
            <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
         </div>
         </div>

         <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">お問い合わせの種類</span>
                    <span class="form_label--required">※</span>
             </div>
            
                <div class="form_input--text
                ">
               <input type="text" name="kind" placeholder=例:選択してください>
            </div>
            <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
         </div>
         <div class="form_group">
            <div class="form_group-title">
                <span class="form_label--item">お問い合わせ内容</span>
                    <span class="form_label--required">※</span>
            </div>
            <div class="form_input--text
                ">
               <input type="text" name="content" placeholder=例:お問い合わせ内容をご記載ください>
            </div>
            
            <div class="form_error">
            <!-- バリデーション機能を実装したら記述します。 -->
          </div>
　　　　　<div class="form_button">
         <button type="submit">確認画面</button>
         </div>
      </form>
     </div>
@endsection