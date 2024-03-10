<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
        #tamanhoContainer {
            width: 500px;
        }
    </style>
</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 40px">
    <h4 class="text-center">Rastreador de IP</h4>
    <form action="ip.php" method="post">
        <div class="form-group">
            <center>               
                <label class="form-label">Digite o IP</label>
                <input type="text" class="form-control" name="ip" id="exampleInputEmail1" placeholder="ex: 148.547.564">
            </center>
        </div>
        <center>
            <button type="submit" style="margin-top: 10px"  class="btn btn-success btn">Pesquisar</button>
        </center>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
