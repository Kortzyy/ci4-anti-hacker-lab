
<?php

$isHackAttempt = false;
$displayInput = '';

if (isset($user_input) && is_string($user_input)) {

    $displayInput = $user_input;

    if (
        stripos($user_input, '<script>') !== false ||
        stripos($user_input, 'document.title') !== false
    ) {
        $isHackAttempt = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Security Result</title>

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Segoe UI',sans-serif;
        }

        body{
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            overflow:hidden;
            position:relative;
            transition:0.5s;
            background:
            radial-gradient(circle at top left,#1e1b4b,#020617 45%),
            radial-gradient(circle at bottom right,#0f766e,#020617 45%);
        }

        .container{
            width:520px;
            padding:45px;
            border-radius:28px;
            background:rgba(15,23,42,0.75);
            backdrop-filter:blur(18px);
            border:1px solid rgba(255,255,255,0.08);
            box-shadow:
            0 15px 40px rgba(0,0,0,0.45),
            inset 0 1px 1px rgba(255,255,255,0.05);
            position:relative;
            z-index:2;
            text-align:center;
        }

        .icon{
            width:90px;
            height:90px;
            margin:auto;
            margin-bottom:20px;
            border-radius:24px;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:42px;
            color:white;
            background:linear-gradient(135deg,#14b8a6,#10b981);
            box-shadow:0 0 25px rgba(20,184,166,0.35);
        }

        h1{
            color:#f8fafc;
            margin-bottom:25px;
            font-size:34px;
        }

        .result-box{
            padding:24px;
            border-radius:18px;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.06);
            color:#f8fafc;
            font-size:18px;
            margin-bottom:25px;
            word-wrap:break-word;
        }

        .status{
            margin-bottom:25px;
            padding:16px;
            border-radius:14px;
            font-weight:bold;
        }

        .safe{
            background:rgba(20,184,166,0.12);
            color:#5eead4;
            border:1px solid rgba(94,234,212,0.2);
        }

        .danger{
            background:rgba(239,68,68,0.15);
            color:#fca5a5;
            border:1px solid rgba(252,165,165,0.25);
            animation:blink 0.5s infinite;
        }

        a{
            display:inline-block;
            padding:14px 22px;
            border-radius:16px;
            text-decoration:none;
            color:white;
            font-weight:bold;
            background:linear-gradient(135deg,#6366f1,#14b8a6);
            transition:0.3s;
            box-shadow:0 10px 25px rgba(20,184,166,0.25);
        }

        a:hover{
            transform:translateY(-3px);
        }

        @keyframes blink{
            50%{
                opacity:0.5;
            }
        }

        /* HACK EFFECT */

        .hacked{
            animation:shake 0.18s infinite;
            background:
            repeating-linear-gradient(
                45deg,
                #1a0000,
                #1a0000 10px,
                #000000 10px,
                #000000 20px
            );
        }

        .hacked .container{
            border:2px solid #ef4444;
            box-shadow:0 0 45px rgba(239,68,68,0.55);
        }

        .hacked .icon{
            background:linear-gradient(135deg,#dc2626,#7f1d1d);
            box-shadow:0 0 35px rgba(239,68,68,0.6);
        }

        .hacked::before{
            content:'SYSTEM BREACHED';
            position:absolute;
            top:10%;
            left:50%;
            transform:translateX(-50%);
            font-size:72px;
            font-weight:900;
            color:#ef4444;
            opacity:0.08;
            animation:flicker 0.1s infinite;
        }

        @keyframes shake{
            0%{transform:translate(2px,2px);}
            25%{transform:translate(-2px,-2px);}
            50%{transform:translate(2px,-2px);}
            75%{transform:translate(-2px,2px);}
            100%{transform:translate(2px,2px);}
        }

        @keyframes flicker{
            50%{
                opacity:0.18;
            }
        }

    </style>
</head>

<body class="<?= $isHackAttempt ? 'hacked' : '' ?>">

<div class="container">

    <div class="icon">
        <?= $isHackAttempt ? '⚠' : '✓' ?>
    </div>

    <h1>
        <?= $isHackAttempt ? 'Security Alert' : 'Submission Result' ?>
    </h1>

    <div class="result-box">
        <?= esc($displayInput) ?>
    </div>

    <?php if($isHackAttempt): ?>

        <div class="status danger">
            Suspicious script detected and neutralized successfully.
        </div>

    <?php else: ?>

        <div class="status safe">
            XSS Protection Active using esc()
        </div>

    <?php endif; ?>
    <a href="/form">
        Go Back
    </a>

</div>

</body>
</html>
