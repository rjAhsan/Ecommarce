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
                                <v-text-field label="Legal first name*" required v-model="this.data.name" ></v-text-field>
                            </v-flex>

                        </v-layout>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="blue darken-1" flat @click="closewindow">Close</v-btn>

                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-layout>
</template>

<script>
    export default {
        props:['data_id'],
        data: () => ({
            dialog: true,
            closeWindoe:true,
            data:null

        }),
        created(){
            var id=this.data_id;
           axios.get('/Editdata/'+id)
              .then((response)=> this.data=response.data).
              catch(console.log("Error"));
           console.log(response.data);
    },

             methods: {
            getdata: function(event){
                this.$emit('Clicked',this.Name);
                // console.log(this.Name);

            },
            closewindow:function (event){
                this.$emit('Closewindoe',this.closeWindoe);
            }


        }


    }
</script>

<style scoped>

</style>