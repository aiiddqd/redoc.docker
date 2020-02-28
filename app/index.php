<?php
//phpinfo();
?>
<!-- HTML for static distribution bundle build -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ReDoc</title>

    <link rel="icon" type="image/png" href="./favicon.png" sizes="32x32" />
    <style>
        html
        {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after
        {
            box-sizing: inherit;
        }

        body
        {
            margin:0;
            background: #fafafa;
        }
    </style>
</head>

<body>
<redoc spec-url="http://redoc.local/openapi.yaml"></redoc>

<script src="https://cdn.jsdelivr.net/npm/redoc/bundles/redoc.standalone.js"> </script>

</body>
</html>

