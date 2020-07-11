{{-- layouts/profile.blade.phpを読み込む --}}
@extends('layouts.profile')

{{-- create.blade.phpの@yield('title')に'追加する'を埋め込む --}}
@section('title', '追加する')

{{-- create.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <form action="{{action('Admin\ProfileController@create')}}" method="post">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                 <br>
                 <label for="name">氏名</label>
                 <input type="text" name="name"></p>
                 <br>
                 <label for="gender">性別</label>
                 <select name="gender">
                 <option value="男性">男性</option>
                 <option value="女性">女性</option>
                 <option value="その他">その他</option>
                 </select>
                 <br>
                 <label for="hobby">趣味</label>
                 <br>
                 <textarea name="hobby"></textarea>
                 <br>
                 <label for="introduction">自己紹介</label>
                 <br>
                 <textarea name="introduction"></textarea>
                 <br>
                 {{ csrf_field() }}
                <input type="submit" value="送信">
                    
                </form>
                
                
            </div>
        </div>
    </div>
@endsection