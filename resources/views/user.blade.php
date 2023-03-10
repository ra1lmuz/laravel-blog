@extends('layouts.index')

@section('page_title', 'Home Page')
@section('content')
    <!-- Main -->
    <div id="main">

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#">Magna sed adipiscing</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-11-01">1 Ноября 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg"
                                                                                      alt=""/></a>
                </div>
            </header>
            <a href="#" class="image featured"><img src="images/pic01.jpg" alt=""/></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod
                placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non
                congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus
                vitae, ultricies congue gravida diam non fringilla.</p>
            <footer>
                <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#">Ultricies sed magna euismod enim vitae gravida</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-25">1 Ноября 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg"
                                                                                      alt=""/></a>
                </div>
            </header>
            <a href="#" class="image featured"><img src="images/pic02.jpg" alt=""/></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod
                placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non
                congue ullam corper.</p>
            <footer>
                <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                </ul>
            </footer>
        </article>

        <!-- Post -->
        <article class="post">
            <header>
                <div class="title">
                    <h2><a href="#">Euismod et accumsan</a></h2>
                    <p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
                </div>
                <div class="meta">
                    <time class="published" datetime="2015-10-22">1 Ноября 2015</time>
                    <a href="#" class="author"><span class="name">Jane Doe</span><img src="images/avatar.jpg"
                                                                                      alt=""/></a>
                </div>
            </header>
            <a href="#" class="image featured"><img src="images/pic03.jpg" alt=""/></a>
            <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod
                placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non
                congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus
                vitae, ultricies congue gravida diam non fringilla. Cras vehicula tellus eu ligula viverra, ac fringilla
                turpis suscipit. Quisque vestibulum rhoncus ligula.</p>
            <footer>
                <ul class="actions">
                    <li><a href="#" class="button big">Continue Reading</a></li>
                </ul>
                <ul class="stats">
                    <li><a href="#" class="icon fa-heart">28</a></li>
                    <li><a href="#" class="icon fa-comment">128</a></li>
                </ul>
            </footer>
        </article>


        <!-- Pagination -->
        <ul class="actions pagination">
            <li><a href="" class="disabled button big previous">Previous Page</a></li>
            <li><a href="#" class="button big next">Next Page</a></li>
        </ul>

    </div>
@endsection
