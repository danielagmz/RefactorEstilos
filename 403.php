<?php http_response_code(403);
require_once 'server/controllers/env.php'; 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>403</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:700');

        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            background-color: #111111;
            /* dark-grey */
            font-family: "Roboto Condensed", sans-serif;
            text-transform: uppercase;
            overflow: hidden;
        }

        .police-tape {
            background-color: #e2bb2d;
            /* yellow */
            background: linear-gradient(180deg,
                    #f0cc4f 0%,
                    /* lighten yellow by 20% */
                    #e2bb2d 5%,
                    /* yellow */
                    #e2bb2d 90%,
                    /* yellow */
                    #d4ad2b 95%,
                    /* lighten yellow by 5% */
                    #704b16 100%
                    /* darken yellow by 50% */
                );
            padding: 0.125em;
            font-size: 3em;
            text-align: center;
            white-space: nowrap;
        }

        .police-tape--1 {
            transform: rotate(10deg);
            position: absolute;
            top: 40%;
            left: -5%;
            right: -5%;
            z-index: 2;
            margin-top: 0;
        }

        .police-tape--2 {
            transform: rotate(-8deg);
            position: absolute;
            top: 50%;
            left: -5%;
            right: -5%;
        }

        .ghost {
            display: flex;
            justify-content: stretch;
            flex-direction: column;
            height: 100vh;
        }

        .ghost--columns {
            display: flex;
            flex-grow: 1;
            flex-basis: 200px;
            align-content: stretch;
        }

        .ghost--navbar {
            flex: 0 0 60px;
            background: linear-gradient(0deg, #27292d 0px, #27292d 10px, transparent 10px);
            /* lighter-grey */
            border-bottom: 2px solid #111111;
            /* dark-grey */
        }

        .ghost--column {
            flex: 1 0 30%;
            border-width: 0px;
            border-style: solid;
            border-color: #27292d;
            /* lighter-grey */
            border-left-width: 10px;
            background-color: #212224;
            /* darken lighter-grey by 6% */
        }

        .ghost--main {
            background-color: #111111;
            /* dark-grey */
            border-top: 15px solid #2d2f33;
            /* lighten lighter-grey by 4% */
            flex: 1 0 100px;
        }

        .code {
            display: block;
            width: 100px;
            background-color: #27292d;
            /* lighter-grey */
            height: 1em;
            margin: 1em;
        }

        .ghost--main .code {
            height: 2em;
            width: 200px;
        }

        .button {
            background-color: #e2bb2d;
            /* yellow */
            color: #111111;
            /* dark-grey */
            padding: 0.5em 1em;
            border: none;
            border-radius: 0.25em;
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -90%);
        }
    </style>
</head>

<body>
    <div class="ghost">

        <div class="ghost--navbar"></div>
        <div class="ghost--columns">
            <div class="ghost--column">
                <div class="code"></div>
                <div class="code"></div>
                <div class="code"></div>
                <div class="code"></div>
            </div>
            <div class="ghost--column">
                <div class="code"></div>
                <div class="code"></div>
                <div class="code"></div>
                <div class="code"></div>
            </div>
            <div class="ghost--column">
                <div class="code"></div>
                <div class="code"></div>
                <div class="code"></div>
                <div class="code"></div>
            </div>

        </div>
        <div class="ghost--main">
            <div class="code"></div>
            <div class="code"></div>

        </div>

    </div>

    <h1 class="police-tape police-tape--1">
        &nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error:
        403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error:
        403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error:
        403&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Error: 403
    </h1>
    <h1 class="police-tape police-tape--2">
        Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forbidden&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </h1>

    <a href="<?php echo BASE_URL . 'home' ?>" class="button" >Tornar</a>


</body>

</html>