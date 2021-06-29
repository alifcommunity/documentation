<template>
  <div class="list-nav">
    <div
      class="
        toggle
        hidden
        md:flex
        w-full
        md:w-auto
        text-right text-bold
        mt-5
        md:mt-0
        border-t-2 border-blue-900
        md:border-none
      "
    >
      <a
        v-for="(item, index) in list"
        :key="index"
        :href='item.url'
        class="
          block
          md:inline-block
          text-black
          hover:text-white
          hover:bg-red-500
          px-3
          py-3
          border-b-2 border-blue-900
          md:border-none
        "
        >{{ item.title }}</a
      >
    </div>
  </div>
</template>

<script>
export default {
  name: "navlist",
  data() {
    return {
      list: [
        { title: "ساهم", url: "https://www.aliflang.org/donations" },
        { title: "حول", url: "https://www.aliflang.org/about" },
        { title: "المجتمع", url: "https://t.me/aliflang" },
        { title: "الأخبار", url: "https://www.aliflang.org/news" },
        { title: "التحميل", url: "https://www.aliflang.org/download" }
      ],
    };
  },
};
</script>