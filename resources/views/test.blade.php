<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title of the document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $.get('http://192.168.0.5:5005/tree.php',function () {

            }).done(function (data) {
                var json = eval( "(" + data.toString() + ")" );
                console.log(json);
            })
        });
    </script>
</head>

<body>


</body>

</html>