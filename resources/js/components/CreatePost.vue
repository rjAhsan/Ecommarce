<template>
    <div>
        <h1>Create A Post</h1>
        <form @submit.prevent="addPost">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Enter Name:</label>
                        <input type="text" placeholder="Please Enter Your Name " class="form-control" v-model="Name">
                    </div>
                </div>
            </div>
            <div class="row">

            </div><br />
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                Name: null
            }
        },
        methods: {
            addPost() {
                //
                // axios.post('/CreatePost',{name: this.Name})
                //     .then((res) => console.log(res.data))
                //     .catch((err) => console.log(err));
                // },

                axios.post('/CreatePost', {name:this.Name})
                    .then((response) => {
                        this.$router.push({name:'Home'})
                    })
            },
        }
    }
</script>