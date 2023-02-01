<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-8 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Welcome</h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <x-splade-form>
                                    <x-splade-input name="email" label="{{ __('Email') }}" />

                                    <x-splade-input name="password" type="password" label="{{ __('Password') }}"/>

                                    <x-splade-group inline label=" ">
                                        <x-splade-checkbox name="remember" label="{{ __('Remember me') }}" />
                                    </x-splade-group>

                                    <x-splade-group inline  label=" ">
                                        <x-splade-submit label="{{ __('Log in') }}"/>
                                    </x-splade-group>


                                </x-splade-form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>
