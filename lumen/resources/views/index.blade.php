<!DOCTYPE html>
<html>

<head>
    <style>
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: black;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
        }

        .pagination a {
            border: 1px solid #ddd;
            /* Gray */
        }

        .container {
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center
        }

        .box {
            width: auto;
            height: auto;
            background: #fff;
        }

        body {
            margin: 0px;
        }

    </style>
</head>

<body>

    <div class="container">
        <div class="box">
            <h2>Selecione uma pagina para receber os dados</h2>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="{{ URL('crawler', 1) }}">1</a>
                <a href="{{ URL('crawler', 2) }}">2</a>
                <a href="{{ URL('crawler', 3) }}">3</a>
                <a href="{{ URL('crawler', 4) }}">4</a>
                <a href="{{ URL('crawler', 5) }}">5</a>
                <a href="{{ URL('crawler', 6) }}">6</a>
                <a href="{{ URL('crawler', 7) }}">7</a>
                <a href="{{ URL('crawler', 8) }}">8</a>
                <a href="{{ URL('crawler', 9) }}">9</a>
                <a href="#">&raquo;</a>
            </div>
        </div>
    </div>
</body>

</html>
