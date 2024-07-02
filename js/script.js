const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: [],
            // URL per ottenere la lista dei ToDo
            apiUrl: './api/get_all_list.php',
            newTaskName: '',
        };
    },
    methods: {
        getToDoList() {
            axios.get(this.apiUrl)
                .then((response) => {
                    console.log(response.data.tasks);
                    this.toDoList = response.data.tasks;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        addTask() {
            if (this.newTaskName.trim() === '') {
                return; // Non aggiungere un task vuoto
            }
            const newToDoObj = {
                name: this.newTaskName,
                completed: false
            };
            this.toDoList.push(newToDoObj);
            this.newTaskName = "";
        }
    },
    created() {
        this.getToDoList();
    }
}).mount('#app');