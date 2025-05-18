<!-- 
  File: resources/views/layouts/header.blade.php
  Bootstrap navbar header component
-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">My Laravel App</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/test">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users">Users</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/users/index2">Users Index2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/test/index2">index2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/test/index3">index3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>