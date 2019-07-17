<template>
    <v-layout row justify-center>
        <v-dialog v-model="dialog" persistent max-width="600px">

            <v-card>
                <v-card-title>
                    <span class="headline">Edit Data</span>
                </v-card-title>
                <v-card-text>
                    <v-container grid-list-md>
                        <v-layout wrap>
                            <v-flex xs12 sm6 md4>
                                <v-text-field label="Legal first name*" required v-model="dataA" ></v-text-field>
                            </v-flex>

                        </v-layout>
                    </v-container>

                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="blue darken-1" flat @click="EditName">Save</v-btn>
                    <v-btn color="blue darken-1" flat @click="closewindow">Close</v-btn>

                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-layout>
</template>

<script>
    export default {
       data() {
            return {
                dialog: true,
                closeWindoe:true,
                data:null,
                dataA:null,
            }},

        props:['editdata'],

        created(){
            console.log();
            let id=this.editdata;
            axios.get('/Editdata/'+id)
              .then((response)=> this.dataA=response.data).
              catch(console.log("Error"));

        },

             methods: {

            closewindow:function (event){
                this.$emit('Closewindoe',this.closeWindoe);
            },
                 EditName:function (){
                    let id=this.editdata;
                     axios.post('/Editdata/'+id, {name:this.dataA})
                         .then((response) => {
                             this.closewindow(),
                             this.$router.push({name:'Home'});

                         })


                 }


        }


    }
</script>

<style scoped>

</style>