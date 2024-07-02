const {createApp} = Vue
    createApp({
        data(){
            return{
                activities: [],
                data: '',
                nome: '',
                stato: '',
            }
        },
        methods: {
            getData(){
                axios.get('./server.php', {
                    params: {
                    //     cosa diciamo nella taglia? ciò che diciamo nella domanda
                        stato: this.stato,
                        }
                    })
                    .then((response) => {
                    console.log(response);
                    // come eredito il this dal parent? arrow function.
                    this.stato=response.data;
                    })
                    .catch(function (error) {
                    console.log(error);
                    })
                    .finally(function(){
                    });
            }
        },
        created(){
            this.getData()
        }
    }).mount('#app')