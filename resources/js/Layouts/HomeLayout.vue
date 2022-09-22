<script setup>
    import FooterHome from "../Shared/Home/FooterHome.vue";
    import NavHome from "../Shared/Home/NavHome.vue";
</script>

<template>
    <div>
        <NavHome />

        <main>
            <slot />
        </main>

        <FooterHome />
    </div>
</template>
