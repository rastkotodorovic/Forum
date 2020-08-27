<template>
    <button :class="classes" @click="toggle">
        <i class="fa fa-heart"></i>
        <span v-text="favoritesCount"></span>
    </button>
</template>


<script>
export default {
    props: ['reply'],

    computed: {
        classes() {
            return ['btn', this.isFavorited ? 'btn--type-02' : 'btn-light'];
        }
    },

    data() {
        return {
            favoritesCount: this.reply.favorites,
            isFavorited: this.reply.userHasFavorited,
        }
    },

    methods: {
        toggle() {
            if (this.isFavorited) {
                this.delete();
            } else {
                this.create();
            }
        },

        create() {
            axios.post('/threads/reply/' + this.reply.id + '/favorite');
            this.favoritesCount++;
            this.isFavorited = true;
        },

        delete() {
            axios.delete('/threads/reply/' + this.reply.id + '/favorite');
            this.favoritesCount--;
            this.isFavorited = false;
        },
    }
}
</script>