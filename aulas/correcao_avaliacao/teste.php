<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://www.uniprot.org/uniprot.min.css2022_02" type="text/css" rel="stylesheet"/>
    <link href="https://www.uniprot.org/tippy.css" type="text/css" rel="stylesheet"/>

    
</head>
<body>
    <div id="conteudo"></div>
    <script>
        fetch("https://www.uniprot.org/uniprot/P01185")
        .then(resp => resp.text())
        .then(function(text){
            let b = document.querySelector("#conteudo");
            b.innerHTML = text;
        })
    </script>
    <script src="https://www.uniprot.org/js-compr.js2022_02"></script>
</body>
</html>