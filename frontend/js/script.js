console.log("Vue Ok", Vue);

const { createApp } = Vue;

const app = createApp(
    {
        data: () => ({
            tasks: []
        }),
        methods: {
            fetchTasks() {
                axios.get
            }
        }
    }
)

app.mount(#app);