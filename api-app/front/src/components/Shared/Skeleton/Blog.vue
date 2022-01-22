<template>
  <q-card flat >
    <q-item>
      <q-skeleton height="250px" width="100%" square/>
    </q-item>
    <q-item>
      <q-card-section style="width: 100%">
        <q-skeleton type="text" class="text-subtitle1"/>
        <q-skeleton type="text" width="50%" class="text-subtitle1"/>
        <q-skeleton type="text" class="text-caption"/>
      </q-card-section>

    </q-item>
  </q-card>
</template>

<script>
export default {
  name: "Blog"
}
</script>

<style scoped>

</style>
