<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <Edit-post v-if="Editpostshow" :Editdatashow="data_id"></Edit-post>
                    <add-post v-if="AddPostShow" @Closewindoe="closewindow" :showdata="showdata" ></add-post>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item " v-for="i in task">{{i.id}} - {{i.name}}<span class="pull-right"> <button class="btn btn-danger" @click="Deleteitem(i.id)">Delete</button> | <button class="btn btn-primary" @click="updateitem($event, i.id)">Update</button> | <button class="btn btn-primary" @click="Showitem($event, i.name)">Show</button></span>
                            </li>
                        </ul>
                 </div>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
import Addposts from './Addposts.vue';
import EditPosts from './Edit.vue';
    export default {
        components: {
            'add-post': Addposts,
            'Edit-post':EditPosts,
        },
        data(){
            return{

        task:{},
        AddPostShow:false,
        Name:null,
        showdata:null,
        Editpostshow:false,
        Editdatashow:null,
            }
            },
        created(){
           axios.get('/nameList')
                .then((response)=>this.task=response.data)
                .catch((error)=>console.log("Not get any data "));

        },
        methods:{
        Deleteitem: function(id){
            //const reply = confirm("Are you want to deleyte thee name ?");

                axios.delete('/delete/' + id,)
                    .then((response) => {
                         this.$router.push({path:'/About'})
                        //window.location.reload(true)
                    });
            console.log(id);



        },
        updateitem:function($event,i){
             this.Editdatashow=i;
             this.Editpostshow=true;
            console.log(i);


         },
        Showitem:function($event,i){
            this.showdata=i;
            this.AddPostShow=true;
            console.log(this.showdata);

            },

       Getdata:function(){
               console.log(this.Name)
              axios.get('/CreatePOSt',{'Name':this.Name})
               .then((response)=>this.task=response.data)
               .catch(console.log(" We CATCH ERROR"));
 },
            closewindow:function(){
            this.AddPostShow=false;
            }

    }
    }
</script>

<style scoped>


</style>