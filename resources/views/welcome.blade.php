<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <title>SibIntec</title>
    </head>
    <body>
        <div class="container">
            <div class="row list">
                <div class="col-12 list__header">
                    <h4>I want to...</h4>
                </div>
                @foreach ($tasks as $task)
                    <div class="col-12 list__item">
                        <div class="list__check">
                            <input type="checkbox" data-done="{{ route('done', $task->id) }}" data-undone="{{ route('undone', $task->id) }}" @if($task->done) checked @endif>
                        </div>
                        <div class="list__name">
                            {{ $task->title }}
                        </div>
                    </div>
                @endforeach
                <div class="col-12 list__item">
                    <div class="list__name">
                        <form action="{{ route('add') }}" method="post">
                            {{ csrf_field() }}
                            <input type="text" name = "title" class="list__input" placeholder="Enter task">
                            <input type="submit" value="Add">
                        </form>
                    </div>
                </div>
                <div class="col-12 list__bottom">
                    <div class="list__name">
                        {{ $count }} task(s) remaining
                    </div>
                </div>
            </div>
        </div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
