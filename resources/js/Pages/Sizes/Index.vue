<template>
    <master-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Tallas
            </h2>
        </template>

        <div class="py-8">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-md">
                    <material-table :headers="['#','Talla','Centimetros']">
                        <tr v-for="(item,index) in sizes" :key="index">
                            <td class="px-6 py-4 whitespace-no-wrap">                                                        
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{item.id}}
                                </div>                                
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap">                                                        
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{item.size}}
                                </div>                                
                            </td>
                            <td class="px-2 py-4 whitespace-no-wrap">                                                        
                                <div class="text-sm leading-5 font-medium text-gray-900">
                                    {{item.cms}}
                                </div>                                
                            </td>                    
                            <td class="pl-2 py-4 whitespace-no-wrap text-sm leading-5 font-medium">
                                 <a :href="route('sizes.show',{'id':item.id})" class="text-gray-300  hover:text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-6 h-6">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </td>
                        </tr>
                    </material-table>
                </div>
            </div>
        </div>
    </master-layout>
</template>

<script>
    import MasterLayout from '@/Layouts/MasterLayout'
    import Table from '@/Components/Table'

    export default {
        components: {
            MasterLayout,
            'material-table':Table
        },
        props:{
            sizes:{
                type:Array,
                default:[]
            }
        }
    }
</script>
