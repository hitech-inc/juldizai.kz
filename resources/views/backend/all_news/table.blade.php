<style>
    #allNews-table img{
        max-width: 100%;
    }
</style>
<table class="table table-responsive" id="allNews-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Slug</th>
            <th>Text</th>
            <th>Img</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($allNews as $allNew)
        <tr>
            <td>{!! $allNew->title !!}</td>
            <td>{!! $allNew->slug !!}</td>
            <td>{!! $allNew->text !!}</td>
            <td>{!! $allNew->img !!}</td>
            <td>
                {!! Form::open(['route' => ['allNews.destroy', $allNew->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('allNews.show', [$allNew->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('allNews.edit', [$allNew->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>