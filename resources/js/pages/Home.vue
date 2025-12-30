<script lang="ts" setup>
import { Card, CardContent, CardTitle } from '@/components/ui/card';
import { NavigationMenu } from '@/components/ui/navigation-menu';
import { Link, usePage } from '@inertiajs/vue3';

const { props } = usePage();
const products = props.products;
</script>
<template>
    <div>
        <div class="mt-5 mb-5 flex w-full justify-center [&_a]:mr-5">
            <NavigationMenu>
                <Link href="/">Home</Link>
                <Link href="/cart">Cart</Link>
                <Link href="/register">Register</Link>
                <Link href="/login">Login</Link>
                <Link href="/logout">logout</Link>
            </NavigationMenu>
        </div>
        <div class="flex min-h-screen w-full justify-center px-4 sm:px-0">
            <div
                class="grid min-h-36 w-full max-w-7xl min-w-1/12 grid-cols-1 gap-x-5 gap-y-5 md:grid-cols-3"
            >
                <Card
                    v-for="product in products"
                    :key="product.id"
                    class="w-full"
                >
                    <CardTitle>{{ product.name }}</CardTitle>
                    <CardContent>
                        <p>$ {{ product.price }}</p>
                    </CardContent>
                </Card>
            </div>
        </div>
    </div>
</template>

<style scoped></style>
