<template>
    <table class="min-w-full divide-y divide-gray-200">
    <thead>
        <tr>
        <th class="px-6 py-4 bg-gray-700 text-left text-xs leading-4 font-medium text-white uppercase tracking-wider"
            v-for="(header,index) in headers" :key="index"
        >
            {{header}}
        </th>
        <th class="px-6 py-4 bg-gray-700 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">            
        </th>
        </tr>
    </thead>
    <tbody class="bg-white divide-y divide-gray-200">
        <slot></slot>
    </tbody>
    </table>        
</template>

<script>
export default {
    props:{
        headers:{
            type:Array,
            default:['first','second']
        }
    }
}
</script>