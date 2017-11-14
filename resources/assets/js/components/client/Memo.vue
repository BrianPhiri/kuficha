<template>
    <div>  
        <div class="card border-secondary mb-3">
            <div class="card-header">
                {{ memo.title }}
            </div>
            <div class="card-body">
                <h4 class="card-title">Writen on {{ memo.created_at }}</h4>
                <p class="card-text">{{ memo.message }}</p>
                <a href="#" class="btn btn-primary float-right" >View Plain message</a>
            </div>
        </div>
    </div>
  </div>    
</template>

<script>
    export default {
        props: ['memo'],
        mounted() {
            console.log('Memo component mounted.')
        }
    }
</script>