@extends('common.common')
@section("content")
        <!--选项卡-->
<div class="options">
    <ul class="list-unstyled " style="border:1px solid black">
        <li class="list-li">
            <span class="list-title">已选条件:</span>
            <span class="list-option">option</span>
            <span class="list-option">option</span>
            <span class="list-option">option</span>

        </li>
        <li class="list-li">
            <span class="list-title">前往城市:</span>
            <span class="list-option">option</span>
            <span class="list-option">option</span>
            <span class="list-option">option</span>
        </li>
        <li class="list-li" >
            <span class="list-title">出行天数:</span>
            <span class="list-option">option</span>
            <span class="list-option">option</span>
            <span class="list-option">option</span>
        </li>
    </ul>
</div>
<!--展示卡-->
<div class="shows">
    <div style="height: 3%" >
        <span class="text-margin"><strong><a href="#">默认排序</a></strong></span>
        <span class="text-margin"><strong><a href="javascript:void ('#');">浏览次数最多</a> </strong></span>
    </div>
    <div class="">
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·</span>
                    <span>name</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·米兰ssssssQssQQSSSS啊啊啊!sssssssss</span>
                    <span>name</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·米兰ssssssQssQQSSSS啊啊啊!sssssssss</span>
                    <span>name</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/yvLMbuLCM9y6W9P8xOtSX8OBEx46Otg9ObAa7hsh.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马!sssssssss</span>
                    <span>author</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·!</span>
                    <span>author</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·!sssssssss</span>
                    <span>name</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·!sssssssss</span>
                    <span>name</span>
                </div>
            </div>
        </a>
        <a href="#">
            <div class="show-card">
                <img src="{{asset('img/hrj30eHCcrEyCc6lTw2nr7YuaN89iVsa719nFMv6.jpeg')}}">
                <div class="show-place">
                    <span>上海·威尼斯·罗马·佛罗伦萨·!sssssssss</span>
                    <span>name</span>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection

