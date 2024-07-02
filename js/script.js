const { createApp } = Vue;

createApp({
    data() {
        return {
            toDoList: [],
            // URL per ottenere la lista dei ToDo
            apiUrl: './api/get_all_list.php',
            newTaskName: '',
            newTaskDescription: '',
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
            if (this.newTaskName.trim() === '' && this.newTaskDescription.trim() === '') {
                return; // Non aggiungere un task vuoto
            }
            const newToDoObj = {
                name: this.newTaskName,
                description: this.newTaskDescription,
                completed: false
            };
            this.toDoList.push(newToDoObj);
            this.newTaskName = "";
            this.newTaskDescription = "";
        }
    },
    created() {
        this.getToDoList();
    }
}).mount('#app');