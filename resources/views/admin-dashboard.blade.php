<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin Dashboard | election</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">


</head>
<body>






    <style>@import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;400;500;600&display=swap');

        :root {
            --main-color: #22BAA0;
            --color-dark: #34425A;
            --text-grey: #B0B0B0;
        }

        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style-type: none;
            box-sizing: border-box;
            font-family: 'Merriweather', sans-serif;
        }

        #menu-toggle {
            display: none;
        }

        .sidebar {
            position: fixed;
            height: 100%;
            width: 165px;
            left: 0;
            bottom: 0;
            top: 0;
            z-index: 100;
            background: var(--color-dark);
            transition: left 300ms;
        }

        .side-menu ul li:hover {
            background: #2b384e;
        }

        .side-header {
            box-shadow: 0px 5px 5px -5px rgb(0 0 0 /10%);
            background: var(--main-color);
            height: 60px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .side-header h3, side-head span {
            color: #fff;
            font-weight: 400;
        }

        .side-content {
            height: calc(100vh - 60px);
            overflow: auto;
        }

        /* width */
        .side-content::-webkit-scrollbar {
          width: 5px;
        }

        /* Track */
        .side-content::-webkit-scrollbar-track {
          box-shadow: inset 0 0 5px grey;
          border-radius: 10px;
        }

        /* Handle */
        .side-content::-webkit-scrollbar-thumb {
          background: #b0b0b0;
          border-radius: 10px;
        }

        /* Handle on hover */
        .side-content::-webkit-scrollbar-thumb:hover {
          background: #b30000;
        }


        .sidebar {
            /*overflow-y: auto;*/
        }

        .side-menu ul {
            text-align: center;
        }

        .side-menu a {
            display: block;
            padding: 1.2rem 0rem;
        }

        .side-menu a.active {
            background: #2B384E;
        }

        .side-menu a.active span, .side-menu a.active small {
            color: #fff;
        }

        .side-menu a span {
            display: block;
            text-align: center;
            font-size: 1.7rem;
        }

        .side-menu a span, .side-menu a small {
            color: #899DC1;
        }

        #menu-toggle:checked ~ .sidebar {
            width: 60px;
        }

        #menu-toggle:checked ~ .sidebar .side-header span {
            display: none;
        }

        #menu-toggle:checked ~ .main-content {
            margin-left: 60px;
            width: calc(100% - 60px);
        }

        #menu-toggle:checked ~ .main-content header {
            left: 60px;
        }

        #menu-toggle:checked ~ .sidebar .profile,
        #menu-toggle:checked ~ .sidebar .side-menu a small {
            display: none;
        }

        #menu-toggle:checked ~ .sidebar .side-menu a span {
            font-size: 1.3rem;
        }


        .main-content {
            margin-left: 165px;
            width: calc(100% - 165px);
            transition: margin-left 300ms;
        }

        header {
            position: fixed;
            right: 0;
            top: 0;
            left: 165px;
            z-index: 100;
            height: 60px;
            box-shadow: 0px 5px 5px -5px rgb(0 0 0 /10%);
            background: #fff;
            transition: left 300ms;
        }

        .header-content, .header-menu {
            display: flex;
            align-items: center;
        }

        .header-content {
            justify-content: space-between;
            padding: 0rem 1rem;
        }

        .header-content label:first-child span {
            font-size: 1.3rem;
        }

        .header-content label {
            cursor: pointer;
        }

        .header-menu {
            justify-content: flex-end;
            padding-top: .5rem;
        }

        .header-menu label,
        .header-menu .notify-icon {
            margin-right: 2rem;
            position: relative;
        }

        .header-menu label span,
        .notify-icon span:first-child {
            font-size: 1.3rem;
        }


        main {
            margin-top: 60px;
        }




        }


        </style>


   <input type="checkbox" id="menu-toggle">


    <div class="sidebar">

        <div class="side-content">


            <div class="side-menu">
                <ul>
                    <li>
                       <a href="" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                        <a href="/pourcentages">
                            <span class="las la-chart-bar"></span> <!-- Utilisez la classe de l'icône "statistiques" que vous préférez -->
                            <small>Statistiques</small>
                        </a>
                    </li>
                    <li>
                       <a href="/candidat">
                            <span class="las la-plus-circle"></span>
                            <small>Ajouter Candidat</small>
                        </a>
                    </li>
                    <li>
                       <a href="/liste-candidat">
                            <span class="las la-list"></span>
                            <small>Lister Candidat</small>
                        </a>
                    </li>
                    <li>
                        <a href="/electeur">
                             <span class="las la-plus-circle"></span>
                             <small>Ajouter Electeur</small>
                         </a>
                     </li>
                     <li>
                        <a href="/liste-electeur">
                             <span class="las la-list"></span>
                             <small>Lister Electeur</small>
                         </a>
                     </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="main-content">

        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>

            </div>
        </header>


        <main>

            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>

            @include('candidats.listecandidat')
            
        </main>

    </div>
</body>
</html>
