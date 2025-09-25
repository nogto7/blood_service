@extends('layout')
@section('title', 'Бүртгүүлэх')

@section('content')
<form action="/saveUser" method="POST">
    @csrf
    <div class="section_container">
        <div class="register_form">
            <div class="form_item required">
                <label class="form_label">Регистрийн дугаар<span></span></label>
                <input type="text" name="register_number" class="form_input register_number" placeholder="Регистрийн дугаар" value="{{ old('register_number') }}">
                @if ($errors->has('register_number'))
                    <div class="text_desc">
                        <p class="__error">{{ $errors->first('register_number') }}</p>
                    </div>
                @endif
            </div>
            <div class="form_item required">
                <label class="form_label">Овог</label>
                <input type="text" name="lastname" class="form_input" placeholder="Овог оруулна уу" required>
                @if ($errors->has('lastname'))
                    <div class="text_desc">
                        <p class="__error">{{ $errors->first('lastname') }}</p>
                    </div>
                @endif
            </div>
            <div class="form_item required">
                <label class="form_label">Нэр</label>
                <input type="text" name="firstname" class="form_input" placeholder="Нэр оруулна уу" required>
                @if ($errors->has('firstname'))
                    <div class="text_desc">
                        <p class="__error">{{ $errors->first('firstname') }}</p>
                    </div>
                @endif
            </div>
            <div class="form_item">
                <label class="form_label">Салбар төвийн нэр</label>
                <select name="workplace" id="" class="form_select" required>
                    <option value="">Сонгох</option>
                    <option value="1">ЦССҮТ</option>
                    <option value="2">Архангай ЦСТ</option>
                    <option value="3">Багануур ЦСТ</option>
                    <option value="4">Баянхонгор ЦСТ</option>
                    <option value="5">Баян-Өлгий ЦСТ</option>
                    <option value="6">Булган ЦСТ</option>
                    <option value="7">Дархан ЦСТ</option>
                    <option value="8">Дорноговь ЦСТ</option>
                    <option value="9">Дорнод ЦСТ</option>
                    <option value="10">Дундговь ЦСТ</option>
                    <option value="11">Говь-Алтай ЦСТ</option>
                    <option value="12">Говьсүмбэр ЦСТ</option>
                    <option value="13">Хөвсгөл ЦСТ</option>
                    <option value="14">Орхон ЦСТ</option>
                    <option value="15">Сэлэнгэ ЦСТ</option>
                    <option value="16">Төв ЦСТ</option>
                    <option value="17">Өмнөговь ЦСТ</option>
                    <option value="18">Увс ЦСТ</option>
                    <option value="19">Өвөрхангай ЦСТ</option>
                    <option value="20">Завхан ЦСТ</option>
                    <option value="21">Сүхбаатар ЦСТ</option>
                    <option value="22">Ховд ЦСТ</option>
                    <option value="23">Хэнтий ЦСТ</option>
                    <option value="24">Тосонцэнгэл ЦСТ</option>
                    <option value="25">Налайх ЦСТ</option>
                    <option value="26">Хархорин ЦСТ</option>
                    <option value="27">Зүүнхараа ЦСТ</option>
                    <option value="28">Замын Үүд ЦСТ</option>
                </select>
            </div>
            <div class="form_item">
                <label class="form_label">Мэргэжил</label>
                <select name="position" id="" class="form_select">
                    <option value="1">Эмч</option>
                    <option value="2">Сувилагч</option>
                    <option value="3">Лаборант</option>
                    <option value="4">Бага эмч</option>
                    <option value="5">Бусад</option>
                </select>
            </div>
            <div class="form_item required">
                <label class="form_label">И-мэйл хаяг</label>
                <input type="email" name="email" class="form_input" placeholder="И-мэйл хаяг оруулна уу" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <div class="text_desc">
                        <p class="__error">{{ $errors->first('email') }}</p>
                    </div>
                @endif
            </div>
            <div class="form_item required">
                <label class="form_label">Утасны дугаар</label>
                <input type="text" name="phone" class="form_input" placeholder="Утасны дугаар оруулна уу" required>
                @if ($errors->has('phone'))
                    <div class="text_desc">
                        <p class="__error">{{ $errors->first('phone') }}</p>
                    </div>
                @endif
            </div>
            <div class="mt2"><button type="submit" class="n_button __primary">Бүртгүүлэх</button></div>
        </div>
    </div>
</form>
@endsection
