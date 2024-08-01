<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Career Advice Website</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <div id="chatbot"></div>
        <script>
            var botmanWidget = {
                frameEndpoint: '/botman/chat',
                chatServer: '/chatbot',
                title: 'Career Advice Bot',
                introMessage: 'Hello! How can I assist you today?',
                mainColor: '#00B2A9',
                bubbleBackground: '#00B2A9',
                bubbleAvatarUrl: '{{ asset('chatbot.png') }}',
                desktopHeight: 400,
                desktopWidth: 400,
                mobileHeight: '90%',
                mobileWidth: '90%',
                aboutText: 'Powered By Career Advice',
                customStyle: {
                    backgroundColor: '#f4f4f4',
                    fontFamily: 'Arial, sans-serif',
                    fontSize: '16px',
                    borderRadius: '10px',
                    boxShadow: '0 2px 10px rgba(0, 0, 0, 0.1)',
                    padding: '10px',
                },
                extraStyles: [
                    {
                        selector: '.botman-chat',
                        styles: {
                            'border-radius': '10px',
                            'box-shadow': '0 2px 10px rgba(0, 0, 0, 0.1)',
                            'animation': 'fadeIn 0.5s ease-out',
                        },
                    },
                    {
                        selector: '.botman-chat--message-text',
                        styles: {
                            'color': '#333',
                            'animation': 'slideIn 0.5s ease-out',
                        },
                    },
                    {
                        selector: '.botman-chat--bubble',
                        styles: {
                            'background-color': '#00B2A9',
                            'border-radius': '10px',
                            'animation': 'bounceIn 0.5s ease-out',
                        },
                    },
                    {
                        selector: '.botman-chat--header',
                        styles: {
                            'background-color': '#00B2A9',
                            'color': '#fff',
                            'animation': 'fadeInDown 0.5s ease-out',
                        },
                    },
                ],
            };
            document.addEventListener("DOMContentLoaded", function() {
                window.reloadPage = function() {
                    location.reload();
                };
            });
        </script>
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
    </body>
</html>
