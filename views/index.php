<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notes</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial;
        }

        .new-note{
            width: 300px;
            margin: 0 auto;
        }

        .new-note input,
        .new-note textarea,
        .new-note button{
            font-family: Arial;
            padding: 5px 10px;
            display: block;
            width: 100%;
            margin-bottom: 15px;
        }
        .notes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .note {
            background-color: #ffda00;
            color: black;
            width: 300px;
            display: inline-block;
            margin: 10px;
            padding: 10px;
            position: relative;
            min-height: 100px;
        }
        .note .title{
            margin-bottom: 10px;
            font-weight: bold;
        }
        .note .title a {
            color: black;
        }
        .note .close {
            position: absolute;
            right: 10px;
            top: 10px;
            background-color: transparent;
            border: none;
        }
        .note small {
            position: absolute;
            bottom: 10px;
            right: 10px;
            margin-top: 10px;
            display: block;
            text-align: right;
            font-style: italic;
        }
    </style>
</head>
<body>
<div>
    <form class="new-note" action="/create" method="post">
        <input type="text" name="title" placeholder="Note title" autocomplete="off">
        <textarea name="description" cols="30" rows="4" placeholder="Note Description"></textarea>
        <button>
            New note
        </button>
    </form>
    <div class="notes">
    </div>
</div>
</body>
</html>