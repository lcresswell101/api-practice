<template>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            {{ userObj.name }}
        </div>
    </div>
</template>

<script>
export default {
    name: "Users",
    props: ['user'],
    data()
    {
        return {
            userObj: {}
        }
    },
    methods: {
        getUsers()
        {
            axios
                .get('api/user?api_key='+this.userObj.api_key)
                .then(response => console.log(response));
        }
    },
    mounted()
    {
        this.userObj = JSON.parse(this.user);

        this.getUsers();
    }
}
</script>

<style scoped>

</style>
