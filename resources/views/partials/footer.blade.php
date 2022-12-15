<footer>
    {{-- <div id="footer" class="wrapper">
        <div class="container">
          <!-- stampo 3 ul sapendo già la lunghezza dell'array me ne stamperà 3 ma  -->
          <ul v-for="(item, index) in footerMenu" :key="index">
            <!-- se il primo item è un array stampami tante ul quanto è lungo l'array -->
            <!-- per ogni ul mi stampi ogni singolo oggetto  uno sotto l'altro -->
            <ul v-if="Array.isArray(item)" v-for="(i, index) in item" :key="index">
              <h4>{{ i.title }}</h4>
              <li v-for="(a, index) in i.links" :key="index">
                <a href="#">{{ a.linkText }}</a>
              </li>
            </ul>
            <!-- altrimenti stampami le ul normalemte-->
            <h4 v-else>{{ item.title }}</h4>
            <li v-for="(link, index) in item.links" :key="index">
              <a :href="link.url">{{ link.linkText }}</a>
            </li>
          </ul>
          <div class="logo"></div>
        </div>
      </div> --}}

</footer>