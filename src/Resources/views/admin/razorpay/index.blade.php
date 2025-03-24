<x-admin::layouts>
    <!-- Page Title -->
    <x-slot:title>
        @lang('razorpay::app.admin.razorpay.title')
    </x-slot>

    @php
        $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_id');

        $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_client_secret');

        if (core()->getConfigData('sales.payment_methods.razorpay.sandbox')) {
            $clientId = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_id');

            $clientSecret = core()->getConfigData('sales.payment_methods.razorpay.oauth_test_client_secret');
        }
    @endphp

    <x-admin::form
        :action="route('razorpay.payment.connect')"
        enctype="multipart/form-data"
    >
        <div class="flex items-center justify-between gap-4 max-sm:flex-wrap">
            <p class="py-3 text-xl font-bold text-gray-800 dark:text-white">
                @lang('razorpay::app.admin.razorpay.title')
            </p>

            <div class="flex items-center gap-x-2.5">
                <a 
                    href="{{ route('admin.razorpay.refresh') }}" 
                    class="transparent-button"
                >
                    @lang('razorpay::app.admin.razorpay.refresh')
                </a>

                <button class="primary-button">
                    @lang('razorpay::app.admin.razorpay.connect')
                </button>
            </div>
        </div>

        <div class="mt-3.5 flex gap-2.5 max-xl:flex-wrap">
            <div class="flex flex-1 flex-col gap-2">
                <div class="box-shadow rounded bg-white p-4 dark:bg-gray-900">
                    <!-- OAuth Client ID -->
                    <x-admin::form.control-group>
                        <x-admin::form.control-group.label class="required">
                            @lang('razorpay::app.admin.razorpay.oauth-client-id')
                        </x-admin::form.control-group.label>

                        <x-admin::form.control-group.control
                            type="text"
                            name="oauth_client_id"
                            rules="required"
                            value="{{ $clientId }}"
                            :label="trans('razorpay::app.admin.razorpay.oauth-client-id')"
                            :placeholder="trans('razorpay::app.admin.razorpay.oauth-client-id')"
                            readonly
                        />

                        <x-admin::form.control-group.error control-name="oauth_client_id" />
                    </x-admin::form.control-group>

                    <!-- OAuth Client Secret -->
                    <x-admin::form.control-group>
                        <x-admin::form.control-group.label class="required">
                            @lang('razorpay::app.admin.razorpay.oauth-client-secret')
                        </x-admin::form.control-group.label>

                        <x-admin::form.control-group.control
                            type="password"
                            name="oauth_client_secret"
                            rules="required"
                            value="{{ $clientSecret }}"
                            :label="trans('razorpay::app.admin.razorpay.oauth-client-secret')"
                            :placeholder="trans('razorpay::app.admin.razorpay.oauth-client-secret')"
                            readonly
                        />

                        <x-admin::form.control-group.error control-name="oauth_client_secret" />
                    </x-admin::form.control-group>
                </div>
            </div>
        </div>
    </x-admin::form>
</x-admin::layouts>