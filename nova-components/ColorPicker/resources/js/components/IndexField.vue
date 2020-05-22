<template>
    <div class="w-12 form-control form-input form-input-bordered" style="background-color:field.chose"></div>

</template>

<script>
    const axios = require('axios').default;
    export default {
    props: ['resourceName', 'field'],

    mounted() {

       axios.get('/usr')
            .then(function (response) {
                // handle success
                this.field = response.data;
            })}
}
</script>
