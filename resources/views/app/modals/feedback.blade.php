<div class="modal fade" id="m-feed" tabindex="-1" aria-labelledby="m-feedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-form">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div class="form-title-container">
                        <div class="form-title">Зв’яжітьс’я з нами</div>
                        <div class="title-anons">Заповніть форму нище і ми вам зателефонуємо!</div>
                    </div>
                    <div class="form-contacts">
                        <a href="tel:0322420727" class="item">(032) 242-07-27</a>
                        <a href="mailto:sales@medias.com.ua" class="item">sales@medias.com.ua</a>
                    </div>
                </div>
                <x-splade-form :default="['name' => '', 'email' => '', 'phone' => '', 'text' => '', 'check' => false]" action="" class="form">
                    <div class="form-container d-md-flex">
                        <div class="form-left">
                            <div class="input-container">
                                <label class="label">Ваше ім’я</label>
                                <input v-model="form.name" type="text" class="input" name="imya" autocomplete="off">
                            </div>
                            <div class="input-container">
                                <label class="label">Ваш email*</label>
                                <input v-model="form.email" type="text" class="input email important" name="email" autocomplete="off">
                            </div>
                            <div class="input-container">
                                <label class="label">Номер телефону</label>
                                <input v-model="form.phone" type="text" class="input phone" name="phone" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="input-container">
                                <label class="label">Повідомлення</label>
                                <textarea v-model="form.text" name="message" class="textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-bottom d-md-flex">
                        <div class="bottom-left">
                            <div class="checkbox">
                                <input v-model="form.check" type="checkbox" name="politica" id="politica" class="check important">
                                <label for="politica">Даю згоду на обробку персональних данних, згідно з <a href="#">політикою
                                        конфіденційності</a></label>
                            </div>
                        </div>
                        <div class="bottom-right">
                            <x-splade-submit class="button-default bgl submit d-flex align-items-center justify-content-center">
                                <span class="value">надіслати</span>
                                <span class="ic icon-arrow-right"></span>
                            </x-splade-submit>
                        </div>
                    </div>
                </x-splade-form>
            </div>
        </div>
    </div>
</div>
