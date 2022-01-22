<template>
  <div class="row flex justify-center items-center">
    <q-card flat>
      <div class="row flex justify-center items-center">
        <q-avatar
          size="175px">
          <img src="https://i.pravatar.cc/300?img=68" alt>
        </q-avatar>

      </div>
      <q-card-section class="q-pt-none user-wrapper">
        <p class="text-center text-h6">John Doe</p>
        <p id="title"
          class="text-center text-caption text-blue-grey-5">Developer</p>
        <p class="text-justify text-subtitle2 q-pa-lg-xl text-weight-light">
          Velox fluctuss ducunt ad elogium. Azureus, bi-color zetas grauiter magicae de teres, rusticus lamia.
          Gemnas nocere, tanquam brevis luna. Hercle, orgia magnum!. Pulchritudine, idoleum, et torquis.Sunt
          resistentiaes carpseris altus, audax habitioes.
        </p>
      </q-card-section>
      <q-separator/>
      <q-card-section>
        <div class="row justify-center items-center social-icon">
          <q-icon
            name="ion-logo-linkedin"
            color="grey-8"
            size="1.5rem"
            class="q-mx-sm"
          />
          <q-icon
            name="ion-logo-facebook"
            color="grey-8"
            size="1.5rem"
            class="q-mx-sm"
          />
          <q-icon
            name="ion-logo-twitter"
            color="grey-8"
            size="1.5rem"
            class="q-mx-sm"
          />
          <q-icon
            name="ion-logo-instagram"
            color="grey-8"
            size="1.5rem"
            class="q-mx-sm"
          />
        </div>
      </q-card-section>
    </q-card>
  </div>

</template>

<script>
export default {
  name: "UserCard"
}
</script>

<style scoped lang="scss">

.user-wrapper {
  margin-top: 1.7rem;
  #title {
    margin-top: -0.8rem
  }
}

.social-icon {
  .q-icon:hover {
    cursor: pointer;
    color:$primary !important
  }
}
</style>
