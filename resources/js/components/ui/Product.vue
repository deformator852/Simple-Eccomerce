<script lang="ts" setup>
import { Card, CardContent, CardTitle } from '@/components/ui/card';
import type { Product as ProductType } from '@/types/product';
import { Button } from '@/components/ui/button';
import { router, usePage } from '@inertiajs/vue3';
import { AppPageProps, User } from '@/types';

interface PageProps extends AppPageProps{
    user: User|null;
}
const props = defineProps<{ product: ProductType }>();
const page = usePage<PageProps>();

const user: User | null = page.props.user;
function addToCart() {
    if (!user) {
        router.visit('/login')
    }
}
</script>
<template>
    <Card
        class="w-full"
    >
        <CardContent>
            <CardTitle>{{ props.product.name }}</CardTitle>
            <p class="my-3">$ {{ props.product.price }}</p>
            <Button class="text-2xl cursor-pointer" @click="addToCart">add to cart</Button>
        </CardContent>
    </Card>
</template>
