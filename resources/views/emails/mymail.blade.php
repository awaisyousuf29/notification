<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send Mail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row py-5 my-5 mx-5 px-5">
            <h2>Send Mail</h2>
            <form action="{{route('sendmail')}}" class="form" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <input type="email" name="email" placeholder="email" class="form-control">
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                    <div class="col-lg-12 pt-2">
                        <textarea name="content" placeholder="write..." class="form-control" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="col-lg-12 pt-2">
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
