<tr>
    {{debug($category)}}
    <td>{{$category->name}}</td>
    <td>100</td>
    <td>
        <a href="{{route('categories.edit',$category->id)}}" class="btn btn-primary">@lang('Modifier')</a>
    </td>
</tr>