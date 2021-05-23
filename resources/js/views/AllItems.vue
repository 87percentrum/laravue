<template>
    <div>
        <h3 class="text-center">All items</h3><br/>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="item in items" :key="item.id">
                <td>{{ item.id }}</td>
                <td>{{ item.title }}</td>
                <td>{{ item.description }}</td>
                <td>{{ item.created_at }}</td>
                <td>{{ item.updated_at }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <router-link :to="{name: 'edit', params: { id: item.id }}" class="btn btn-primary">Edit
                        </router-link>
                        <button class="btn btn-danger" @click="deleteItem(item.id)">Delete</button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    data() {
        return {
            items: []
        }
    },
    created() {
        this.axios
            .get('/api/items')
            .then(response => {
                this.items = response.data;
            });
    },
    methods: {
        deleteItem(id) {
            this.axios
                .delete(`/api/item/delete/${id}`)
                .then(response => {
                    let i = this.items.map(item => item.id).indexOf(id);
                    this.items.splice(i, 1)
                });
        }
    }
}
</script>
