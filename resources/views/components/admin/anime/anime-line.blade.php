<tr>
    <td><img width="25" height="25" src='{{asset('/storage/'.$anime->poster)}}'></td>
    <td>{{$anime->title}}</td>
    <td>{{$anime->published_at}}</td>
    <td>{{$anime->status == 0 ? 'Pending' : 'Finished'}}</td>
    <td>{{$anime->quality}}</td>
    <td>{{$anime->categories}}</td>
    <td>
        <button>@lang('Modifier')</button>
    </td>
</tr>