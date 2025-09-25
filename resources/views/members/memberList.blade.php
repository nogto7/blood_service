@extends('layout')

@section('content')
<div class="section_container">
    <div class="section_line">
        <h2 class="title">Гишүүдийн жагсаалт</h2>
        <div class="table_wrap">
            <table class="table_content">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Регистрийн дугаар</th>
                        <th>Овог/Нэр</th>
                        <th>Салбар төвийн нэр</th>
                        <th>Мэргэжил</th>
                        <th>И-мэйл</th>
                        <th>Утас</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($members as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->register_number }}</td>
                        <td>{{ $item->lastname }} <div class="firstname">{{ $item->firstname }}</div></td>
                        <td>{{ $item->workplace_name}}</td>
                        <td>                            
                            @if($item->position == 1)
                                Эмч
                            @elseif($item->position == 2)
                                Сувилагч
                            @elseif($item->position == 3)
                                Лаборант
                            @elseif($item->position == 4)
                                Бага эмч
                            @elseif($item->position == 5)
                                Бусад
                            @endif
                            </td>
                        <td>{{ $item->email}}</td>
                        <td>{{ $item->phone}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection