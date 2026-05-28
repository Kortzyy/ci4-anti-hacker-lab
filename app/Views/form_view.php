
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti-Hacker Lab</title>

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
            background:
            radial-gradient(circle at top left,#1e1b4b,#020617 45%),
            radial-gradient(circle at bottom right,#0f766e,#020617 45%);
            position:relative;
        }

        /* Animated background */

        .bg-circle{
            position:absolute;
            border-radius:50%;
            filter:blur(70px);
            opacity:0.35;
            animation:float 8s ease-in-out infinite;
        }

        .circle1{
            width:280px;
            height:280px;
            background:#6366f1;
            top:5%;
            left:5%;
        }

        .circle2{
            width:320px;
            height:320px;
            background:#14b8a6;
            bottom:5%;
            right:5%;
            animation-delay:2s;
        }

        @keyframes float{
            0%,100%{
                transform:translateY(0px);
            }
            50%{
                transform:translateY(-20px);
            }
        }

        /* Main card */

        .container{
            width:450px;
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
        }

        .shield{
            width:85px;
            height:85px;
            margin:auto;
            margin-bottom:20px;
            border-radius:24px;
            background:linear-gradient(135deg,#6366f1,#14b8a6);
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:38px;
            color:white;
            box-shadow:0 0 30px rgba(99,102,241,0.4);
        }

        h1{
            text-align:center;
            color:#f8fafc;
            font-size:36px;
            margin-bottom:10px;
        }

        .subtitle{
            text-align:center;
            color:#94a3b8;
            margin-bottom:35px;
            font-size:15px;
            line-height:1.7;
        }

        .input-group{
            margin-bottom:25px;
        }

        label{
            display:block;
            color:#e2e8f0;
            margin-bottom:10px;
            font-weight:600;
        }

        input{
            width:100%;
            padding:16px;
            border:none;
            border-radius:16px;
            background:rgba(255,255,255,0.05);
            border:1px solid rgba(255,255,255,0.08);
            color:#f8fafc;
            font-size:16px;
            outline:none;
            transition:0.3s;
        }

        input::placeholder{
            color:#64748b;
        }

        input:focus{
            border-color:#2dd4bf;
            box-shadow:0 0 18px rgba(45,212,191,0.25);
            transform:translateY(-2px);
        }

        button{
            width:100%;
            padding:16px;
            border:none;
            border-radius:16px;
            background:linear-gradient(135deg,#6366f1,#14b8a6);
            color:white;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
            transition:0.3s;
            box-shadow:0 10px 25px rgba(20,184,166,0.25);
        }

        button:hover{
            transform:translateY(-3px);
            box-shadow:0 15px 30px rgba(20,184,166,0.35);
        }

        .tips{
            margin-top:25px;
            padding:18px;
            border-radius:16px;
            background:rgba(255,255,255,0.04);
            border:1px solid rgba(255,255,255,0.05);
        }

        .tips-title{
            color:#2dd4bf;
            margin-bottom:10px;
            font-weight:bold;
        }

        .tips code{
            color:#e2e8f0;
            font-size:13px;
            word-break:break-word;
        }

    </style>
</head>

<body>

<div class="bg-circle circle1"></div>
<div class="bg-circle circle2"></div>

<div class="container">

    <div class="shield">
        🛡
    </div>

    <h1>Anti-Hacker Lab</h1>

    <div class="subtitle">
        CodeIgniter 4 Security Testing<br>
        CSRF & XSS Protection Demo
    </div>

    <form method="post" action="/form/submit">

        <?= csrf_field() ?> 

        <div class="input-group">
            <label>Enter Any Text</label>
            <input
                type="text"
                name="name"
                placeholder="Try typing something..."
                required>
        </div>

        <button type="submit">
            Submit
        </button>
    </form>

    <div class="tips">
        <div class="tips-title">
            Test XSS Attack:
        </div>

        <code>
            &lt;script&gt;document.title='Hacked'&lt;/script&gt;
        </code>

    </div>

</div>

</body>
</html>