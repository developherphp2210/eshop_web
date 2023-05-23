<x-header :title="$title"></x-header>
<body class="nav-fixed">
    <x-nav-bar :us="$user"></x-nav-bar>
    <div id="layoutSidenav">
        <x-side-nav :us="$user"></x-side-nav>  
        @switch($page)
            @case(1)
                <x-account.page1 :user="$user"></x-account.page1>
                @break
        
            @case(2)
                <x-account.page2 :user="$user"></x-account.page2>
                @break                    
        @endswitch          
    </div>
    <x-footer></x-footer>
</body>
</html>