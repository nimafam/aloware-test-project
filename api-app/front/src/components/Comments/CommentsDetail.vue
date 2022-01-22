<template>
  <q-list>
    <q-expansion-item>
      <template v-slot:header>
        <q-item-section avatar>
          <q-avatar
            size="75px"
          >
            <img :src="'https://i.pravatar.cc/300?' + randomAvatarId" alt/>
          </q-avatar>
        </q-item-section>

        <q-item-section>
                <span class="red-2">
                  {{ comment.user.name }} said - <small class="text-caption red-2">
                  {{ toFormatDate(comment.created_at) }}
                </small>
                </span>
          <div class="text-subtitle1 text-justify" v-html="comment.comment"></div>
        </q-item-section>
      </template>
      <q-card>
        <q-card-section>
          <comment-detail
            v-for="reply in comment.replies"
            :comment="reply"
            :key="reply.id"
          >
          </comment-detail>
        </q-card-section>
        <q-card-section>
          <reply-form
            :type="'reply'"
            :commentId="comment.id"
          />
        </q-card-section>
      </q-card>
    </q-expansion-item>
  </q-list>

</template>

<script>
import {date} from 'quasar'

export default {
  name: "comment-detail",
  props:['comment'],
  computed: {
    randomAvatarId: () => {
      const baseParam = 'img='

      let id = Math.floor(Math.random() * 70);

      return baseParam + id
    }
  },
  methods: {
    toFormatDate: (timestamp) => {
      return date.formatDate(timestamp, 'ddd - Do MMMM YY, HH:mm')
    }
  },
  components: {
    'reply-form': require('components/Comments/CommentsForm.vue').default
  }
}
</script>

<style scoped>

</style>
