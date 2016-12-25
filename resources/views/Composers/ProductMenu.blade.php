@foreach($listloaisp as $loai)
    <li><a href="typelist-{{$loai->id_loai}}"> {{$loai->ten_loai}}</a></li>
@endforeach