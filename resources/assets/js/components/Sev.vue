<template lang='pug'>
  .container0
    .container
      nav.navbar.navbar-default.navbar-fixed-top(role="navigation")
        .container-fluid
          .navbar-header
            button.navbar-toggle(type='button', data-toggle='collapse', data-target='#navbar')
              span.sr-only Toggle navigation
              span.icon-bar
              span.icon-bar
              span.icon-bar
              a.navbar-brand(href='#') SEV
          <!-- Collect the nav links, forms, and other content for toggling -->
          .collapse.navbar-collapse#navbar
            ul.nav.navbar-nav
              li.active: a(href="#") Home
              li: a(href="#") Asset groups
              li: a(href="#") User groups
            ul.nav.navbar-nav.navbar-right
              li: a(href="#") Login
              li: a(href="#") Register
      glavni.fill
</template>

<script>
  import Glavni from './Glavni'
  export default {
    components: {
      Glavni
    },
    mounted() {
      console.log('Component mounted.')
    }
  }
</script>

<style lang='sass' scoped>
  .fill
    min-height: 100%
    height: 100%
</style>
