<template>
    <div style="padding-top:100px; padding-right: 100px; padding-left:100px">
        <div class="card">
            <div class="card-header">
                {{ memo.title }}
            </div>
            <div class="card-body">
                <h4 class="card-title"></h4>
                <p class="card-text">{{ memo.message }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['memo'],
        mounted() {
            console.log('plain text component mounted.')
        }
    }
</script>
