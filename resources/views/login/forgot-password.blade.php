@extends('layouts.main')

@section('container')


    <style>

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgb(250, 248, 248);
            box-shadow: 0 15px 25px rgba(0, 126, 184, 0.6);
            border-radius: 10px;
            border: 1px solid #9be7e1;
        }
        @media (max-width: 768px) {
            .login-box {
                width: 80%;
                height: auto;
            }
        }
        .login-box h2 {
            margin: 20px 0 30px;
            color: #004741;
            text-align: center;
        }
        .login-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #004741;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #004741;
            background: transparent;
            outline: none;
        }
        .login-box button {
            float: right;
            padding: 10px 20px;
            color: #317671;
            border: none;
            font-size: 16px;
            letter-spacing: 4px;
            background-color: transparent;
            cursor: pointer;
        }
        .login-box button:hover {
            background: #317671;
            color: #fff;
            border-radius: 5px;
        }
        .c-box{
            width: 100%;
            height: 600px;
            align-content: center;
            align-items: center;
            justify-content: center;
            display: flex;
        }
    </style>

<div class="c-box">
    <div class="login-box">
        <h2>Request Password</h2>
        <form id="forgot-password-form" onsubmit="sendTokenEmail(event)">
            <input type="email" name="email" id="email" required placeholder="Enter your email">
            <button type="submit">Send Request</button>
        </form>
    
    </div>
</div>


@endsection