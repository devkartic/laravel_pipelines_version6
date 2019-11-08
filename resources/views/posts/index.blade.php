<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Pipelines</title>
    </head>
    <body>
        <table>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->active }}</td>
                <td>{{ $post->title }}</td>
            </tr>
            @endforeach
        </table>
    {{ $posts->appends(request()->input())->links() }}
    </body>
</html>
