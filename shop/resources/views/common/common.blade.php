<html>
<head>
    <meta http-equiv="content-type" content="text/html" charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>bootstrap</title>
    <link rel="stylesheet" type="text/css" href="{{  asset('css/app.css')  }}">
    <link rel="stylesheet" type="text/css" href="{{  asset('css/shop.css')  }}">
    <script src="http://libs.baidu.com/jquery/1.9.1/jquery.js"></script>
    <script src="{{  asset('js/app.js') }}"></script>
</head>
<body>
<div class="total">
    <!--头部-->
    <div class="header">
        <div class="header-logo">
            <img src="{{asset('img/GFMrGKiigyvSCifKug65XyXgXwZfDedHTCM62eK5.png')}}" width="100%" height="100%">
        </div>
        <div class="header-links">
            <div style="height: 45%;"> </div>
            <span class="header-link"><a href="">人工智能</a></span>
            <span class="header-link"><a href="">图标设计</a></span>
            <span class="header-link"><a href="">联系我们</a></span>
       </div>
        @if(session('islogin')===1)
            <div style=" width: 100%">
                <nav class="navbar navbar-default " >
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand " href="{{asset('shop/user/home')}}">Go Travel</a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="{{asset('shop/user/plan')}}">行程助手 <span class="sr-only">(current)</span></a></li>
                                <li><a href="{{asset('shop/upimg')}}">看美景</a></li>
                                <li><a href="#">锦囊</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">社区<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">旅行论坛</a></li>
                                        <li><a href="#">旅行问答</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">特别策划</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">何不出去走走</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">商场<span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">私人订制</a></li>
                                        <li><a href="#">当地团购</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-left">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                                <button type="submit" class="btn btn-default">搜索</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Go Travel</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{session('uname')}} <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ asset('shop/user/personal') }}">个人资料</a></li>
                                        <li><a href="{{ asset('shop/user/personal_set') }}">账号设置</a></li>
                                        <li><a href="{{ asset('shop/user/personal_icon') }}">上传头像</a></li>
                                        <li><a href="{{ asset('shop/user/password_reset') }}">修改密码</a></li>
                                        <li><a href="#">收藏列表</a></li>
                                        <li><a href="#">观看历史</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="{{ url('shop/user/logout') }}">退出登录</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </nav>
            </div>
            <div class="text-right"><span class="trip">{{ session('login') }}</span></div>
        @else
            <div class="text-right" style="background-color: aquamarine">
                <span class="text-margin"><strong><a href="{{ url('shop/user/login') }}">登录</a></strong></span>
                <span class="text-margin"><strong><a href="{{ url('shop/user/register') }}">注册</a></strong></span>
            </div>
        @endif

    </div>
    <!--内容-->
    <div class="content">
        <div class="shop col-lg-8 col-md-8 col-sm-10 col-xs-10 col-lg-offset-2  col-md-offset-2  col-xs-offset-1 col-sm-offset-1">
    @section('content')
    @show
        </div>
    </div>
    <!--尾部-->
    <div class="footer text-center">
        <div class="footer-line"></div>
        <div class="footer-links ">
            <ul class="list-unstyled">
                <li>
                    <dl>
                        <dt>关于我们</dt>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-us-0">us简介</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-us-1">联系我们</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-us-2">合作伙伴</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-us-2">&nbsp;</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>加入us</dt>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-join-0">招聘职位</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-join-0">&nbsp;</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-join-0">&nbsp;</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-join-0">&nbsp;</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>网站条款</dt>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-legal-0">会员条款</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-legal-1">社区指南</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-legal-2">版权声明</a></dd>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-legal-3">免责声明</a></dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt>帮助中心</dt>
                        <dd><a href="" target="_blank" rel="nofollow" data-bn-ipg="index-last-help-0">新手上路</a></dd>
                        <dd><a href="l" target="_blank" rel="nofollow" data-bn-ipg="index-last-help-1">使用帮助</a></dd>
                        <dd><a href="" target="_blank" data-bn-ipg="index-last-help-2">网站地图</a></dd>
                        <dd><a href="" target="_blank" data-bn-ipg="index-last-help-3">旅行工具</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
        <div class="footer-statement">
            <p class="h4">author statement &copy;</p>
        </div>
    </div>
</div>
</body>

<script>
    function cardResize(){
        $(".show-card").height(function(){
            return $(this).width();
        });
    }
    cardResize();
    $(window).resize(function(){
        //process here
        cardResize();
    });

</script>

</html>