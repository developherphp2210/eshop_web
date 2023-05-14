<x-header :title="$title"></x-header>
<body class="nav-fixed">
    <x-nav-bar :us="$user"></x-nav-bar>
    <div id="layoutSidenav">
        <x-side-nav></x-side-nav>    
        <x-account.account_1 :user="$user"></x-account.account_1>
    </div>
    <x-footer></x-footer>
</body>
</html>