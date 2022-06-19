<template>
    <div class="w-full sm:w-8/12 md:w-5/12 p-5 bg-white">
        <h1 class="text-3xl text-center font-bold py-4 text-gray-800">Crear Tareas</h1>

        <form method="POST" v-on:submit.prevent="Guardar()">

            <div class="d-block flex px-2 py-4">

                <input type="text" v-model="task" placeholder="Nueva tarea" name="todo"
                    class="text-xl p-2 mr-2 w-9/12 border-b-2 border-green-500">
                <input type="submit" value="Guardar" class="bg-green-500 w-3/12 text-white">

            </div>

        </form>

    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            task: ''
        }
    },
    methods: {
        Guardar() {
            axios.post('/tasks', { todo: this.task, })
                .then(response => { console.log(response) })
                .catch(error => { console.log(error.response) });
            this.task = '';
        }
    },
}
</script>
