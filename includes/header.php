<!DOCTYPE html>
<hml>
<head>
    <title>Blogs</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
    <header>
        <h1>My blog</h1>
    </header>
    
    <nav>
        <ul class="nav">
            <li class="nav-item"><a class="nav-link" href="/project01_myarticleblogs">Home</a></li>
            <?php if (Auth::isLoggedIn()) : ?>

                <li class="nav-item"><a class="nav-link" href="/project01_myarticleblogs/admin">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="/project01_myarticleblogs/logout.php">Log Out</a></li>
            
            <?php else :?>

                <li class="nav-item"><a class="nav-link" href="/project01_myarticleblogs/login.php">Log In</a></li>

            <?php endif; ?>

            <li class="nav-item"><a class="nav-link" href="/project01_myarticleblogs/contact.php">Contact</a></li>
        </ul>
    </nav>

  <main>