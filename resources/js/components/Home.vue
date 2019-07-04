<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h1>Name Data<span><button class="btn btn-success" @click="AddNew">ADD NEW</button></span></h1></div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item " v-for="i in task">{{i.id}} - {{i.name}}<span class="pull-right"> <button class="btn btn-danger" @click="Deleteitem(i.id)">Delete</button> | <button class="btn btn-primary" @click="updateitem($event, i.id)">Update</button></span>
                            </li>
                        </ul>
                 </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>

    export default {
        data(){
            return{

        task:{}
                  }
        },
        created(){
           axios.get('/nameList')
                .then((response)=>this.task=response.data)
                .catch((error)=>console.log("Not get any data "));

        },
        methods:{
        Deleteitem: function(id){
            const reply = confirm("Are you want to deleyte thee name ?");
            axios.get('/nameList/'+id,{
                id:id,
                _method:'DELETE'

            }).then((response)=>this.task=response.data)
                .catch(console.log("Error"));
        },
        updateitem:function($event,i){
            console.log(i)
        },
        AddNew:function(){
            console.log("IM created successfully");
        }

    },
    }
</script>

<style scoped>


</style>