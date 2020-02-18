<template>
  <div>
    <button
      class="btn-sm shadow-none border border-primary p-2"
      :class="buttonColor"
    >
      <i
        class="mr-1"
        :class="buttonIcon"
      ></i>
      {{ buttonText }}
    </button>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        isFollowed: true,
      }
    },
    computed: {
      buttonColor() {
        return this.isFollowed
          ? 'bg-primary text-white'
          : 'bg-white'
      },
      buttonIcon() {
        return this.isFollowed
          ? 'fas fa-user-check'
          : 'fas fa-user-plus'
      },
      buttonText() {
        return this.isFollowed
          ? 'フォロー中'
          : 'フォロー'
      },
    },
  }
</script>