<template>
  <div>
    <nav class="flex flex-wrap items-center justify-between p-5 bg-white">
      <!-- logo -->
      <img
        src="https://www.aliflang.org/docs/img/coreui-logotyp.png"
        alt="ACME"
        width="120"
      />

      <!-- hamburger -->
      <div class="flex md:hidden">
        <button id="hamburger">
          <img
            class="toggle block"
            src="https://img.icons8.com/fluent-systems-regular/2x/menu-squared-2.png"
            width="40"
            height="40"
          />
          <img
            class="toggle hidden"
            src="https://img.icons8.com/fluent-systems-regular/2x/close-window.png"
            width="40"
            height="40"
          />
        </button>
      </div>
      <!-- links -->
     <navlist />
 
    </nav>
  </div>
</template>

<script>
import navlist from '../components/nav-list.vue';
export default {
    components:{navlist}
}
</script>
<style scoped>
nav{
    direction: rtl;
    box-shadow: 3px -3px 5px 4px #ccc;
}
</style>