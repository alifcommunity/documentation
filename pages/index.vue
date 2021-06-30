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
    <div class="body-page">
      <div class="content"></div>
      <div class="side-menu">
        <ul class="sidebar-links p-5">
          <li>
            <Disclosure>
              <DisclosureButton class="py-2">
                البدء
              </DisclosureButton>
              <DisclosurePanel class="text-gray-500">
                سيتم غضافة لاحقا حاليا فقط تجربة
              </DisclosurePanel>
            </Disclosure>
          </li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
import navlist from "../components/nav-list.vue";
import { Disclosure, DisclosureButton, DisclosurePanel } from "@headlessui/vue";
export default {
  components: { navlist, Disclosure, DisclosureButton, DisclosurePanel },
};
</script>
<style scoped>
nav {
  direction: rtl;
  box-shadow: 3px -3px 5px 4px #ccc;
}
.side-menu {
  font-size: 15px;
  background-color: #fff;
  width: 20rem;
  position: fixed;
  z-index: 10;
  margin: 0;
  top: 5.6rem;
  right: 0;
  bottom: 0;
  box-sizing: border-box;
  border-left: 1px solid #eaecef;
  overflow-y: auto;
}
</style>