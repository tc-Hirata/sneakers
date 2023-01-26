<!DOCTYPE html>
<html lang="ja" >
<head>
<meta charset="UTF-8">
<title>Sneakers</title>
<link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
<link rel="stylesheet" href="{{ asset('/css/header.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
<script src="{{ asset('/js/main.js') }}"></script>
</head>
<body>
 <header id="header">
     <h1 class="site-title">
         <a href="index">
             <img src="{{ asset('/img/logo.svg') }}">
         </a>
     </h1>
     <nav id="nav">
        <ul class="nav-menu">
            <li>
                <a href="#pickup">PICK UP</a>
            </li>
            <li>
                <a href="#feature">FEATURE</a>
            </li>
            <li>
                <a href="#contact">CONTACT</a>
            </li>
        </ul>
        <ul class="nav-sns">
            <li>
                <a href="https://twitter.com/" target="_blank">Twitter</a>
            </li>
            <li>
                <a href="https://www.facebook.com/" target="_blank">facebook</a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="_blank">instagram</a>
            </li>

        </ul>
     </nav>
     <div class="toggle_btn">
        <span></span>
        <span></span>
        <span></span>
     </div>
     <div id="mask"></div>
 </header>
<main id="main">
    <div id="video">
        <video id="bg-video" src="{{ asset('video/video.mp4') }}" loop autoplay muted playsinline></video>
    </div>
    <section id="pickup">
        <h2 class="sec-title">PICK UP</h2>
            <ul class="slick-area">
                <li><img src="{{ asset('/img/pickup1.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup2.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup3.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup4.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup5.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup6.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup7.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup8.jpg') }}"></li>
                <li><img src="{{ asset('/img/pickup9.jpg') }}"></li>
            </ul>
    </section>
    <section id="feature">
        <h2 class="sec-title">FEATURE</h2>
        <div class="grid">
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature1.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature2.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature3.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature4.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature5.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature6.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature7.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature8.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
            <div class="item">
                <img class="fadein" src="{{ asset('/img/feature9.jpg') }}">
                <div class="item-content">
                    <p class="item-cat">category</p>
                    <p class="item-text">
                        テキストテキストテキストテキストテキストテキストテキストテキスト
                    </p>
                    <p class="item-date">XXXX.XX.XX</p>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <h2 class="sec-title">CONTACT</h2>
        <div class="content">
            <div class="contact-info">
                <p>テキストテキストテキスト</p>
                <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
                <p>
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                    テキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>
            </div>
            <div class="contact-form">
                <form action="#">
                    <dl>
                        <dt><label for="name">Name:</label></dt>
                        <dd><input type="text" id="name" name="your-name"></dd>
                        <dt><label for="email">Mail:</label></dt>
                        <dd><input type="email" id="email" name="your-email"></dd>
                        <dt><label for="message">Message:</label></dt>
                        <dd><textarea id="message" name="your-message"></textarea></dd>
                    </dl>
                    <div class="button">
                        <input type="submit" value="SEND">
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<footer id="footer">
    <p>&copy; Sneakers</p>
</footer>
</body>
</html>
