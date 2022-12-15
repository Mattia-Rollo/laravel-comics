<header id="header" class="">
    <header class="container">
        <div>
          <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="" />
        </div>
       
        <ul>
            @foreach ($menu as $item)
            <li>
              <a :href="">{{ $item }}</a>
            </li>
            @endforeach
        </ul>
        
          <span v-if="mobileView"><i class="fa-solid fa-bars"></i></span>
        
      </header>
        
          

        
          <span><i class="fa-solid fa-bars"></i></span>
        
    </div> 
</header>