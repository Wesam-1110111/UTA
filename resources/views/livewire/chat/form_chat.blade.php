@extends('layouts.master')
@section('css')
@toastr_css

{{-- اكواد css --}}

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>
    /****** More of My Resets *******/
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    .main-grid button {
        background-color: transparent;
        color: inherit;
        border-width: 0;
        padding: 0;
        margin: 0;
        cursor: pointer;
        text-align: inherit;
    }

    .main-grid img {
        display: block;
        max-width: 100%;
    }

    /* Responsive Variables */
    @media (min-width:768px) {
        .is-only-mobile {
            display: none !important;
        }
    }

    /* Multi direcrtion Languages Support Variables*/
    /* colors */
    :root {
        --white: #fff;
        --dark-gray: #333;
        --main-gray: #ededed;
        --light-gray: #f7f7f7;
        /* --dark-green: #009688; */
        --info-message: rgba(225, 245, 254, .92);
    }

    ::-webkit-scrollbar {
        width: 6px !important;
        height: 6px !important;
        background-color: #f5f5f5;
    }

    ::-webkit-scrollbar-thumb {
        background-color: rgba(0, 0, 0, .2);
    }

    ::-webkit-scrollbar-track {
        background-color: rgba(255, 255, 255, 0.08);
    }

    html {
        font-size: 1px;
    }

    body {
        font-family: Segoe UI, Helvetica Neue, Helvetica, Lucida Grande, Arial, Ubuntu, Cantarell, Fira Sans, sans-serif;
        font-size: 16rem;
        line-height: 1.3;
        color: var(--dark-gray);
        margin: 0 !important;
    }

    html {
        background: linear-gradient(to bottom, var(--dark-green) 1px, var(--dark-green) 130px, #dddbd1 131px, #d2dbdc 100%);
        background-repeat: no-repeat;
        min-height: 100vh;
    }

    .u-flex {
        display: flex !important;
    }

    .u-flex-column {
        flex-direction: column !important;
    }

    .u-margin-end {
        margin-right: 10px !important;
    }

    .u-hide {
        display: none !important;
    }

    /* animation */
    @keyframes clickableAnimation {
        0% {
            transform: scale(1);
        }

        95% {
            transform: scale(1);
        }

        96% {
            transform: scale(1.5) rotate(-30deg);
        }

        97% {
            transform: scale(1.5) rotate(30deg);
        }

        100% {
            transform: scale(1);
        }
    }

    .u-animation-click {
        animation: clickableAnimation 20s ease-in-out -17s infinite;
    }

    /*icons*/
    .icon-back {
        transform: scale(1.4);
        transform-origin: center;
    }

    .icon-status {
        filter: grayscale(1) opacity(0.3) invert(1);
    }

    .icon-silent {
        filter: grayscale(1) opacity(0.3);
    }

    .icon-attach {
        /*transform:rotateZ(70deg);
 transform-origin:center*/
    }

    .icon-menu {
        text-align: center;
    }

    .icon-menu::before {
        content: "";
        display: inline-block;
        vertical-align: middle;
        width: 4px;
        height: 4px;
        border-radius: 50%;
        background-color: var(--dark-gray);
        box-shadow: 0px -6px var(--dark-gray), 0px 6px var(--dark-gray);
    }

    /* Grid Layout */
    .main-grid {
        --private-block-margins: 0;
        /* position: fixed; */
        /* private variables are for local componenet use */
        left: 0;
        right: 0;
        top: var(--private-block-margins);
        bottom: var(--private-block-margins);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .06), 0 2px 5px 0 rgba(0, 0, 0, .2);
        overflow: hidden;
        /*logic styles*/
        min-height: 60vh;
    }

    @media (max-width:767px),
    (min-width:768px) and (max-width:1023px),
    (min-width:1024px) and (max-width:1439px) {
        .main-grid>* {
            max-height: 100vh;
        }
    }

    @media (min-width:1440px) {
        .main-grid>* {
            max-height: calc(100vh - 40px);
        }
    }

    @media (min-width:768px) {
        .main-grid {
            display: grid;
            grid-template-areas: "side-a main side-b";
            grid-template-columns: minmax(260px, 30%) 1fr auto;
        }
    }

    @media (min-width:1440px) {
        .main-grid {
            --private-block-margins: 20px;
            /* width: 1396px; */
            /* margin: 0 auto; */
            width: 100%;
        }
    }

    @media (max-width:767px) {
        .main-grid.is-main-info-open .main-side {
            display: none;
        }

        .main-grid.is-main-info-open .main-content {
            display: none;
        }

        .main-grid.is-main-info-open .main-info {
            width: 100%;
            height: 100%;
        }
    }

    @media (min-width:768px) and (max-width:1023px) {
        .main-grid.is-main-info-open {
            grid-template-areas: "side-a side-b";
            grid-template-columns: minmax(260px, 30%) 1fr;
        }

        .main-grid.is-main-info-open .main-content {
            display: none;
        }

        .main-grid.is-main-info-open .main-info {
            width: auto;
        }
    }

    @media (max-width:767px) {
        .main-grid.is-message-open .main-content {
            transform: translateX(-100%);
        }
    }

    .main-side {
        grid-area: side-a;
    }

    .main-content {
        grid-area: main;
    }

    .main-info {
        grid-area: side-b;
    }

    /* elements */
    .profile-image {
        flex-shrink: 0;
        display: block;
        height: 40px;
        border-radius: 50%;
    }

    .big-title {
        margin: 5px 0;
        font-size: 19rem;
    }

    .section-title {
        color: var(--dark-green);
        font-size: 14rem;
        margin-bottom: 10px;
    }

    .info-text {
        font-size: 14rem;
        color: rgba(0, 0, 0, .45);
    }

    .status {
        letter-spacing: -14px;
        filter: grayscale(1);
    }

    .status.is-seen {
        filter: grayscale(0);
    }

    .text-input {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
        background-color: var(--white);
        padding: 10px;
        margin: 5px 10px;
        border-radius: 20px;
        border-width: 0;
    }

    .text-input:focus {
        outline: none;
    }

    .common-search {
        display: flex;
        flex-shrink: 0;
        background: var(--light-gray);
        position: relative;
        transition: 0.2s;
    }

    .common-search::before {
        content: "🔎";
        position: absolute;
        left: 30px;
        top: 15px;
        filter: grayscale(1) opacity(0.5);
    }

    .common-search:focus-within {
        background-color: var(--white);
    }

    .common-search .text-input {
        flex: 1;
        padding-left: 50px;
        margin: 8px 16px;
    }

    .unread-messsages {
        display: block;
        min-width: 20px;
        padding: 3px;
        border-radius: 12px;
        margin: 0 5px;
        background-color: #15b9d9;
        color: var(--white);
        font-size: 12rem;
        font-weight: bold;
        text-align: center;
    }

    .unread-messsages:empty {
        display: none;
    }

    .main-grid .common-button {
        padding: 8px;
    }

    .main-grid .common-button:hover,
    .main-grid .common-button:focus {
        outline: none;
    }

    .main-grid .common-button:hover .icon,
    .main-grid .common-button:focus .icon {
        filter: grayscale(1) opacity(1);
    }

    .main-grid .common-button .icon {
        display: block;
        width: 24px;
        height: 24px;
        font-size: 18px;
        vertical-align: middle;
        text-align: center;
        filter: grayscale(1) opacity(0.5);
        transition: 0.2s;
    }

    .twitter {
        display: block;
        color: rgba(29, 161, 242, 1.00);
    }

    .twitter-label {
        margin-right: 10px;
    }

    .twitter-user {
        font-size: 20px;
    }

    /*** components ***/
    .common-header {
        --common-header-border-color: #e0e0e0;
        display: flex;
        background-color: var(--main-gray);
        height: 73px;
        padding: 10px 16px;
        flex-shrink: 0;
    }

    .common-header-content {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: block;
    }

    .common-header-title {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: block;
    }

    .common-header-start {
        display: flex;
        margin-right: auto;
    }

    .common-header-content {
        margin: auto 15px;
        line-height: 1.5;
    }

    .common-nav-list {
        display: flex;
    }

    .common-nav-item {
        margin-left: 10px;
    }

    /*main*/
    .main-content {
        display: flex;
        flex-direction: column;
    }

    .main-content .common-header {
        border-left: solid 1px var(--common-header-border-color);
    }

    @media (max-width:767px) {
        .main-content {
            position: fixed;
            right: -100%;
            top: 0;
            bottom: 0;
            width: 100%;
            transition: transform 0.4s;
        }
    }

    .messanger {
        overflow-y: auto;
        scrollbar-width: thin;
        /* flex: 1; */
        background-color: #e5ddd5;
    }

    .messanger-list {
        display: flex;
        flex-direction: column;
        padding: 20px 7%;
        height: 455px;
    }

    .common-message {
        position: relative;
        background-color: var(--white);
        width: -moz-fit-content;
        width: fit-content;
        max-width: 500px;
        padding: 8px;
        border-radius: 8px;
        box-shadow: 0 1px 0.5px rgba(0, 0, 0, .13);
        margin-bottom: 10px;
    }

    .common-message time {
        font-size: 11rem;
        color: #dfdfdf;
        float: right;
        margin-top: 8px;
    }

    .common-message .status {
        float: right;
        padding-right: 10px;
        text-align: end;
    }

    .common-message::before {
        position: absolute;
        left: -10px;
        top: 0;
        content: "";
        display: block;
        border: solid;
        border-width: 0px 16px 16px 0px;
        border-color: transparent;
        border-right-color: var(--white);
    }

    .common-message.is-you {
        --user-color-message: #37b7c3;
        align-self: flex-end;
        background-color: var(--user-color-message);
        color: #fff;
        text-align: right;
    }

    .no {
        display: block
    }

    .common-message.is-you::before {
        left: auto;
        right: -28px;
        border-width: 0px 16px 16px 16px;
        border-color: transparent;
        border-left-color: var(--user-color-message);
    }

    .common-message.is-you+.is-you::before {
        display: none;
    }

    .common-message.is-other+.is-other::before {
        display: none;
    }

    .common-message.is-time {
        align-self: center;
        background-color: var(--info-message);
        color: rgba(74, 74, 74, .88);
        font-size: 12rem;
        text-transform: uppercase;
    }

    .common-message.is-time::before {
        display: none;
    }

    .message-box {
        display: flex;
        flex-shrink: 0;
        background-color: #f0f0f0;
        padding: 5px 10px;
    }

    .message-box .text-input {
        flex: 1;
    }

    .message-box .text-input:empty::before {
        content: "Type a message";
        font-size: 15rem;
        opacity: 0.5;
    }

    /*side (users)*/
    .main-side {
        display: flex;
        flex-direction: column;
        background-color: var(--white);
    }

    .chats {
        overflow-y: auto;
        scrollbar-width: thin;
        background-color: var(--white);
    }

    .chats-item {
        /* layout grid */
        /*** end grid ***/
        /*overrides last item*/
    }

    .main-grid .chats-item-button {
        display: grid;
        grid-template-columns: 50px 1fr;
        grid-column-gap: 15px;
        padding: 0 15px;
        cursor: pointer;
        grid-template-areas: "image header" "image content";
    }

    .main-grid .chats-item-button:focus {
        background-color: #ebebeb;
        outline: none;
    }

    .chats-item .profile-image {
        grid-area: image;
    }

    .chats-item-header {
        grid-area: header;
    }

    .chats-item-content {
        grid-area: content;
    }

    .chats-item .profile-image {
        flex-shrink: 0;
        height: 50px;
        margin: auto;
    }

    .chats-item-header {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: block;
        display: flex;
        padding-top: 10px;
    }

    .chats-item-title {
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        display: block;
        flex: 1;
        font-weight: bold;
        margin-right: 10px;
    }

    .chats-item-time {
        font-size: 1.5rem;
        opacity: 0.6;
    }

    .chats-item-last {
        flex: 1;
        opacity: 0.6;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .chats-item-content {
        display: flex;
        padding-bottom: 10px;
        border-bottom: solid 1px #f2f2f2;
    }

    .chats-item-info {
        display: flex;
    }

    .chats-item:last-child .chats-item-content {
        border-bottom-width: 0;
    }

    /*side (chat info)*/
    .main-info {
        display: flex;
        flex-direction: column;
        background-color: var(--white);
        width: 300px;
    }

    .main-info .common-header {
        border-left: solid 1px var(--common-header-border-color);
    }

    .main-info-content {
        overflow-y: auto;
        scrollbar-width: thin;
        background-color: var(--light-gray);
    }

    .main-info-image {
        display: block;
        max-width: 200px;
        margin: 0 auto;
        margin-bottom: 20px;
        border-radius: 50%;
    }

    .common-box {
        background-color: var(--white);
        padding: 20px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, .08);
        margin-bottom: 10px;
    }

    .common-box p {
        font-size: 14rem;
        color: #4a4a4a;
    }

    /* CSS Logilcs */
    #message-box {
        /*when textbox empty show microhpone*/
        /*when textbox with texy show submit button*/
    }

    .main-grid #message-box:empty~#submit-button {
        display: none;
    }

    .main-grid #message-box:not(:empty)~#voice-button {
        display: none;
    }
