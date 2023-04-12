<div class="modal fade" id="m-feed" tabindex="-1" aria-labelledby="m-feedLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
            <div class="modal-form">
                <div class="d-md-flex align-items-center justify-content-between">
                    <div class="form-title-container">
                        <div class="form-title">Зв’яжіться з нами</div>
                        <div class="title-anons">Заповніть форму нижче і ми вам зателефонуємо!</div>
                    </div>
                    <div class="form-contacts">
                        <a href="tel:{{ rawPhone(settings('sales_phone')) }}" class="item">{{ settings('sales_phone') }}</a>
                        <a href="mailto:{{ settings('support_email') }}" class="item">{{ settings('sales_email') }}</a>
                    </div>
                </div>
                <x-splade-form
                    :default="['type' => '','id' => '', 'rating' => 5,'name' => '', 'email' => '', 'phone' => '', 'comment' => '', 'check' => false]"
                    :action="route('feedback')" class="form">

                    <input type="hidden" name="type" v-model="form.type">
                    <input type="hidden" name="id" v-model="form.id">

                    <div v-if="state.shared.feedback.type === 'good_testimonial'">
                        <div class="raiting d-flex">
                            <div class="star" @click="form.rating = 1">
                                <span class="star-empty icon-star"></span>
                                <span v-if="form.rating >= 1" class="star-full icon-star"></span>
                                <span v-else></span>
                            </div>
                            <div class="star" @click="form.rating = 2">
                                <span class="star-empty icon-star"></span>
                                <span v-if="form.rating >= 2" class="star-full icon-star"></span>
                                <span v-else></span>
                            </div>
                            <div class="star" @click="form.rating = 3">
                                <span class="star-empty icon-star"></span>
                                <span v-if="form.rating >= 3" class="star-full icon-star"></span>
                                <span v-else></span>
                            </div>
                            <div class="star" @click="form.rating = 4">
                                <span class="star-empty icon-star"></span>
                                <span v-if="form.rating >= 4" class="star-full icon-star"></span>
                                <span v-else></span>
                            </div>
                            <div class="star" @click="form.rating = 5">
                                <span class="star-empty icon-star"></span>
                                <span v-if="form.rating >= 5" class="star-full icon-star"></span>
                                <span v-else></span>
                            </div>
                        </div>

                    </div>

                    <div class="form-container d-md-flex">

                        <div class="form-left">
                            <div class="input-container">
                                <label class="label">Ваше ім’я</label>
                                <input v-model="form.name" type="text" class="input" name="imya" autocomplete="off">
                            </div>
                            <div class="input-container">
                                <label class="label">Ваш email*</label>
                                <input v-model="form.email" type="text" class="input email important" name="email"
                                       autocomplete="off">
                            </div>
                            <div class="input-container">
                                <label class="label">Номер телефону</label>
                                <input v-model="form.phone" type="text" class="input phone" name="phone"
                                       autocomplete="off">
                            </div>
                        </div>
                        <div class="form-right">
                            <div class="input-container">
                                <label class="label">Повідомлення</label>
                                <textarea v-model="form.comment" name="message" class="textarea"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-bottom d-md-flex">
                        <div class="bottom-left">
                            <div class="checkbox">
                                <input v-model="form.check" type="checkbox" name="politica" id="politica"
                                       class="check important">
                                <label for="politica">Даю згоду на обробку персональних данних, згідно з <a href="#">політикою
                                        конфіденційності</a></label>
                            </div>
                        </div>
                        <div class="bottom-right">
                            <x-splade-submit
                                class="button-default bgl submit d-flex align-items-center justify-content-center"
                                @click="form.type = state.shared.feedback.type; form.id = state.shared.feedback.id"
                            >
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
