<template>
    <!-- <div>
        <Component
            v-for="link in links"
            :is="link.url ? 'Link' : 'span'"
            :href="link.url"
            v-html="link.label"
            class="px-1"
            :class="{ 'text-gray-500': !link.url, 'font-bold': link.active }"
        />
    </div> -->

    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
        <div>
            <nav class="isolate inline-flex -space-x-px rounded-lg shadow-sm" aria-label="Pagination">
            
                <Link
                    v-for="(link, index) in links" :key="index"
                    :href="link.url"
                    class="relative inline-flex items-center px-4 py-2 text-sm font-medium hover:bg-blue-100"
                    :class="{'rounded-l-md': index == 0, 'rounded-r-md': index == numberOfLinks-1, 'bg-blue-200 border-blue-300': link.active}"
                    v-html="link.label"
                ></Link>

            </nav>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        links: Array,
    },
    computed:{
        numberOfLinks(){
            return this.links.length
        },

    }
};
</script>
