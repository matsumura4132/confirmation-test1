@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css) }}">
@endsection

@section('content')
<div class="confirm_content">
    <div class="confirm_heading">
        <h2>Confirm</h2>
    </div>
    <form class="form" action="/contacts" method="post">
        <div class="confirm-table">
            <table class="confirm-table_inner">
                <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　お名前
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['name'] }}" readonly >
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　　　　性別
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['gender'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　　メールアドレス
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['email'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　電話番号
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['tel'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　 住所
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['address'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　　建物名
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['building'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　　お問い合わせの種類
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['kind'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 <tr class="confirm-table_row">
                    <th class="confirm-table_row">
                        <th class="confirm-table_header">
　　　　　　　　　　　　　　お問い合わせ内容
                        </th>
                        <td class="confirm-table_text">
                            <input type="text" name="name" value="{{ $contact['content'] }}" readonly>
                        </td>
                    </th>
                </tr>
                 
            </table>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">送信</button>
        </div>
        <div class="form_button">
            <button class="form_button-submit" type="submit">修正</button>
        </div>
    </form>
</div>

@endsection