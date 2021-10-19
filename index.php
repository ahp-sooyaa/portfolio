<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="A personal portfolio site of aunghtetpaing">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-control" content="public, max-age=31536000">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        :root {
            --primary-color: #004E92;
            --neutral-color: #E5E7EB
        }

        body {
            margin: 0;
            background-color: var(--neutral-color);
            font-family: 'Cabin', sans-serif;
            color: #000
        }

        header {
            display: flex;
            align-items: center;
            min-height: 500px;
            position: relative;
            background: linear-gradient(180deg, #000428, #004E92)
        }

        .header-wrapper {
            text-align: center;
            padding: 64px 0 96px 0;
            margin: 0 auto;
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .header {
            flex: 1;
            margin-left: 0;
            text-align: center
        }

        .header h1 {
            font-size: 2rem;
            line-height: 1;
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.5em;
            background: radial-gradient(circle at center, #21C8F6 0, #637BFF);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent
        }

        .header span {
            display: inline-block;
            color: #fff;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: .5rem
        }

        .header p {
            font-size: 1.125rem;
            color: #fff;
            line-height: 1.5em;
            margin: 0;
            letter-spacing: .01em
        }

        .custom-shape-divider-bottom-1634006919 {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0
        }

        .custom-shape-divider-bottom-1634006919 svg {
            position: relative;
            display: block;
            width: calc(100% + 1.3px);
            height: 90px
        }

        .custom-shape-divider-bottom-1634006919 .shape-fill {
            fill: #E5E7EB
        }

        @media (max-width:767px) {
            .custom-shape-divider-bottom-1634006919 svg {
                width: calc(100% + 1.3px);
                height: 45px
            }
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        main {
            display: block
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }
    </style>

    <title>Aung htet paing</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>

    <main>
        <header>
            <div class="header-wrapper">
                <div class="header">
                    <span>Hi, I'm</span>
                    <h1>
                        Aung Htet Paing
                    </h1>
                    <p>
                        I'm very passionate in web development and love building something awesome.
                    </p>
                </div>
            </div>
            <div class="custom-shape-divider-bottom-1634006919">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                    preserveAspectRatio="none">
                    <path
                        d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z"
                        class="shape-fill"></path>
                </svg>
            </div>
        </header>

        <section class="projects-wrapper">
            <div class="projects">
                <div class="projects-header">
                    <h2>Projects</h2>
                    <p>Let's me introduce my projects</p>
                </div>
                <div class="projects-list">
                    <div class="projects-card">
                        <div>
                            <img src="images/hielo_thumbnail.webp" alt="hielo-thumbnail" class="projects-img">
                        </div>
                        <div class="projects-info">
                            <h3>Hielo</h3>
                            <p>
                                A open source multi user blogging app built with Laravel 7, Vue 2 & CSS3. You can
                                schduled blog post to publish, bookmark your favorite post, give like and comments.
                            </p>
                            <div class="projects-tags">
                                <span class="projects-tag">
                                    Laravel
                                </span>
                                <span class="projects-tag">
                                    CSS
                                </span>
                                <span class="projects-tag">
                                    Vue
                                </span>
                            </div>
                            <a href="https://github.com/ahp-sooyaa/hielo" class="projects-link">
                                View source on github
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="projects-card">
                        <div>
                            <img src="images/forum_thumbnail.webp" alt="forum-thumbnail" class="projects-img">
                        </div>
                        <div class="projects-info">
                            <h3>Forum</h3>
                            <p>
                                A open source forum application built with laravel 8, vue 2 and tailwindcss. You can
                                create new thread, reply, search & filter threads. Algolia is integrated for search
                                function.
                            </p>
                            <div class="projects-tags">
                                <span class="projects-tag">
                                    Laravel
                                </span>
                                <span class="projects-tag">
                                    Vue
                                </span>
                                <span class="projects-tag">
                                    Tailwind
                                </span>
                            </div>
                            <a href="https://github.com/ahp-sooyaa/forum" class="projects-link">
                                View source on github
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact-header">
                <h2>Contact me</h2>
                <p>Don't hestitate to contact me</p>
            </div>
            <div class="contact-info">
                <a href="#" class="contact-card">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Twitter</title>
                        <path
                            d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z" />
                    </svg>
                    <span>Say Hi</span>
                </a>
                <a href="https://www.linkedin.com/in/aung-htet-paing-852380191/" class="contact-card">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>LinkedIn</title>
                        <path
                            d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                    </svg>
                    <span>Say Hi</span>
                </a>
                <a href="https://github.com/ahp-sooyaa" class="contact-card">
                    <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                    <span>Say Hi</span>
                </a>
            </div>
            </div>
        </section>

        <footer>
            <div>
                \aunghtetpaing.me/
            </div>
        </footer>
    </main>
    <link rel="stylesheet" href="css/app.min.css">
    <link rel="stylesheet" href="css/normalize.css">
</body>

</html>