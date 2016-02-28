<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sutki.kg</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="../css/materialize.css"/>
    <link rel="stylesheet" href="../css/style.css"/>

</head>
<body>

<header>
    <nav class="light-blue darken-4 secondary">
        <div class="nav-wrapper container">
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="sass.html">О нас</a></li>
                <li><a href="badges.html">FAQ</a></li>
                <li><a href="partials/contacts.php">Контакты</a></li>
            </ul>
        </div>
    </nav>
    <!--    <div class="navbar-fixed">-->
    <nav class="white primary">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo">
                <img src="../images/logo.png" alt=""/>
            </a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light btn red white-text waves-effect waves-light btn modal-trigger" href="#modal1">Добавить квартиру</a></li>
                <li><a class="waves-effect waves-light btn white-text light-blue darken-4">Вход</a></li>
            </ul>
        </div>
    </nav>
    <!--    </div>-->

    <!-- Modal To login -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
    </div>

</header>


<div class="wrapper">
    <div class="container">
        <h4>Контакты</h4>

        <div class="row">
            <div class="col s12 m5">
                <div class="card-panel teal">
          <span class="white-text">

          </span>
                </div>
            </div>
        </div>

    </div>
</div><!-- end wrapper -->

<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../js/materialize.js"></script>

<script>
    $(document).ready(function(){
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        $('.modal-trigger').leanModal();
    });
</script>
</body>
</html>