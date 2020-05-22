<template>
    <default-field :field="field" :errors="errors">
        <template slot="field">

<!--            <label><input type="checkbox" :checked="value" value="HR" /> HR </label>-->
<!--            <label><input   v-on:click="" type="checkbox" value="Tech" /> Tech </label>-->
<!--            <label><input   type="checkbox" value="Consultant" /> Consultant </label>-->
<!--            <label><input   @click="checked(true)"  type="checkbox" value="Finance" /> Finance </label>-->
<!--            <div>-->
<!--               <label><input type="checkbox" value="HR" v-model="checkedbox" > HR </label>-->
<!--                <label><input type="checkbox" value="Tech" v-model="checkedbox" > Tech </label>-->
<!--                <label><input type="checkbox" value="Finance" v-model="checkedbox" > Finance </label>-->
<!--            </div>-->
            <input type="checkbox" id="HR" value="HR" v-model="checkedNames">
            <label for="HR">HR</label>
            <input type="checkbox" id="Finance" value="Finance" v-model="checkedNames">
            <label for="Finance">Finance</label>
            <input type="checkbox" id="Tech" value="Tech" v-model="checkedNames">
            <label for="Tech">Tech</label>
            <span>{{ checkedNames }}</span>
        </template>
    </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova'

export default {

    mixins: [FormField, HandlesValidationErrors],

    props: ['resourceName', 'resourceId', 'field' ],

    data() {
        return {
            checkedNames: []
        }
    },

    methods: {
        /*
         * Set the initial, internal value for the field.
         */
        setInitialValue() {
            this.value = this.field.value || ''
        },

        /**
         * Fill the given FormData object with the field's internal value.
         */
        fill(formData) {
            formData.append(this.field.attribute, this.value || '')
        },

        /**
         * Update the field's internal value.
         */
        handleChange(value) {
            this.value = value
        },

    }}
</script>
