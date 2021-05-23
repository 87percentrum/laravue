<template>
    <div>
        <h3 class="text-center">Edit Item</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="updateItem">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="item.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="item.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Item</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            item: {}
        }
    },
    created() {
        this.axios
            .get(`/api/item/edit/${this.$route.params.id}`)
            .then((response) => {
                this.item = response.data;
                // console.log(response.data);
            });
    },
    methods: {
        updateItem() {
            this.axios
                .post(`/api/item/update/${this.$route.params.id}`, this.item)
                .then((response) => {
                    this.$router.push({name: 'home'});
                });
        }
    }
}
</script>
