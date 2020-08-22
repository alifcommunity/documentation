<!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
<div id="app">
<div v-for="i in menu">
<li class="nav-item" v-if="i.type == 'item'" >
    <a class="nav-link" :href="'./?md=' + i.name"><i :class="i.icon"></i>{{ i.name }}</a>
 </li>

 <li class="nav-item nav-dropdown" v-else>
    <a class="nav-link nav-dropdown-toggle" href="#"><i :class="i.icon"></i> {{ i.name }}</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item" v-for="s in i.items">
           <a class="nav-link" :href="'./?md=' + s.name"><i :class="s.icon"></i>{{ s.name }}</a>
        </li>
        </li>
    </ul>
</li>
</div>

</div>
<script>
var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    menu: []
  }
})

window.onload = (event) => {
    fetch('./database/db.json')
  .then(response => response.json())
  .then(data => app.menu = data.section);
};
</script>