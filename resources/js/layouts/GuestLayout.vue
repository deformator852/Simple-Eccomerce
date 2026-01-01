<script lang="ts" setup>
import { NavigationMenu } from '@/components/ui/navigation-menu';
import { Link } from '@inertiajs/vue3';

console.log('hello');
</script>

<template>
    <div class="mt-5 mb-5 flex w-full justify-center [&_a]:mr-5">
        <NavigationMenu>
            <Link href="/">Home</Link>
            <Link href="/register">Register</Link>
            <Link href="/login">Login</Link>
        </NavigationMenu>
    </div>
    <div>
        <div class="flex min-h-screen w-full justify-center px-4 sm:px-0">
            <slot />
        </div>
    </div>
</template>
