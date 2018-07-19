<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
        <title>SibIntec</title>
    </head>
    <body>
        <div class="container">
            <div class="row list">
                <div class="col-12 list__header">
                    <h4>I want to...</h4>
                </div>
                <div class="col-12 list__item">
                    <div class="list__check">
                        <input type="checkbox">
                    </div>
                    <div class="list__name">
                        Задача №1
                    </div>
                </div>
                <div class="col-12 list__item">
                    <div class="list__check">
                        <input type="checkbox">
                    </div>
                    <div class="list__name">
                        Задача №1
                    </div>
                </div>
                <div class="col-12 list__item">
                    <div class="list__name">
                        <form action="">
                            <input type="text" class="list__input" placeholder="Enter task">
                            <input type="submit" value="Add">
                        </form>
                    </div>
                </div>
                <div class="col-12 list__bottom">
                    <div class="list__name">
                        3 task(s) remaining
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
