<template>
  <div class="grid-slider-header">
    <div>
      <h4 class="uk-text-truncate">
        {{ realText }}
        <a :href="realLink" class="text-success">{{ highlight }}</a>
      </h4>
    </div>
    <div class="grid-slider-header-link">
      <a :href="realLink" class="button transparent uk-visible@m">View all</a>
      <a href="#" class="slide-nav-prev" uk-slider-item="previous"></a>
      <a href="#" class="slide-nav-next" uk-slider-item="next"></a>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      featuredCourse: {}
    };
  },

  props: {
    text: { type: String, required: false, default: () => "" },
    highlight: { type: String, required: true, default: () => "" },
    link: { type: String, required: false, default: () => "#" }
  },

  computed: {
    realText() {
      if (this.text == "" || this.text == null)
        if (
          this.featuredCourse != null &&
          this.featuredCourse.hasOwnProperty("category")
        )
          return this.featuredCourse.category.name;

      return this.text;
    },

    realLink() {
      if (this.text == "" || this.text == null)
        if (
          this.featuredCourse != null &&
          this.featuredCourse.hasOwnProperty("category")
        )
          return this.route();

      return this.link;
    }
  },

  methods: {
    route() {
      return `courses/${this.featuredCourse.category.slug}/u/0`;
    }
  },

  created() {
    Event.$on("featuredCoursesReceived", data => {
      this.featuredCourse = data;
    });
  }
};
</script>
