{{-- layouts/admin.blade.phpを読み込む --}}
@extends('layouts.profile')


{{-- edit.blade.phpの@yield('title')に'編集する'を埋め込む --}}
@section('title', '編集する')

{{-- edit.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row"> 
            <div class="col-md-8 mx-auto">
                <h2>編集する</h2>
                 <form action="{{action('Admin\ProfileController@update')}}" method="post">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                 <br>
                 <label for="name">氏名</label>
                 <input type="text" name="name" value="{{ $profile_form->name }}"></p>
                 <br>
                 <label for="gender">性別</label>
                 <select name="gender"onChange="{{ $profile_form->name }}"value;>
                 <option value="男性">男性</option>
                 <option value="女性">女性</option>
                 <option value="その他">その他</option>
                 </select>
                 <br>
                 <label for="hobby">趣味</label>
                 <br>
                 <textarea name="hobby" value="{{ $profile_form->hobby }}"></textarea>
                 <br>
                 <label for="introduction">自己紹介</label>
                 <br>
                 <textarea name="introduction" value="{{ $profile_form->introduction }}"></textarea>
                 <br>
                 {{ csrf_field() }}
                 <input type="hidden" name="id" value="{{ $profile_form->id }}">
                <input type="submit" value="送信">
                    
                </form>
                
            </div>
        </div>
    </div>
@endsection