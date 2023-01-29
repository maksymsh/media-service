<SpladeToasts>
    <template #default="toasts">
        <x-splade-component
            is="transition"
            animation="opacity"
            appear
            show="toasts.hasBackdrop"
            class="position-fixed bg-black bg-opacity-75"
        />

        <div class="position-fixed">
            <div v-for="position in toasts.positions" class="relative">
                <div :class="{
                    'position-absolute': true,
                    'align-items-start justify-content-start': position == 'left-top',
                    'align-items-center justify-content-start': position == 'center-top',
                    'align-items-end justify-content-start': position == 'right-top',
                    'align-items-start justify-content-center': position == 'left-center',
                    'align-items-center justify-content-center': position == 'center-center',
                    'align-items-end justify-content-center': position == 'right-center',
                    'align-items-start justify-content-end': position == 'left-bottom',
                    'align-items-center justify-content-end': position == 'center-bottom',
                    'align-items-end justify-content-end': position == 'right-bottom'
                }">
                    <template v-for="(toast, toastKey) in toasts.toasts">
                        <template v-if="toast.position == position && !toast.dismissed && toast.html">
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
        </div>
    </template>
</SpladeToasts>
