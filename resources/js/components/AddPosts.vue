<template>
    <v-layout row justify-center>
        <v-dialog v-model="dialog" persistent max-width="600px">

            <v-card>
                <v-card-title>
                    <span class="headline">Add New Data</span>
                </v-card-title>
                <v-card-text>
                    <v-container grid-list-md>
                        <v-layout wrap>
                            <v-flex xs12 sm6 md4>
                                <v-text-field label="Legal first name*" required v-model="Name"></v-text-field>
                            </v-flex>

                        </v-layout>
                    </v-container>
                    <small>*indicates required field</small>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn color="blue darken-1" flat @click="dialog = false">Close</v-btn>
                    <v-btn color="blue darken-1" flat @click="getdata()">Save</v-btn>
                </v-card-actions>
            </v-card>
        </v-dialog>
    </v-layout>
</template>

<script>
    export default {
        data: () => ({
            dialog: true,
            Name:null

        }),
        methods: {
            getdata: function(event){
                this.$emit('Clicked',this.Name);
                console.log(this.Name);

            }

        }


    }
</script>

<style scoped>

</style>