<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
    <script src="js/main.js"></script>
</head>
<body>
<div id="sidebar">sidebar</div>
    <div id="content">
        <header>
            <div onclick="togglesidebar();"><i class="fas fa-bars"></i></div>
        </header>
        <main>
            <div class="container">
                <div class="editbox">
                    <div class="boxheader">
                        <h3 class="vertical-center">Posts</h3>
                    </div>
                    <div class="boxmain">
                        <div class="page">
                            <dl>
                                <dd>Title</dd>
                                <dd>Appelsap</dd>
                            </dl>
                            <dl>
                                <dd>Category</dd>
                                <dd><a href="">Eten</a></dd>
                            </dl>
                            <dl>
                                <dd>author</dd>
                                <dd><a href="">Sheepert_</a></dd>
                            </dl>
                            <dl>
                                <dd>Publicised</dd>
                                <dd>19-03-19, at 14:10</dd>
                            </dl>
                            <dl>
                                <dd>Status</dd>
                                <dd>Private</dd>
                            </dl>
                        </div>
                        <div class="page">
                            <dl>
                                <dd>Title</dd>
                                <dd>Vissen</dd>
                            </dl>
                            <dl>
                                <dd>Category</dd>
                                <dd><a href="">Dieren</a></dd>
                            </dl>
                            <dl>
                                <dd>Author</dd>
                                <dd><a href="">Admin</a></dd>
                            </dl>
                            <dl>
                                <dd>Publicised</dd>
                                <dd>Today at 14:01</dd>
                            </dl>
                            <dl>
                                <dd>Status</dd>
                                <dd>Private</dd>
                            </dl>
                        </div>
                        <div class="page">
                            <dl>
                                <dd>Title</dd>
                                <dd>Schapen</dd>
                            </dl>
                            <dl>
                                <dd>Category</dd>
                                <dd><a href="">Dieren</a></dd>
                            </dl>
                            <dl>
                                <dd>Author</dd>
                                <dd><a href="">Harm-Jan</a></dd>
                            </dl>
                            <dl>
                                <dd>Publicised</dd>
                                <dd>12-03-19, at 14:07</dd>
                            </dl>
                            <dl>
                                <dd>Status</dd>
                                <dd>Private</dd>
                            </dl>
                        </div>
                    </div>
                    <div class="boxfooter">
                        <form action="">
                            <input class="vertical-center" name="submit" type="submit" value="New Page">
                            <input name="_token_" type="hidden">
                        </form>
                    </div>
                </div>
                <div class="editbox">
                    <div class="boxheader">
                        <h3 class="vertical-center">New Page</h3>
                    </div>
                    <div class="boxmain">
                        <div class="anotherinputbox">
                            <div class="inputbox">
                                <input type="text" id="test">
                                <label for="test">test</label>
                                <div class="line"></div>
                            </div>
                        </div>
                    </div>
                    <div class="boxfooter">
                        <form action="">
                            <input class="vertical-center" name="submit" type="submit" value="Create Page">
                            <input name="_token_" type="hidden">
                        </form>
                    </div>
                </div>
                <div class="editbox">
                    <div class="boxheader">
                        <h3 class="vertical-center">Edit Page</h3>
                    </div>
                    <div class="boxmain">
                        <p>3</p>
                    </div>
                    <div class="boxfooter">
                        <form action="">
                            <input class="vertical-center" name="submit" type="submit" value="Save Changes">
                            <input name="_token_" type="hidden">
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">footer</div>
        </footer>
    </div>
</body>
</html>