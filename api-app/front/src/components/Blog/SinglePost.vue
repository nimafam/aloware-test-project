<template>
  <div>
    <skeleton v-if="isLoading" />
    <q-card flat v-else>
      <img src="andy-li-r2AlgxMb-yc-unsplash.jpg" alt="">

      <q-card-section>
        <div class="text-h4 text-weight-medium flex items-center">
        <span class="text-left">{{ blog.title }}
          <span>
              <q-icon
                id="bookmarked"
                @click="bookmark"
                :name="bookmarked ? 'eva-bookmark' : 'eva-bookmark-outline'"
                :color="bookmarked ? 'primary' : 'grey-5'"/>
            </span>
        </span>
          <div class="q-space"></div>
          <time class="text-caption">25. Aug, 2022</time>
        </div>
        <div class="full-width row wrap justify-between items-start content-start q-mt-md">
          <div class="flex items-center">
          <span>
          10 minutes
          <q-icon name="eva-clock-outline" color="grey-5"/> . &nbsp;
          </span>
            <span>
            <span class="q-mr-sm">
              {{ like }}
            </span>
            <q-icon
              @click="increaseLike"
              :name="liked ? 'eva-heart' : 'eva-heart-outline'"
              id="likes"
              color="red-4"/> . &nbsp;
          </span>
            <span>
            {{ views }} &nbsp; <q-icon name="eva-eye-outline" color="grey-5"/>
          </span>
          </div>
          <div>
            <q-icon name="eva-linkedin" color="blue-10"/>
            <q-icon name="eva-facebook" color="indigo-10"/>
            <q-icon name="eva-twitter" color="light-blue-6"/>
          </div>
        </div>
      </q-card-section>

      <q-separator/>

      <q-card-section class="q-pt-none q-mt-md" v-html="blog.content">
      </q-card-section>
    </q-card>
  </div>

</template>

<script>
export default {
  props: [
    'blog'
  ],
  data() {
    return {
      like: 354,
      views: 498,
      liked: false,
      bookmarked: false,
      isLoading: true
    }
  },
  methods: {
    increaseLike() {
      if (!this.liked) {
        this.like++
        this.liked = true
      } else {
        this.decreaseLike()
      }
    },

    decreaseLike() {
      if (this.liked) {
        this.like--
        this.liked = false
      } else {
        this.increaseLike()
      }
    },

    bookmark() {
      this.bookmarked = !this.bookmarked
    },

    increaseView() {
      this.views++
    },

    hideLoading() {
      setTimeout(() => {
        this.isLoading = false
      }, 2000)
    }
  },
  mounted() {
    this.increaseView()
    this.hideLoading()
  },
  components: {
    'skeleton': require('components/Shared/Skeleton/Blog.vue').default
  }
}
</script>

<style scoped>

#likes, #bookmarked {
  cursor: pointer;
}
</style>
