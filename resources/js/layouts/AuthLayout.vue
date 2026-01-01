<script lang="ts" setup>
import { NavigationMenu } from '@/components/ui/navigation-menu';
import { Link } from '@inertiajs/vue3';

defineProps<{
    title?: string;
    description?: string;
}>();
</script>

<template>
    <div class="mt-5 mb-5 flex w-full justify-center [&_a]:mr-5">
        <NavigationMenu>
            <Link href="/">Home</Link>
            <Link href="/cart">Cart</Link>
            <Link href="/logout">logout</Link>
        </NavigationMenu>
    </div>
    <div>
        <slot />
    </div>
</template>
