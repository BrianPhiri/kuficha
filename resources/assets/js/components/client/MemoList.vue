<template>
    <div>
        <main role="main" style="padding-top:100px">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <nav class="navbar navbar-light bg-light">
                        <button class="btn btn-warning float-right" v-on:click="openForm" v-show="!isCreating">Add new message</button>
                    </nav>
                    <div class="card-body bg-light" v-show="isCreating" style="padding-bottom: 5px;">
                            <div class="form-group ">
                                <label class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                  <input type="text" v-model="memo.title" class="form-control" name="title" placeholder="Title">
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" rows="3" v-model="memo.message"></textarea>
                            </div>
    
                            <div class="form-group ">
                                <label class="col-sm-2 col-form-label">Pass key</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" placeholder="Key" v-model="memo.passKey">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger float-left" v-on:click="closeForm">Close</button>
                                <button class="btn btn-primary float-right" v-on:click="sendForm()">Add</button>
                            </div>
                            
                        </div>
                </div>
            </div>
            <div class="col-sm-8 mx-auto" style="padding-top:5px">
                <memo v-for="memo in memos" v-bind:memo="memo" :key="memo.id"></memo>
            </div>
        </main>
    </div>
</template>

<script>

import Memo from "./Memo";

export default {
    props: ['memos'],
    data() {
        return { 
            memo : {
                title: '',
                message: '',
                passKey: ''
            },
            isCreating: false
        };
    },
    components: {
        Memo,
    },
    methods: {
        openForm(){
            this.isCreating = true;
        },
        closeForm(){
            this.isCreating = false;
        },
        sendForm(){
            axios.post('memos', this.memo)
                .then((res) => {
                    console.log(res)
                }).catch((err) => console.log(err))
        }
    },
    mounted() {
        // console.log("MemoList component mounted.");
        
    }
};
</script>