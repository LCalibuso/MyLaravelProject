<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dran Megadran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        .pang-border-lang {
            border: 2px solid red;
            padding: 10px;
        }
        .megablack {
            background-color: rgb(17, 15, 15);
        }
        .medjgray{
            background-color: #212529;
        }
        .mt-more{
            margin-top: 4rem;
        }
        .sticky-nav {
            position: sticky;
            top: 0;
            z-index: 1020;
            transition: all 0.3s ease;
        }
        html{
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>
        <section id="home">
        <div class="megablack">
            <div class="d-flex flex-column justify-content-center align-items-center vh-100">
                <p class="text-light fs-1">Hello, I'm  <span class="text-danger">Leonard</span>.</p>
                <p class="text-light fs-1">I'm a front end web developer.</p>
                <a href="">
                <div class="text-danger">
                    View my work
                </div>
            </a>
            </div>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg navbar-dark medjgray sticky-nav">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-light" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link text-light" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>
