<footer id="footer">
    <div id="footer" class="wrapper">
        <div class="container">
          <!-- stampo 3 ul sapendo già la lunghezza dell'array me ne stamperà 3 ma  -->
          
          @foreach ($menuFooter as $menu)
          <ul>
            <h4>{{$menu['titolo']}}</h4>
              @foreach($menu['links'] as $item)
                <li>{{ $item }}</li>
              @endforeach
            </ul>
          @endforeach
          <div class="logo"></div>
        </div>
      </div>

</footer>