<tr>
    <td><img width="25" height="25" src='{{asset('/storage/'.$anime->poster)}}'></td>
    <td>{{$anime->title}}</td>
    <td>{{$anime->published_at}}</td>
    <td>{{$anime->status == 0 ? 'Pending' : 'Finished'}}</td>
    <td>{{$anime->quality}}</td>
    <td>{{$anime->categories}}</td>
    <td>
        <a href="{{route('animes.edit',$anime->id)}}" class="btn btn-primary">@lang('Modifier')</a>
    </td>
</tr>