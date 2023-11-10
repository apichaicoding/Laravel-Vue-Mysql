<template>
  <h2 class="text text-success">{{ msg }}</h2>
</template>

<script>
export default {
    name: "App",
    setup() {
        const msg = "Hello from Vue Component.";
        return { msg }
    }
}
</script>

<style>

</style>