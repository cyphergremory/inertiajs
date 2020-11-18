<template>
    <master-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                
            </h2>
        </template>
        <div class="py-8">
           <!-- component -->
            <div class="flex flex-col w-full max-w-lg mx-auto p-4 border border-gray-200 bg-white shadow-sm">
                <div class="flex flex-col mb-4">
                    <label for="name"
                        class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                            Producto
                    </label>

                    <div class="relative">

                        <div class="absolute flex border border-transparent left-0 top-0 h-full w-10">
                            <div class="flex items-center justify-center rounded-tl rounded-bl z-10 bg-gray-100 text-gray-400 text-lg h-full w-full">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="stroke-current w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                        </div>

                        <input id="name"
                            name="name"
                            type="text"
                            placeholder="Ej. Zapato Cardigan Negro"
                            v-model="name"
                            class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 pr-2 pl-12">

                    </div>
                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" v-if="errors.name">
                        Invalid username field !
                    </span>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="name"
                        class="mb-1 text-xs sm:text-sm tracking-wide text-gray-600">
                        Description
                    </label>

                    <div class="relative">
                        <textarea id="name"
                            name="name"                        
                            class="text-sm sm:text-base relative w-full border rounded placeholder-gray-400 focus:border-indigo-400 focus:outline-none py-2 px-2"
                            v-model="description"
                            ></textarea>

                    </div>

                    <span class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1" v-if="errors.description">
                        Invalid username field !
                    </span>
                </div>
                <div class="w-full flex flex-row justify-end align-center">
                    <a :href="route('products.index')"
                        class="text-gray-400 font-bold py-2 px-4 mr-auto focus:outline-none hover:text-blue-500"
                        type="submit"
                    >
                        Volver
                    </a>
                    <button class="text-gray-400 font-bold py-2 px-4 rounded hover:text-red-700"
                        type="button"
                        v-on:click="deleteItem"
                    >
                        Eliminar
                    </button>
                    <button class="shadow bg-purple-700 hover:bg-purple-500 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="button"
                        @click="save">
                        Guardar
                    </button>
                </div>
            </div>
        </div>
    </master-layout>
</template>

<script>
    import MasterLayout from '@/Layouts/MasterLayout'

    export default {
        components: {
            MasterLayout,
        },
        props:{
            product:{
                type:Object,
                default:{}
            },
            errors:{
                type:Object,
                default:{}
            }
        },
        data(){
            return{
                name:this.product.name,
                id:this.product.id,
                description:this.product.description

            }
        }
        ,methods:{
            save:function(){
                axios.put('/products/' + this.id,{
                    'name':this.name,
                    'description':this.description
                }).then(res =>{
                    window.location ='/products';
                })
                .catch(errors=>{
                    console.log(errors);
                });
            },
            deleteItem:function(){
                axios.delete('/products/'+this.id).
                then(res =>{
                   window.location = '/products';
                });
            }
        }
    }
</script>
