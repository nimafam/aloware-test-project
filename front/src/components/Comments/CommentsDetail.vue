<template>
  <q-list>
    <q-expansion-item>
      <template v-slot:header>
        <q-item-section avatar>
          <q-avatar
            size="75px"
          >
            <img :src="comment.user.avatar" alt/>
          </q-avatar>
        </q-item-section>

        <q-item-section>
                <span class="red-2">
                  {{ comment.user.name }} said - <small class="text-caption red-2">
                  {{ comment.created_at }}
                </small>
                </span>
          <div class="text-subtitle1 text-justify">
            {{ comment.comment }}
          </div>
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
      </q-card>
    </q-expansion-item>
  </q-list>

</template>

<script>
export default {
  name: "comment-detail",
  props:['comment'],
}
</script>

<style scoped>

</style>
