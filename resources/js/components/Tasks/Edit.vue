<template>
    <div class="w-full sm:w-8/12 md:w-5/12 p-5 bg-white">

        <h1 class="text-3xl text-center font-bold py-4 text-gray-800">
            Editar Tarea {{ id }}
        </h1>

        <form method="POST" v-on:submit.prevent="Guardar()">

            <div class="d-block flex px-2 py-4">

                <input type="text" v-model="task.todo" placeholder="Editar tarea" name="todo"
                    class="text-xl p-2 mr-2 w-9/12 border-b-2 border-green-500">

                <input type="submit" value="Editar" class="bg-green-500 w-3/12 text-white">

            </div>

        </form>

    </div>
</template>

<script>
export default {
    data() {
        return {
            id: this.$route.params.id,
            task: []
        }
    },
    created() {
        axios.get('/tasks/' + this.id + '/edit')
            .then(response => this.task = response.data)
            .catch();
    },
    methods: {
        Guardar() {
            axios.put('/tasks/' + this.id, { todo: this.task.todo, })
                .then(response => { console.log(response) })
                .catch(error => { console.log(error.response) });
            this.task.todo = '';
            this.$router.push('/');

        }
    },
}
</script>
