<template>
    <div class="container mx-auto">
        <h1>Catalogo</h1>
        <table class="w-full whitespace-nowrap">
            <tr class="text-left font-bold">
                <th class="pb-4 pt-6 px-6">Produto</th>
                <th class="pb-4 pt-6 px-6">Categoria</th>
                <th class="pb-4 pt-6 px-6" colspan="2">Preço</th>
            </tr>
            <tr
                v-for="product in products.data"
                :key="product.id"
                class="hover:bg-gray-100 focus-within:bg-gray-100"
            >
                <td class="border-t">

                    {{ product.name }}
                    
                </td>
                <td class="border-t">
                    
                    {{ product.category_id }}
                    
                </td>
                <td class="w-px border-t">
                    
                    {{ product.price }}
                    
                </td>
            </tr>
            <tr v-if="products.length === 0">
                <td class="px-6 py-4 border-t" colspan="4">No products found.</td>
            </tr>
        </table>
    </div>
</template>

<script>
import HomeLayoutVue from '@/Layouts/HomeLayout.vue';

export default {
    components:{
        HomeLayoutVue
    },
    props:{
        products: Object
    },
    layout: HomeLayoutVue
    
}
</script>
