<template>
  <div>
    <li v-for="(category, index) in categories" :key="index">
      <a :href="route(category)">
        <i class="uil-brush-alt"></i>
        {{ category.name }}
      </a>
    </li>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: []
    };
  },

  methods: {
    route(category) {
      return `/courses/${category.slug}/u/0`;
    }
  },

  created() {
    this.$store.subscribe((mutation, state) => {
      if (mutation.type === "setCategories" && state.courses != null) {
        this.categories = state.categories;
      }
    });

    this.$store.dispatch("fetchCategories");
  }
};
</script>
