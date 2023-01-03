<template>
    <div class="card">
        <div class="card-header">Add new bookmark</div>
        <div class="card-body">Example component {{ getUser(user) }}</div>
    </div>
</template>

<script lang="ts">
export default {
    data() {
        return {
            user: <User>{
                name: "Test",
                email: "test@test.local",
                password: "Test",
            },
        };
    },
    mounted() {
        console.log("Component mounted.");
    },
    methods: {
        getUser(user: User) {
            console.log("Function with type: ", user);
        },
    },
};
</script>
