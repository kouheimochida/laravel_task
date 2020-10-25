@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    create
                    <form methot="POST"action="{{route('contact.store}}">
                      @csrf
                      氏名
                    <input type="text" name="your_name">
                    <br>
                    件名
                    <input type="text" name="title">
                     <br>
                     メールアドレス
                     <input type="email" name="emali">
                     <br>
                     ホームページ
                     <input type="url" name="url">
                     <br>
                     性別
                     <input type="radio" name="gendre" value="0">男性</input>
                     <input type="radio" name="gendre" value="1">女性</input>
                     <select name="age" >
                    <option value="">洗濯してください</option>
                    <option value="1">~１９才</option>
                    <option value="1">２０〜２９才</option>
                    <option value="1">３０〜３９才</option>
                    <option value="1">４０〜４９才</option>
                    <option value="1">５０〜５９才</option>
                    <option value="1">６０才〜</option>
                    <br>
                    </select>
                    <br>
                    お問い合わせ内容

                    <textarea name="contact"></textarea>
                    <br>
                    <input type="checkbox" name="caution" value="1">注意事項に同意する
                    <br>

                    <input class="btn btn-info" type="submit" value="登録する">

                     



                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
