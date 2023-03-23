<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .css-waves {
            position: relative;
            width: 100%;
            height: 15vh;
            margin-bottom: 0;
            min-height: 100px;
            max-height: 150px;
        }

        .animated-waves>use {
            animation: infinite-waves 25s cubic-bezier(0.55, 0.5, 0.45, 0.5) infinite;
        }

        .animated-waves>use:nth-child(1) {
            animation-delay: -2s;
            animation-duration: 7s;
        }

        .animated-waves>use:nth-child(2) {
            animation-delay: -3s;
            animation-duration: 10s;
        }

        .animated-waves>use:nth-child(3) {
            animation-delay: -4s;
            animation-duration: 13s;
        }

        .animated-waves>use:nth-child(4) {
            animation-delay: -5s;
            animation-duration: 20s;
        }

        @keyframes infinite-waves {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        @media (max-width: 768px) {
            .css-waves {
                height: 40px;
                min-height: 40px;
            }
        }
    </style>
</head>
<body class="bg-gray-900">
    <div class="fixed top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2 w-3/4">
        <div class="grid grid-cols-2">
            <div class="relative bg-white rounded-l-lg">
                <h1 class="animate-pulse text-4xl italic text-center font-semibold mt-36">CV DIKA LANGGENG TRIJAYA</h1>
                <div class="your-container absolute bottom-0">
                    <svg class="css-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                      <defs>
                        <path id="wave-pattern" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
                      </defs>
                      <g class="animated-waves">
                        <use href="#wave-pattern" x="48" y="0" fill="rgba(168, 85, 247, 0.7"></use>
                        <use href="#wave-pattern" x="48" y="3" fill="rgba(6, 182, 212, 0.5)"></use>
                        <use href="#wave-pattern" x="48" y="5" fill="rgba(168, 85, 247, 0.3)"></use>
                        <use href="#wave-pattern" x="48" y="7" fill="rgba(6, 182, 212, 0.3)"></use>
                      </g>
                    </svg>
                  </div>
            </div>
            <div>
                <form action="{{ route('auth-login') }}" method="post">
                    <div class="grid grid-cols-1 px-8 py-20 bg-white rounded-r-xl">
                        <h1 class="text-3xl font-bold mb-4">Sign In</h1>
                        <input type="text" name="username" placeholder="Username" class="border-b-2 border-cyan-500 focus:outline-none font-semibold placeholder:font-normal text-lg px-1 py-2 mb-4">
                        <input type="text" name="password" placeholder="Password" class="border-b-2 border-cyan-500 focus:outline-none font-semibold placeholder:font-normal text-lg px-1 py-2 mb-10">
                        <button class="w-full bg-gradient-to-r from-cyan-500 to-purple-500 text-lg py-2 text-white">CONTINUE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
