<script>
    import Favorite from './FavoriteComponent';

    export default {

        props: ['attributes'],

        components: { Favorite },

        data() {
            return {
                editing: false,
                body: this.attributes.body,
            };
        },

        methods: {
            update() {
                axios.patch('/threads/reply/' + this.attributes.id, {
                    body: this.body
                });

                toastr.success('You have successfully updated a reply!');

                this.editing = false;
            },

            destroy() {
                axios.delete('/threads/reply/' + this.attributes.id + '/delete');

                toastr.success('You have successfully deleted a reply!');

                $(this.$el).fadeOut(100);
            }
        }
    }
</script>
