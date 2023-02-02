<SpladeToast v-bind:auto-dismiss="@json($autoDismiss)" #default="toast">
    <x-splade-component is="transition" appear show="toast.show">
        <x-splade-component is="transition" child after-leave="toast.emitDismiss">
            <div class="toast show">
                <div @class([
                    'toast-header' => true,
                    'bg-success' => $isSuccess,
                    'bg-warning' => $isWarning,
                    'bg-danger' => $isDanger,
                    'bg-info' => $isInfo,
                ])>
                    @if($isSuccess)
                        <x-admin.icon name="check"/>
                        <strong class="me-auto">{{ __('Success') }}</strong>
                    @elseif($isWarning)
                        <x-admin.icon name="check"/>
                        <strong class="me-auto">{{ __('Warning') }}</strong>
                    @elseif($isDanger)
                        <x-admin.icon name="check" />
                        <strong class="me-auto">{{ __('Error') }}</strong>
                    @elseif($isInfo)
                        <x-admin.icon name="check" />
                        <strong class="me-auto">{{ __('Info') }}</strong>
                    @endif

                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ $title ?: $message }}
                </div>
            </div>
        </x-splade-component>
    </x-splade-component>
</SpladeToast>
