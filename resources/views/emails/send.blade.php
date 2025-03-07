<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Hello, {{$first_name}}.</h1>
<p class="subtitle">Welcome to new the department!</p>
<p>your current department has been change to {{$department}}</p>
</body>
<style>
    :root {
        --bg-color: hsl(49 37% 94%);
        --typewriterSpeed: 6s;
        --typewriterCharacters: 24;
    }

    body {
        margin: 0;
        font-family: "Source Sans Pro", sans-serif;
        min-height: 100vh;
        display: grid;
        place-content: center;
        text-align: center;
        background: var(--bg-color);
    }

    h1 {
        font-size: clamp(1rem, 3vw + 1rem, 4rem);
        position: relative;
        font-family: "Source Code Pro", monospace;
        position: relative;
        width: max-content;
    }

    h1::before,
    h1::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

    h1::before {
        background: var(--bg-color);
        animation: typewriter var(--typewriterSpeed)
        steps(var(--typewriterCharacters)) 1s forwards;
    }

    h1::after {
        width: 0.125em;
        background: black;
        animation: typewriter var(--typewriterSpeed)
        steps(var(--typewriterCharacters)) 1s forwards,
        blink 750ms steps(var(--typewriterCharacters)) infinite;
    }

    .subtitle {
        color: hsl(0 0% 0% / 0.7);
        font-size: 2rem;
        font-weight: 400;
        opacity: 0;
        transform: translateY(3rem);
        animation: fadeInUp 2s ease calc(var(--typewriterSpeed) + 2s) forwards;
    }

    @keyframes typewriter {
        to {
            left: 100%;
        }
    }

    @keyframes blink {
        to {
            background: transparent;
        }
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    #yt-link {
        position: absolute;
        bottom: 2em;
        width: 100%;
        color: hsl(0 0 0 / 0.7);

    &:hover,
    &:focus {
         color: teal;
     }
    }

</style>
</html>
