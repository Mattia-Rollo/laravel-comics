<header id="header" class="">
    <header class="container">
        <div>
          <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" />
        </div>
       
        <ul>
            @foreach ($menuHeader as $item)
            <li>
              <a :href="">{{ $item }}</a>
            </li>
            @endforeach
        </ul>
        
        
          
        
      </header>
</header>