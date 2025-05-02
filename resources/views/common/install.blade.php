<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>独角数卡安装程序</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
    <meta name="renderer" content="webkit">

    <style>
        body {
            background: #fff;
            margin: 0;
            padding: 0;
            line-height: 1.5;
        }
        body, input, button {
            font-family: 'Open Sans', sans-serif;
            font-size: 16px;
            color: #7E96B3;
        }
        .container {
            max-width: 515px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }
        a {
            color: #18bc9c;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }

        h1 {
            margin-top:0;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 28px;
            font-weight: normal;
            color: #3C5675;
            margin-bottom: 0;
        }

        form {
            margin-top: 40px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group .form-field:first-child input {
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
        }
        .form-group .form-field:last-child input {
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        .form-field input {
            background: #EDF2F7;
            margin: 0 0 1px;
            border: 2px solid transparent;
            transition: background 0.2s, border-color 0.2s, color 0.2s;
            width: 100%;
            padding: 15px 15px 15px 180px;
            box-sizing: border-box;
        }
        .form-field input:focus {
            border-color: #18bc9c;
            background: #fff;
            color: #444;
            outline: none;
        }
        .form-field label {
            float: left;
            width: 160px;
            text-align: right;
            margin-right: -160px;
            position: relative;
            margin-top: 18px;
            font-size: 14px;
            pointer-events: none;
            opacity: 0.7;
        }
        button,.btn {
            background: #3C5675;
            color: #fff;
            border: 0;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            padding: 15px 30px;
            -webkit-appearance: none;
        }
        button[disabled] {
            opacity: 0.5;
        }

        #error,.error,#success,.success {
            background: #D83E3E;
            color: #fff;
            padding: 15px 20px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
        #success {
            background:#3C5675;
        }

        #error a, .error a {
            color:white;
            text-decoration: underline;
        }
    </style>
</head>

<body>
<div class="container">
    
    <h2>独角数卡</h2>
    <div>

        <p>每个梦想的路上，一起前行....！
            <a href="https://t.me/dujiaoka" id="qq-group-link" target="_blank">
                👉🏻加入Telegram交流群
            </a>
        </p>

        <form method="post">
            <div id="error" style="display:none"></div>
            <div id="success" style="display:none"></div>
            {{ csrf_field() }}
            <div class="form-group">
                <div class="form-field">
                    <label>MySQL 数据库地址</label>
                    <input name="db_host" value="127.0.0.1" required="">
                </div>

                <div class="form-field">
                    <label>MySQL 端口</label>
                    <input name="db_port" value="3306" required="">
                </div>
                <div class="form-field">
                    <label>MySQL 数据库名</label>
                    <input name="db_database" value="dujiaoka" required="">
                </div>

                <div class="form-field">
                    <label>MySQL 用户名</label>
                    <input name="db_username" value="root" required="">
                </div>

                <div class="form-field">
                    <label>MySQL 密码</label>
                    <input name="db_password"  required="">
                </div>
            </div>

            <div class="form-group">
                <div class="form-field">
                    <label>Redis 连接地址</label>
                    <input name="redis_host" value="127.0.0.1" required="">
                </div>

                <div class="form-field">
                    <label>Redis 密码</label>
                    <input name="redis_password" value="" placeholder="默认不填写">
                </div>

                <div class="form-field">
                    <label>Redis 端口</label>
                    <input name="redis_port" value="6379" required="">
                </div>

            </div>

            <div class="form-group">
                <div class="form-field">
                    <label>网站名称</label>
                    <input type="title" value="独角数卡" name="title" required="">
                </div>

                <div class="form-field">
                    <label>网站url</label>
                    <input name="app_url" value="" required="" placeholder="例如：http://dujiaoka.com" />
                </div>


                <div class="form-field">
                    <label>后台登录路径</label>
                    <input  name="admin_path" value="/admin" required="" placeholder="例如：/admin">
                </div>

            </div>

            <div class="form-buttons">
                <button type="submit">点击安装</button>
            </div>
        </form>

        <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
        <script>
            $(function () {
                $('form:input:first').select();

                $('form').on('submit', function (e) {
                    e.preventDefault();

                    var $button = $(this).find('button')
                        .text('安装中...')
                        .prop('disabled', true);
                    var adminurl = $("input[name='admin_path']").val()
                    $.post('{{ url('/do-install') }}', $(this).serialize())
                        .done(function (ret) {
                            if (ret === 'success') {
                                $('#error').hide();
                                $("#success").text("安装成功！您的后台登录账号密码均为：admin，请及时登录修改！").show();
                                $('<a class="btn" href="/">访问首页</a> <a class="btn" href=\"'+ adminurl +'\" style="background:#18bc9c">访问后台</a>').insertAfter($button);
                                $button.remove();
                            } else {
                                $('#error').show().text(ret);
                                $button.prop('disabled', false).text('点击安装');
                                $("html,body").animate({
                                    scrollTop: 0
                                }, 500);
                            }
                        })
                        .fail(function (data) {
                            $('#error').show().text('发生错误:\n\n' + data.responseText);
                            $button.prop('disabled', false).text('点击安装');
                            $("html,body").animate({
                                scrollTop: 0
                            }, 500);
                        });

                    return false;
                });
            });
        </script>
    </div>
</div>
</body>
</html>
