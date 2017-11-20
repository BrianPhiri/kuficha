<template>
    <div class="card text-center" style="padding-top:100px; padding-left: 100px; padding-right:100px">
        <h4 class="text-center">Enter passkey to view Text</h4>
        <form action="/decrypt" method="POST" style="max-width: 400px;padding: 15px 35px 45px;margin: 0 auto;background-color: #fff;border: 1px solid rgba(0,0,0,0.1);  ">       
            <h2 class="form-signin-heading"> {{memo.title}} </h2> </br>
            <input type="password" class="form-control" name="passkey" placeholder="Passkey"/> </br>
            <input type="hidden" name="id" v-model="id"/>
            <button class="btn btn-primary btn-block" type="submit">read</button>   
        </form>
    </div>
</template>

<script>
    export default {
        props: ['memo'],
        data(){
            return {
                id : this.memo.id
            }
        }
    }
</script>
