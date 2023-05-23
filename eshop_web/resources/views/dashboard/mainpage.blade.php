<x-header :title="$title"></x-header>
<body class="nav-fixed">
    <x-nav-bar :us="$user"></x-nav-bar>
    <div id="layoutSidenav">
        <x-side-nav :us="$user"></x-side-nav>    
        <x-main-page-dashboard :user="$user"></x-main-page-dashboard>
    </div>
    <x-footer></x-footer>
</body>
</html>