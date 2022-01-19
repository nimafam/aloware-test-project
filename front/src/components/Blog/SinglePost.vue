<template>
  <div>
    <skeleton v-if="isLoading" />
    <q-card flat v-else>
      <img src="andy-li-r2AlgxMb-yc-unsplash.jpg" alt="">

      <q-card-section>
        <div class="text-h4 text-weight-medium flex items-center">
        <span class="text-left"><slot></slot>
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

      <q-card-section class="q-pt-none q-mt-md">
        <p class="text-justify">
          Geese winging their way south in wrinkled V-shaped flocks is perhaps the classic picture of
          migration—the annual, large-scale movement of birds between their breeding (summer) homes and their
          nonbreeding (winter) grounds. But geese are far from our only migratory birds. Of the more than 650
          species of North American breeding birds, more than half are migratory.
        </p>
        <div class="text-h6 text-weight-medium">Why Do Birds Migrate?</div>
        <p class="text-justify">
          Birds migrate to move from areas of low or decreasing resources to areas of high or increasing
          resources. The two primary resources being sought are food and nesting locations. Here’s more about
          how migration evolved.

          Birds that nest in the Northern Hemisphere tend to migrate northward in the spring to take advantage
          of burgeoning insect populations, budding plants and an abundance of nesting locations. As winter
          approaches and the availability of insects and other food drops, the birds move south again.
          Escaping the cold is a motivating factor but many species, including hummingbirds, can withstand
          freezing temperatures as long as an adequate supply of food is available.
        </p>
        <div class="text-h6 text-weight-medium">Origins Of Long-Distance Migration</div>
        <p class="text-justify">
          While short-distance migration probably developed from a fairly simple need for food, the origins of
          long-distant migration patterns are much more complex. They’ve evolved over thousands of years and
          are controlled at least partially by the genetic makeup of the birds. They also incorporate
          responses to weather, geography, food sources, day length, and other factors.
        </p>
        <p class="text-justify">
          For birds that winter in the tropics, it seems strange to imagine leaving home and embarking on a
          migration north. Why make such an arduous trip north in spring? One idea is that through many
          generations the tropical ancestors of these birds dispersed from their tropical breeding sites
          northward. The seasonal abundance of insect food and greater day length allowed them to raise more
          young (4–6 on average) than their stay-at-home tropical relatives (2–3 on average). As their
          breeding zones moved north during periods of glacial retreat, the birds continued to return to their
          tropical homes as winter weather and declining food supplies made life more difficult. Supporting
          this theory is the fact that most North American vireos, flycatchers, tanagers, warblers, orioles,
          and swallows have evolved from forms that originated in the tropics.
        </p>
      </q-card-section>
    </q-card>
  </div>

</template>

<script>
export default {
  name: "SinglePost",
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
