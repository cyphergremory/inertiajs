<template>
    <master-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <welcome />
                </div>
            </div>
        </div>
    </master-layout>
</template>

<script>
    import MasterLayout from '@/Layouts/MasterLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            MasterLayout,
            Welcome,
        },
    }
</script>
