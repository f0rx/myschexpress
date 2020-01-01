<template>
  <ul class="uk-pagination my-5 uk-flex-center" uk-margin>
    <li
      @click.prevent="onClickPage(paginator.current_page - 1)"
      :class="{ 'uk-disabled': isFirstPage }"
    >
      <a href="#">
        <span uk-pagination-previous></span>
      </a>
    </li>

    <li class="uk-disabled" v-show="!isFirstPage && from > offset">
      <span>...</span>
    </li>

    <li
      :class="{ 'uk-active': isActive(page) }"
      v-for="(page, index) in pages"
      :key="page.name+'-'+index"
    >
      <span v-show="isActive(page)" v-html="page.name"></span>
      <a
        href="#"
        v-show="!isActive(page)"
        v-html="page.name"
        @click.prevent="onClickPage(page.name)"
      ></a>
    </li>

    <li class="uk-disabled" v-show="!isLastPage && paginator.total_pages > offset">
      <span>...</span>
    </li>

    <li
      @click.prevent="onClickPage(paginator.current_page + 1)"
      :class="{ 'uk-disabled': isLastPage }"
    >
      <a href="#">
        <span uk-pagination-next></span>
      </a>
    </li>
  </ul>
</template>

<script>
export default {
  data() {
    return {
      paginator: {},
      final_to: 1
    };
  },

  props: {
    offset: {
      type: Number,
      required: false,
      default: 4
    },

    category: {
      required: false,
      type: Object,
      default: () => {}
    }
  },

  watch: {
    "$store.state.paginator": {
      immediate: true, // Immediately set a watcher when page loads
      deep: true, // Watch nested properties deeply nested
      handler(newVal, oldVal) {
        let data = newVal;
        data["total_pages"] = Math.ceil(data.total / data.per_page);
        this.paginator = data;
      }
    }
  },

  computed: {
    isFirstPage() {
      return this.paginator.current_page === 1;
    },

    isLastPage() {
      return this.paginator.current_page === this.paginator.last_page;
    },

    from() {
      let from = this.paginator.current_page - this.offset;
      return from < 1 ? 1 : from;
    },

    to() {
      let to = this.from + this.offset;
      return to >= this.paginator.last_page ? this.paginator.last_page : to;
    },

    pages() {
      let range = [];

      if (!this.paginator.to) return [];

      for (let i = this.from; i <= this.to; i++)
        range.push({
          name: i,
          is_disabled: i === this.paginator.current_page
        });
      return range;
    }
  },

  methods: {
    onClickPage(page) {
      //   this.$emit("pageSelected", this.paginator.current_page - 1);
      this.$store.dispatch({
        type: "fetchNextCourses",
        category: this.category,
        page: page
      });
    },

    isActive(page) {
      return page.is_disabled;
    }
  },

  created() {
    this.$store.subscribe((mutation, state) => {
      if (mutation.type === "setCourses" && state.courses != null) {
        //
      }
    });
  }
};
</script>