</style>

@section('title')
الدردشة
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
    الدردشة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row chat-prt">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                





                



                    {{-- كوود html --}}

{{-- @section('content') --}}
<section class="main-grid">
    <aside class="main-side">
        <section class="common-alerts"><!-- optional alert message --></section>
        <section class="chats">
            <ul class="chats-list" style="padding: 10px; border-bottom: 1px solid #6c757d42">

                @foreach ($get_teacher as $teacher)

                <a href="{{route('showchat',$teacher->teacher->id)}}">
                    <li class="chats-item" style="list-style: none;">
                        
                        <div class="chats-item-button js-chat-button" role="button" tabindex="0">
                            <img class="profile-image" src="{{asset('./assets/images/teacher.png')}}"
                                    alt="Rachel Bratt Tannenbaum">
                            
                            <header class="chats-item-header">
                                <h5 cwlass="chats-item-title">{{$teacher->teacher->Name}}

                                    </h5>
                                {{-- <time class="chats-item-time">23</time> --}}
                            </header>
                            <div class="chats-item-content">
                                {{-- <p class="chats-item-last">online</p> --}}
                                
                                {{-- <ul class="chats-item-info">
                                    <li class="chats-item-info-item u-hide"><span class="icon-silent">🔇</span></li>
                                    <li class="chats-item-info-item"><span class="unread-messsages">
                                    </span></li>  
                                    </span></li>
                                </ul> --}}
                            </div>
                            
                        </div>
                        
                    </li>
                </a>
                @endforeach

            </ul>
            
        </section>
    </aside>
    @if ($id !== null)
    <main class="main-content">
        <header class="common-header" style="display: flex; align-items: center !important;">

            <a href="{{route('showchat')}}" style="color: #333;">
                <i class="fa-solid fa-arrow-right" style="font-size: 20px; margin-right: 10px;"></i>
            </a>

        </header>
        <div class="messanger">
            <ol class="messanger-list" style="direction:ltr">

                @foreach ($chats as $chat)
    

                @if (strpos( $chat->body, 'techer' ) !== FALSE)
                <li class="common-message is-other" style="direction:ltr">
                    
                    <p class="common-message-content">
                        {{substr($chat->body, 8)}}
                    </p>
                    
                    <time style="font-size:10px/*rtl:14px*/;" datetime>{{$chat->created_at}}</time>
                </li>
                    @else
                    <li class="common-message is-you no" style="direction:ltr">
                        <p class="common-message-content" >
                            
                            {{substr($chat->body, 8)}}
                            
                        </p>
                        <time style="font-size:10px/*rtl:14px*/;" datetime>{{$chat->created_at}}</time>
                    </li>

                @endif


                
                @endforeach

            </ol>
        </div>
            <div class="messanger">

            </div>
        
        <form action="{{route('sendchat',$id)}}" method="POST">
            @csrf
              <div class="message-box">
  
                  <input class="text-input" id="message-box" name="message" autocomplete="off" placeholder="Type a message" contenteditable>
                  <input type="hidden" value="{{$id}}" name="teacher_id">
  
                  <button type="btn" class="common-button"><span class="icon">➤</span></button>
              </div>
          </form>

    </main>
    @else
    <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; background-image: url({{asset('index/images/top-view-speech-bubbles-megaphones.jpg')}}); background-size: cover; position: relative;">
        <div class="trans-ground" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; right: 0; bottom: 0; background: #000; opacity: 0.2;"></div>
        <div class="mb-3" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; padding: 25px; z-index: 100; border-radius: 50px; width: fit-content; background-color: #fff;">
            <span><i class="fa-solid fa-comment-dots" style="font-size: 42px;"></i></span>
        </div>
        <div class="mt-3" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px; padding: 15px; z-index: 100; border-radius: 4px; width: fit-content; background-color: #fff;">
        <p style="font-size: 20px; color: #444;">لبدء محادثة جيدة أضغط على زر الرسائل من الصفحة الشخصية للشخص لبدء المحادثة معه</p>
        </div>
    </div>
    @endif
    <aside class="main-info u-hide">
        <header class="common-header">
            <button class="common-button js-close-main-info"><span class="icon">❌</span></button>
            <div class="common-header-content">
                <h3 class="common-header-title">Info</h3>
            </div>
        </header>
        <div class="main-info-content">
            <section class="common-box">
                <img class="main-info-image"
                    src="https://scontent.fhfa1-2.fna.fbcdn.net/v/t1.0-1/p100x100/10325799_276849335820343_269039155920934591_n.png?_nc_cat=101&_nc_sid=dbb9e7&_nc_ohc=fxci6qYcSvoAX-bZfj2&_nc_ht=scontent.fhfa1-2.fna&oh=ad1c246e7e4a52c607aafd99ed7217a2&oe=5EEAF8B0"
                    alt="CSS Masters Israel">
                <h4 class="big-title">CSS Masters </h4>
                <p class="info-text">Created 6/11/2013 at 22:45</p>
            </section>
            <section class="common-box">
                <h5 class="section-title">Description</h5>
                <p>Out main channel of the comunity is on Fecbook: <a
                        href="https://www.facebook.com/groups/css.masters.israel/">http://bit.ly/2Up8On5</a></p>
            </section>
            <section class="common-box">
                <h5 class="section-title">Other content</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto odit voluptatem magnam sequi
                    dolorem soluta assumenda ipsum iusto culpa velit repudiandae vitae minus minima corporis labore sit,
                    molestias, a ut!</p>
            </section>
        </div>
    </aside>
</section>
{{-- @endsection --}}













            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
    @livewireScripts

    {{-- كود js --}}
@endsection
