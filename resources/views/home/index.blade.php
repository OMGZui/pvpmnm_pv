<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/3/30
 * Time: 11:51
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home</title>
</head>
<body>
<div id="app"></div>
</body>
<script type="text/javascript">
    let Laravel = {
        // 设置 csrfToken
        csrfToken: '{{ csrf_token() }}'
    };
</script>
<script src="{{ asset('js/app.js') }}"></script>
</html>
