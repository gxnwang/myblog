<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">King</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">首页 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a class="btn btn-primary my-2 my-sm-0 mr-2">注册</a>
                <a class="btn btn-success my-2 my-sm-0 mr-2">登录</a>
            </form>
        </div>
    </nav>
</div>
<div class="container">
    <div class="row">
        <div class="col-8">
            <div>
                <div class="media mt-4">
                    <div class="media-body">
                        <h4 class="mt-0 mb-1">Media object</h4>
                        <p class="text-muted">
                            in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </p>
                        <div>
                            <a href="">admin</a>

                            <i class="fa fa-address-book"></i>
                        </div>
                    </div>
                    <img class="ml-3" width="150" src="/images/timg.jpg" alt="Generic placeholder image">
                </div>

                <div class="dropdown-divider"></div>
            </div>
            <div class="media mt-4">
                <div class="media-body">
                    <h4 class="mt-0 mb-1">Media object</h4>
                    <p class="text-muted">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
                <img class="ml-3" width="150" src="/images/timg.jpg" alt="Generic placeholder image">
            </div>
            <div class="dropdown-divider"></div>
            <div class="media mt-4">
                <div class="media-body">
                    <h4 class="mt-0 mb-1">Media object</h4>
                    <p class="text-muted">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                    </p>
                </div>
            </div>
            <div class="dropdown-divider"></div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<script src="/js/app.js"></script>
</body>
</html>