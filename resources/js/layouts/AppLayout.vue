<script lang="ts" setup>
import AuthLayout from '@/layouts/AuthLayout.vue';
import type { BreadcrumbItemType } from '@/types';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
});
</script>

<template>
    <AuthLayout :breadcrumbs="breadcrumbs">
        <slot />
    </AuthLayout>
</template>
