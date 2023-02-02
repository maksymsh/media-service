<SpladeToasts>
    <template #default="toasts">
        <x-splade-component
            is="transition"
            animation="opacity"
            appear
            show="toasts.hasBackdrop"
            class="position-fixed"
        />

        <div v-for="position in toasts.positions" class="relative">
            <div :class="{
                'toast-container p-3': true,
                'start-0 top-0': position === 'left-top',
                'start-50 top-0': position === 'center-top',
                'end-0 top-0': position === 'right-top',
                'start-0 top-50': position === 'left-center',
                'start-50 top-50': position === 'center-center',
                'end-0 top-50': position === 'right-center',
                'start-0 bottom-0': position === 'left-bottom',
                'start-50 bottom-0': position === 'center-bottom',
                'end-0 bottom-0': position === 'right-bottom'
            }">
                <template v-for="(toast, toastKey) in toasts.toasts">
                    <template v-if="toast.position === position && !toast.dismissed && toast.html">
                        <SpladeRender
                            @dismiss="toasts.dismissToast(toastKey)"
                            :toast-key="toastKey"
                            :key="toastKey"
                            :html="toast.html"
                        />
                    </template>
                </template>
            </div>
        </div>
    </template>
</SpladeToasts>
